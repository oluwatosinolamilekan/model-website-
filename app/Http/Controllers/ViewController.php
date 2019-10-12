<?php

namespace App\Http\Controllers;
use App\Models\{Contact};
use Illuminate\Http\Request;
use Validator;
use DB;
use App\Http\Repositories\UserRepository;

class ViewController extends Controller
{
    private $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }
   
    public function index()
    {
        $galleries = $this->user->slider_image();
        $random_model = $this->user->random_model();
    	return view('views.content',compact('galleries','random_model'));
    }

     public function about()
    {
    	return view('views.about');
    }

    public function galleries()
    {
        $models = $this->user->models();
        return view('views.gallaries',compact('models'));
    }

    public function models()
    {
        $models = User::latest()->simplePaginate(20);
      return view('views.models',compact('models'));
    }

    public function profile($slug)
    {
        $models_profile = $this->user->profile($slug);
        return view('views.profile',compact('models_profile'));
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required|unique:contacts',
                'message' => 'required',
            ]);
            if ($validator->fails()) {
                return back()
                ->withErrors($validator)
                ->withInput();
            }

            try {
             DB::beginTransaction();
                $contact = new Contact;
                $contact->name = $request->name;
                $contact->phone = $request->phone;
                $contact->email = $request->email;
                $contact->message = $request->message;
                $contact->save();
                if ($contact) {
                    DB::commit();
                    return back()->with('success','Message Sent!');

                }else{
                    DB::rollback();
                    return back();
                }
            } catch (\Exception $e) {
                return back()->with('error',$e->getMessage());
            }
        }
        return view('views.contact');
    }

    
    public function token ($token)
    {
         $passwordReset = PasswordReset::where('token', $token)->first();
          if (!$passwordReset)
          {
              abort(404);
          }
           
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(10)->isPast()) {
            $passwordReset->delete();
            
            return back()->with('success','This password reset token is invalid');

        }
        return view('auth.reset',compact('passwordReset')); 
    }

    public function reset(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|confirmed',
            'token' => 'required|string'
        ]);
        if ($validator->fails()) {
            return back()
            ->withErrors($validator)
            ->withInput();
        }

        $passwordReset = PasswordReset::where([
            ['token', $request->token],
            ['email', $request->email]
        ])->first();
        if (!$passwordReset)
           
            return back()->with('success','This password reset token is invalid');
        
        DB::beginTransaction();
        $user = User::where('email', $passwordReset->email)->first();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        if ($user) {
             DB::commit();
        $passwordReset->delete();
            //  return $user;
         return redirect()->route('login')->with('success','Password Change SuccessFully');
        }else{
            
            DB::rollback();
            return $user = false;
        }
        return redirect()->route('login')->with('success','Password Change SuccessFully');
    }

    

}

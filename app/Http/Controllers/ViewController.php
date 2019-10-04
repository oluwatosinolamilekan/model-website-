<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
    	return view('views.content');
    }

     public function about()
    {
    	return view('views.about');
    }

    public function galleries()
    {
        return view('views.gallaries');
    }

    public function models()
    {
        $models = User::latest()->paginate(20);
      return view('views.models',compact('models'));
    }

    public function profile($slug)
    {
        $models_profile = User::where('slug',$slug)->firstOrFail();
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
                $contact = new Contact;
                $contact->name = $request->name;
                $contact->phone = $request->phone;
                $contact->email = $request->email;
                $contact->message = $request->message;
                $contact->save();
                return back()->with('success','Message Sent!');
            } catch (\Exception $e) {
                return back()->with('error',$e->getMessage());
            }
        }
        return view('views.contact');
    }

   

    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return back()
                ->withErrors($validator)
                ->withInput();
            }
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'status' => '1'])) {
                return redirect()->route('dashboard');
               
            }else{
                return back();
            }
        }
        return view('views.login');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            try {
                $validator = Validator::make($request->all(), [
                    'email' => 'required',
                    'password' => 'required',
                ]);
    
                if ($validator->fails()) {
                    return back()
                    ->withErrors($validator)
                    ->withInput();
                }

                
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->gender = $request->gender;
                $user->save();

                Auth::login($user);

                //redirect to home page to upload his picture

            } catch (\Exception $e) {
                return back()->with('error',$e->getMessage());
            }
        }
        return view('views.reg');
    }

    public function uploda_picture(Request $request)
    {
        if ($request->isMethod('post')) {
            try {
                if ($request->hasFile('images')) {
                        $date = strtotime(date("Y-m-d H:i:s"));
                        $reference = $date.mt_rand(1, 9);
                        $answer = new Answer;
                        $answer->user_id = $request->user_id;
                        $answer->subject = $request->subject;
                        $answer->body = $request->body;
                        $answer->slug = uniqid($date);
                        $answer->read = 0;
                        $answer->save();
                        $user = User::where('id', $answer->user_id)->first();
                        $user->notify(new Ans($answer));
                        $files = $request->file('images');
                            foreach ($files as $file) {
                                $image = new Answer_image();
                                Cloudder::upload($file, null);
                                list($width, $height) = getimagesize($file);
                                $publicId = Cloudder::show(Cloudder::getPublicId(), ["width" => width, "height"=>height]);
                                $file_size = $file->getClientSize();
                                $image->answer_id = $answer->id;
                                $image->images = $publicId;
                                $image->save();
                            }
                }
    
            } catch (\Exception $e) {
                return back()->with('error', $e->getMessage());
                
            }
        }
    }

    public function model(Type $var = null)
    {
        # code...
    }

    public function forget_password(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'email' => 'required',
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator);
            }
            $user = User::where('email', $request->email)->first();
             if (!$user)
                return back()->with('success','We cant find a user with that e-mail address.');

                $passwordReset = PasswordReset::updateOrCreate(
                    ['email' => $user->email],
                    [
                        'email' => $user->email,
                        'token' => str_random(60)
                    ]
                );
                // $user->notify(
            //     new PasswordResetRequest($passwordReset->token)
            // );
            Mail::to($user->email)->send(new ForgetPassword($passwordReset->token));
            return back()->with('success','We have e-mailed your password reset link!');
        }    
         return view('auth.forget_password');
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

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success','Logout Successfully');    
    }

}

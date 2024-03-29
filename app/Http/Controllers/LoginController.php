<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Repositories\LoginRepository;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
	private $user;

	public function __construct(LoginRepository $user)
    {
        $this->user = $user;
    }

    public function login(Request $request)
    {
        if($request->isMethod('post')){

            try {

                $validator = Validator::make($request->all(), [
                    'email' => 'required',
                    'password' => 'required',
                ]);
                
            } catch (\Exception $e) {
                return back()->with('error',$e->getMessage());
            }

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('user.dashboard')->with('success','Welcome');
            }else{
                return back()->with('error','wrong password');
            }
        }
        if (Auth::check() && Auth::user()->role_id == 3) {
            return redirect()->route('user.dashboard');
        }
        return view('views.login');
    }

    public function forget_password(Request $request)
    {
    	if ($request->isMethod('post')) 
    	{
    		$validator = Validator::make($request->all(), [
                'email' => 'required',
            ]);

            if ($validator->fails()) {
                return back()
                ->withErrors($validator)
                ->withInput();
            }
            try {
            	if($validator)
	    		{
	                    $user = $this->user->forget_password($request);
	                    if($user == false){
	                        return Redirect::back()->with('error', 'We cant find a user with that e-mail address.');
	                    }
	                    return redirect()->back()->with('success','We have e-mailed your password reset link!');

	                }
	                else{
	                    return Redirect::back()->withErrors($validator);
	                }
            } catch (\Exception $e) {
	    		return back()->with('error',$e->getMessage());
            }
    	}
    	return view('views.forget_password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success','Logout Successfully');    
    }
}

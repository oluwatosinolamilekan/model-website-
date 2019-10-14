<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Repositories\UserRepository;
class UserController extends Controller
{

    private $user;

	public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

 
    public function register(Request $request)
    {
    	if ($request->isMethod('post')) {
    		try {
	    		$validator = Validator::make($request->all(), [
					'first_name' => 'required',
					'last_name' => 'required',
					'email' => 'required|unique:users',
					'password' => 'required|confirmed',
					'gender' => 'required',
					'profile_image' => 'required|image',
				]);
	    	} catch (\Exception $e) {
	    		return back()->with('error',$e->getMessage());
	    	}
	    	try {
	    		if($validator)
	    		{
	                    $user = $this->user->register($request);
	                    if($user == false ){
	                        return Redirect::back()->with('error', 'User cannot be created.');
						}
						return redirect()->route('user.dashboard')->with('success','Welcome');
	                    // return redirect()->back()->with('success','User created Succesfully');

	                }
	                else{
	                    return Redirect::back()->withErrors($validator);
	                }
	    	} catch (\Exception $e) {
	    		return back()->with('error',$e->getMessage());
	    	}
    	}
    	return view('views.reg');
   	}
}

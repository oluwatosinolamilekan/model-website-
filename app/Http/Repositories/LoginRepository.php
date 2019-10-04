<?php

namespace App\Http\Repositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Mail;
use Auth;
use App\Models\{User,PasswordReset};
use Cloudder;
use DB;

class LoginRepository
{

	public function forget_password($request)
	{
		try {
	
			$user = User::where('email', $request->email)->first();
			if($user){
				DB::beginTransaction();
				$passwordReset = PasswordReset::updateOrCreate(
	                ['email' => $user->email],
	                [
	                    'email' => $user->email,
	                    'token' => str_random(60)
	                ]
	            );
        	 	Mail::to($user->email)->send(new ForgetPassword($passwordReset->token));
			}else{
				return $user = false;
			}
        	if (!$user) 
        	{
        		return false;
        	}else{
        		DB::commit();
        		return true;
        	}	
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}

	

}

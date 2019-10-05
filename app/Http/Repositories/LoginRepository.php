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
use App\Notifications\ForgetPassword;

class LoginRepository
{

	public function forget_password($request)
	{
		try {
	
			$user = User::where('email', $request->email)->first();
			DB::beginTransaction();
			 if($user){
				$passwordReset = PasswordReset::updateOrCreate(
	                ['email' => $user->email],
	                [
	                    'email' => $user->email,
	                    'token' => str_random(60)
	                ]
	            );
        	 	$user->notify( new ForgetPassword($passwordReset->token));
			}
        	if (!$user) 
        	{
        		DB::rollback();
        		return false;
        	}else{
        		DB::commit();
        		return true;
        	}	
		} catch (\Exception $e) {
				dd($e->getMessage());
			return $e->getMessage();
		}
	}

	

}

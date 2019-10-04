<?php

namespace App\Http\Repositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Mail;
use Auth;
use App\Models\{User,PasswordReset};
use Cloudder;

class LoginRepository
{

	public function forget_password($request)
	{
		try {
	
			$user = User::where('email', $request->email)->first();

			DB::beginTransaction();
			$passwordReset = PasswordReset::updateOrCreate(
                ['email' => $user->email],
                [
                    'email' => $user->email,
                    'token' => str_random(60)
                ]
            );
        	Mail::to($user->email)->send(new ForgetPassword($passwordReset->token));
        	if ($user) 
        	{
        		DB::commit();
        		return true;	
        	}else{
        		DB::rollback();
        		return false;
        	}	
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}

	

}

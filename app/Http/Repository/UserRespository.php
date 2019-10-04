<?php

namespace App\Http\Repositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Mail;
use App\Models\Laboratory;
use Auth;
use App\Models\{User,PasswordReset};


class LoginRepository
{
	public function login($request)
	{

	}

	public function register($request)
	{
		try {
			 DB::beginTransaction();
			 $user = new User;
			 $user->first_name = $user->first_name;
			 $user->last_name = $user->last_name;
			 //save slug
			 $user->email = $user->email;
			 $user->password = $user->password;
			 $user->gender = $user->gender;
			 $user->dob = $user->dob;
			 $user->phone = $user->phone;
			 $user->address = $user->address;
			 $user->city = $user->city;
			 $user->state = $user->state;
			 $user->country = $user->country;
			 $user->profile_image = $user->profile_image;
			 $user->save();
			 if (!$user) {
			 	DB::rollback();
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

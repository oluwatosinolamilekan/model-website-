<?php

namespace App\Http\Repositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Mail;
use Auth;
use DB;
class AdminRepository
{

	
	public function login($request)
	{

		if ((Auth::attempt(['email' => $request->email, 'password' => $request->password,'role_id' => '1']))){
			return true;
		}else{
			return false;
		}
	}

	public function check_if_admin_is_login()
	{
		if (Auth::check() && Auth::user()->role_id == 1) {
			return true;
		}else{
			return false;
		}
	}

	
}

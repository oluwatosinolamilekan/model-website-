<?php

namespace App\Http\Repositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Mail;
use App\Models\Laboratory;
use Auth;
use App\Models\{User,PasswordReset};
use Cloudder;

class UserRepository
{

	public function register($request)
	{
		try {

			$image_name = $request->file('profile_image')->getRealPath();
	        $name = $request->file('profile_image')->getClientOriginalName();
	        list($width, $height) = getimagesize($image_name);
	        $profile_image = Cloudder::show(Cloudder::getPublicId(), ["width" => 200, "height"=>200]);

			 DB::beginTransaction();
			 $user = new User;
			 $user->first_name = $request->first_name;
			 $user->last_name = $request->last_name;
			 // $user->slug = str_slug($request->first_name"-".$request->last_name);
			 $user->email = $request->email;
			 $user->password = $request->password;
			 $user->gender = $request->gender;
			 $user->dob = $request->dob;
			 $user->phone = $request->phone;
			 $user->address = $request->address;
			 $user->city = $request->city;
			 $user->state = $request->state;
			 $user->country = $request->country;
			 // $user->profile_image = $profile_image;
			 $user->profile_image = 'dk';

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

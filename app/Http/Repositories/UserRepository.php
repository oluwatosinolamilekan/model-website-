<?php

namespace App\Http\Repositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Mail;
use Auth;
use DB;
use App\Models\{User,PasswordReset,Gallery};
use Cloudder;

class UserRepository
{



	public function register($request)
	{
		$image_name = $request->file('profile_image')->getRealPath();

		Cloudder::upload($image_name, null);

		list($width, $height) = getimagesize($image_name);

		$profile_image = Cloudder::show(Cloudder::getPublicId(), ["width" => 383, "height"=>511]);

		DB::beginTransaction();
		$user = new User;
		$user->first_name = $request->first_name;
		$user->last_name = $request->last_name;
		$user->slug = str_slug($request->first_name."-".$request->last_name);
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		$user->gender = $request->gender;
		$user->profile_image = $profile_image;
		$user->save();
		Auth::login($user);
		if (!$user) {
			DB::rollback();
			return false;
		}else{
			DB::commit();
			return true;
		}
		
	}

	public function male_models()
	{
		$models = User::where([
			'status' => 1,
			'gender' => 'male'
		])->latest()->paginate(21);

		return $models;
	}

	public function female_models()
	{
		$models = User::where([
			'status' => 1,
			'gender' => 'female'
		])->latest()->paginate(21);
		
		return $models;
	}
	
	public function models()
	{
		$models = User::where('status',1)->latest()->paginate(21);
		return $models;
	}

	public function profile($slug)
    {
        $models_profile = User::where('slug',$slug)->firstOrFail();
        return $models_profile;
	}

	public function slider_image()
	{
		$galleries = Gallery::where([
			'status' => 1,
			'slider' => 1
		])->take(3)->get();


		return $galleries;
	}
	
	public function galleries()
	{
		$galleries = Gallery::where('status',1)->latest()->get();
		return $galleries;
	}

	public function random_model()
	{
		$random = User::where([
			'role_id' => 3,
			'status' => 1,
			])->inRandomOrder()->take(4)->get();
		return $random;
	}
	

    
}

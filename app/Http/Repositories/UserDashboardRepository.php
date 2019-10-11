<?php

namespace App\Http\Repositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Mail;
use Auth;
use App\Models\{User,Gallery};
use Cloudder;
use DB;
class UserDashboardRepository
{

	public function user_details()
	{
		$user_id = Auth::id();

		$user = User::where('id',$user_id)->first();
		return $user;
	}

	public function update_profile_image($request)
	{
		DB::beginTransaction();

		$profile_image = $request->file('profile_image')->getRealPath();
		 
		Cloudder::upload($profile_image, null);

		list($width, $height) = getimagesize($profile_image);

		$picture_url = Cloudder::show(Cloudder::getPublicId(), ["width" => 383, "height"=>511]);

		$user_id = Auth::id();

		$update_pic = User::where('id',$user_id)->first();
		$update_pic->profile_image =  $picture_url;
		$update_pic->save();

		if ($update_pic) {

			DB::commit();
			return true;

		}else{

			DB::rollback();
			return false;
		}

	}

	public function upload_picture($request)
	{
		DB::beginTransaction();
			$files = $request->file('images');
			foreach ($files as $file) {
				$image = new Gallery;
				Cloudder::upload($file, null);
				list($width, $height) = getimagesize($file);
				$publicId = Cloudder::show(Cloudder::getPublicId(), ["width" => 760, "height"=>500]);
				$file_size = $file->getClientSize();
				$image->user_id = Auth::id();
				$image->images = $publicId;
				$image->status = 0;
				$image->save();
			}
			if ($image) {
				DB::commit();
				return true;
			}
			else{
				DB::rollback();
				return false;
		}
		
	}

	public function user_galleries()
    {
    	$user_id = Auth::id();
		$galleries = Gallery::where('user_id',$user_id)->simplePaginate(21);
    	return $galleries;
    }

    public function activePictures()
    {
    	$galleries = Gallery::where('user_id',Auth::id())->Active()->simplePaginate(20);
    	return $galleries;
    }

    public function totalPictures()
    {
    	$galleries = Gallery::where('user_id',Auth::id())->count();
    	return $galleries;
    }

    public function deactivePicturesCount()
    {
    	$galleries = Gallery::where('user_id',Auth::id())->Deactive()->count();
    	return $galleries;
    }

    public function activePicturesCount()
    {
    	$galleries = Gallery::where('user_id',Auth::id())->Active()->count();
    	return $galleries;
    }

    public function deactivePictures()
    {
    	$galleries = Gallery::where('user_id',Auth::id())->Deactive()->simplePaginate(20);
    	return $galleries;
	}

	public function update_profile($request)
	{
		DB::beginTransaction();

		$user_id = Auth::id();

		$update = User::where('id',$user_id)->first();
		dd($update);
		$update->height = $request->height;
		$update->hair = $request->hair;
		$update->eye = $request->eye;
		$update->bust = $request->bust;
		$update->waist = $request->waist;
		$update->shoe = $request->shoe;
		$update->dob = $request->dob;
		$update->address = $request->address;
		$update->city = $request->city;
		$update->state = $request->state;
		$update->country = $request->country;
		$update->save();

		if ($update) {
			DB::commit();
			return true;
		}else{
			DB::rollback();
			return false;
		}
	}

	


	
	

}

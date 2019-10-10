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
    	$galleries = Gallery::where('user_id',$user_id)->simplePaginate(20);
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
	
	

}

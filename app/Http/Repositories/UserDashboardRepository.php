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
		try {
			 DB::beginTransaction();
			 $date = strtotime(date("Y-m-d H:i:s"));
			 $files = $request->file('images');
			 foreach ($files as $file) 
			 {
			 	$image = new Gallery;
                Cloudder::upload($file, null);
                list($width, $height) = getimagesize($file);
                $publicId = Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);
                $file_size = $file->getClientSize();
			 	$image->user_id = Auth::id();
			 	$image->images = $publicId;
			 	$image->status = 0;
                $image->save();
			 }
			 if ($image) {
			 	DB::commit();
			 	return true;
			 }else{
			 	DB::rollback();
			 	return false;
			 }
			
		} catch (\Exception $e) {
			//return $e->getMessage();
		}
	}

	public function user_galleries()
    {
    	$user_id = Auth::id();
    	$galleries = Gallery::where('user_id',$user_id)->paginate(20);
    	return $galleries;
    }

}

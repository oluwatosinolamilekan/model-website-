<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Repositories\UserDashboardRepository;
use Illuminate\Support\Facades\Redirect;

class UserDashboardController extends Controller
{
	private $user;

	public function __construct(UserDashboardRepository $user)
    {
        $this->user = $user;
    }

    public function dashboard(Request $request)
    {
    	if ($request->isMethod('post')) 
    	{
			try {
				$validator = Validator::make($request->all(), [
					'images' => 'required',
				]);
				
			} catch (\Exception $e) {
            	return back()->with('error',$e->getMessage());
			}
    	
            try {
            	if($validator)
	    		{
					$user = $this->user->upload_picture($request);
					if($user == true){
						return redirect()->back()->with('success','Image Uploaded');
					}
					return redirect()->back()->with('error','Image Was\'nt upload to our server');
	            }
            } catch (\Exception $e) {
            	return back()->with('error',$e->getMessage());
            }
    	}

	    $active_pictures_count = $this->user->activePicturesCount();
	    $deactive_pictures_count = $this->user->deactivePicturesCount();
	    $total_pictures = $this->user->totalPictures();
    	return view('users.dashboard',compact('active_pictures_count','deactive_pictures_count','total_pictures'));
    }

    public function user_galleries()
    {
	   $galleries = $this->user->user_galleries();
	   return view('users.user_gallery',compact('galleries'));
	}
	
	public function user_slider()
    {
	   $galleries = $this->user->user_slider();
	   return view('users.user_gallery',compact('galleries'));
	}
	
	public function upload_profile_image(Request $request)
	{
		if ($request->isMethod('post')) 
		{
			try {
				$validator = Validator::make($request->all(), [
					'profile_image' => 'required',
				]);
			} catch (\Exception $e) {
            	return back()->with('error',$e->getMessage());
			}
    	
            try {
            	if($validator)
	    		{
					$user = $this->user->update_profile_image($request);
					if($user == true){
						return redirect()->back()->with('success','Profile was Uploaded');
					}
					return redirect()->back()->with('error','Image Was\'nt upload to our server');
	            }
            } catch (\Exception $e) {
            	return back()->with('error',$e->getMessage());
            }
		}
		$user_details = $this->user->user_details();
		return view('users.profile_image',compact('user_details'));
	}

	public function edit_profile(Request $request)
	{
		if ($request->isMethod('post'))
		{
			try {
				$validator = Validator::make($request->all(), [
					'height' => 'nullable',
					'hair' => 'nullable',
					'eye' => 'nullable',
					'bust' => 'nullable',
					'waist' => 'nullable',
					'shoe' => 'nullable',
				]);
			} catch (\Exception $e) {
            	return back()->with('error',$e->getMessage());
			}
			dd($request->all());
    	
            try {
            	if($validator)
	    		{
					$user = $this->user->update_profile($request);
					if($user == true){
						return redirect()->back()->with('success','Profile was Successfully Edited');
					}
					// return redirect()->back()->with('error','Image Was\'nt upload to our server');
	            }
            } catch (\Exception $e) {
            	return back()->with('error',$e->getMessage());
            }
		}
		$user_details = $this->user->user_details();
		return view('users.edit_profile',compact('user_details'));
	}

}

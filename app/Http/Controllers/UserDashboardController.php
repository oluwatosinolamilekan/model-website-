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
    		$validator = Validator::make($request->all(), [
                'images' => 'required',
            ]);
            if ($validator->fails()) {
                return back()
                ->withErrors($validator)
                ->withInput();
            }
            try {
            	if($validator)
	    		{
	                    $user = $this->user->upload_picture($request);
	                    if($user == false){
	                        return Redirect::back()->with('error', 'image wasnt upload');
	                    }
	                    return redirect()->back()->with('success','Image Uploaded');

	                }
	                else{
	                    return Redirect::back()->withErrors($validator);
	                }
            	
            } catch (\Exception $e) {
            	return back()->with('error',$e->getMessage());
            }
    	}
    	
	    $active_pictures_count = $this->user->activePicturesCount();
	    $deactive_pictures_count= $this->user->deactivePicturesCount();
	    $total_pictures= $this->user->totalPictures();
    	return view('users.dashboard',compact('active_pictures_count','deactive_pictures_count','total_pictures'));
    }

    public function user_galleries()
    {
	   $galleries = $this->user->user_galleries();
	   return view('users.user_gallery',compact('galleries'));
    }

}

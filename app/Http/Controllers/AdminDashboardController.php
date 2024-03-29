<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\AdminDashboardRepository;
use App\Http\Repositories\UserRepository;



class AdminDashboardController extends Controller
{

    private $admin;
    private $user;


	public function __construct(AdminDashboardRepository $admin, UserRepository $user)
    {
        $this->admin = $admin;
        $this->user = $user;

    }

    public function index()
    {
        $count_models = $this->admin->count_all_models();

        $count_all_admin = $this->admin->count_all_admin();

        $all_models = $this->admin->all_models();

        $count_all_today_models = $this->admin->today_models();

        $pending_galleries = $this->admin->pending_galleries();

        $count_male_models = $this->admin->count_male_models();

        $count_female_models = $this->admin->count_female_models();

        return view('admin_pages.dashboard',compact(
            'count_models',
            'count_all_admin',
            'all_models',
            'count_all_today_models',
            'pending_galleries',
            'count_male_models',
            'count_female_models
            '
        ));
    }

    public function actived_model($id)
    {
        $actived = $this->admin->active_model($id);
        return back()->with('success','Model Have been Actived');
    }


    public function delete_contact($id)
    {
        $delete_contact = $this->admin->delete_contact($id);
        return  redirect()->back()->with('success','Contact Delete Succesfully');
    }

    public function all_models()
    {
        $all_models = $this->admin->all_models();
        return view('admin_pages.all_models',compact('all_models'));
    }

    public function delete_model($id)
    {
        $delete_model = $this->admin->delete_model($id);
        return redirect()->back()->with('success','Model was successfully deleted');
    }

    public function all_admins()
    {
        $all_admins = $this->admin->all_admins();
        return view('admin_pages.all_admins',compact('all_admins'));
    }

    public function galleries()
    {
        $galleries = $this->admin->galleries();
        // return $galleries;
        return view('admin_pages.galleries',compact('galleries'));
    }

    public function slider($id)
    {
        $gallery = $this->admin->slider($id);
        return redirect()->back()->with('sucess','Added to slider');
    }


    public function contact()
    {
        $contacts = $this->admin->contacts();
        return view('admin_pages.contact',compact('contacts'));
    }



    public function images_request(Request $request)
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
					$admin = $this->admin->confirm_user_image($request);
					if($user == true){
                        dd("work");
						return redirect()->back()->with('success','Image Uploaded');
					}
					// return redirect()->back()->with('error','Image Was\'nt upload to our server');
	            }
            } catch (\Exception $e) {
            	return back()->with('error',$e->getMessage());
            }
        }
        return view('admin.images_request');
    }
}

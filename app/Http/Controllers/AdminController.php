<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Repositories\AdminRepository;


class AdminController extends Controller
{

    private $admin;


    public function __construct(AdminRepository $admin)
    {
        $this->admin = $admin;
    }


    public function login(Request $request)
    {
        if ($request->isMethod('post'))
        {
            try {
                $validator = Validator::make($request->all(), [
                    'email' => 'required',
                    'password' => 'required',
                ]);
    
            } catch (\Exception $e) {
               return bacK()->with('error',$e->getMessage());
            }

            try {
            	if($validator)
	    		{
					$admin_login = $this->admin->login($request);
					if($admin_login == true){
                        return redirect()->route('admin.dashboard');
                    }
					return redirect()->back()->with('error','Check Your Credentials');
	            }
            } catch (\Exception $e) {
            	return back()->with('error',$e->getMessage());
            }
        }
        // $check_auth = $this->admin->check_if_admin_is_login();
        // if ($check_auth == true) {
        //     return redirect()->route('admin.dashboard');
        // }else{
        //     return redirect()->route('admin.login')->with('error','You dont have Permission');
        // }
        return view('admin.login');
    }
}

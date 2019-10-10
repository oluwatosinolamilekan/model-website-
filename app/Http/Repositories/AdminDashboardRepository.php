<?php

namespace App\Http\Repositories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Mail;
use Auth;
use DB;
use App\Models\{User,Gallery,Contact};
use Cloudder;

class AdminDashboardRepository
{

	public function all_models()
	{
		$all_models = User::where('role_id',3)->latest()->get();
		return $all_models;
	}

	public function count_all_models()
	{
		$count_models = User::where('role_id',3)->count();
		return $count_models;
	}

	public function delete_contact($id)
	{
		$delete_contact = Contact::where('id',$id)->delete();
		return $delete_contact;
	}

	public function today_models()
	{
		$count_all_today_models = User::where([
			'role_id' => 3,
			'created_at' => Carbon::today(),
		])->count();

		return $count_all_today_models;
	}

	public function all_admins()
	{
		$all_admin = User::where('role_id',1)->latest()->get();
		return $all_admin;
	}

	public function count_all_admin()
	{
		$count_admin = User::where('role_id',1)->count();
		return $count_admin;
	}

	public function pending_galleries()
	{
		$count_galleries = Gallery::where('status',0)->count();
		return $count_galleries;
	}

	public function contacts()
	{
		$contacts = Contact::latest()->get();
		return $contacts;
	}

	public function create_new_admin($request)
	{
		DB::beginTransaction();
		
		$new_admin = new User;
		$new_admin->first_name = $request->first_name;
		$new_admin->last_name = $request->last_name;
		$new_admin->slug = str_slug($request->first_name."-".$request->last_name);
		$new_admin->email = $request->email;
		$new_admin->role_id = 1;
		$new_admin->save();
		if ($new_admin) {
			DB::commit();
			return true;
		}else{
			DB::rollback();
			return false;
		}

	}

	public function confirm_user_image($request)
	{
		DB::beginTransaction();
		$files_id = $request->id;

		$entries = Gallery::whereIn('id',$files_id)
		->where('status',0)
		->get();
		dd($entries);

		foreach ($entries as $entry) {

			$entry->status = 1;
			$entry->save();

			if ($entry) {
				DB::commit();
				return true;
			}else{
				DB::rollback();
				return false;
			}
		}
		

	}
}

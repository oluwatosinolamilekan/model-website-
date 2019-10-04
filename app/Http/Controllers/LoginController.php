<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return back()
                ->withErrors($validator)
                ->withInput();
            }
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            	dd($request->all());
                // return redirect()->route('dashboard');
               
            }else{
            	dd('wrong password');
                return back();
            }
        }
        return view('views.login');
    }
}

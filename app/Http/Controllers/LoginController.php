<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
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
                return redirect()->route('auth.dashboard')->with('success','Welcome');
            }else{
                return back()->with('error','wrong password');
            }
        }
        return view('views.login');
    }
}

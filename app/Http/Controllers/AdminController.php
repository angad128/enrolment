<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

session_start();

class AdminController extends Controller
{   
    // view admin profile
    public function viewprofile(){
        return view('admin.profile');
    }


    // displays login form
	public function show_admin_login(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
    	return view('admin/admin_login');
    }

    // request admin login
    public function login_dashboard(Request $request)
    {
    	// echo "Hello";
    	$this->validate($request,[
            'email' => 'email|required',
            'password' => 'required',
        ]);

    	$result = DB::table('admin_tbl')
    				->where('admin_email',$request->email)
    				->where('admin_password',md5($request->password))
    				->first();
 
    	if ($result) {
    		Session::put('admin_name',$result->admin_name);
    		Session::put('admin_id',$result->admin_id);
    		return Redirect::to('/dashboard');
    	}
    	else {
    		Session::put('exception', 'Email or Password Invaid');
    		return Redirect::to('/backend');
    	}
    }

    // logout admin from dashboard
    public function signout(Request $request)
    {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return redirect('/backend');
    }

    // return admin dashboard
    public function admin_dashboard()
    {
        if (Session::get('admin_id') && Session::get('admin_name')) {
            return view('admin.dashboard');
        }
        else {
            Session::put('exception', 'To access Dashboard,Please Login First.');
            return Redirect::to('/backend');
        }
    	
    }

   


  
}




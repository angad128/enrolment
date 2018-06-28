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
        $id = Session::get('admin_id');
        $result = DB::table('admin_tbl')
                    ->where('admin_id',$id)
                    ->get();
        return view('admin.profile',['result'=>$result]);
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
        Session::put('student_name',null);
        Session::put('student_id',null);
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

    public function setting(){
        $id = Session::get('admin_id');
        $result = DB::table('admin_tbl')
                    ->where('admin_id',$id)
                    ->get();
        return view('admin.setting',['result'=>$result]);
    }

    public function updateAdmin(Request $request) {
        $data = array();
            $data['admin_name'] = $request->admin_name;
            $data['admin_phone'] = $request->admin_phone;
            $data['admin_email'] = $request->admin_email;
            $data['admin_password'] = md5($request->admin_password);


        $result = DB::table('admin_tbl')->where('admin_id', $request->admin_id)->update($data);
        if($result){
            Session::put('exception','Admin Details Updated Successfully.');
            return Redirect::to('/setting');  
        } else {
            Session::put('exception','Admin Details Failed to Updated.');
            return Redirect::to('/setting');  
        }
    }


  
}




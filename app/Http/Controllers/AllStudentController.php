<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class AllStudentController extends Controller
{
    public function allStudent(){
    	
        if (Session::get('admin_id') && Session::get('admin_name')) {
            $allstudent_info = DB::table('student_tbl')->get();
            return view('admin.allStudent',['allstudent_info'=>$allstudent_info]);
        }
        else {
            Session::put('exception', 'To access Dashboard,Please Login First.');
            return Redirect::to('/backend');
        }
    }



    public static function studentDetails() {
        $student_id = $_GET['id'];
        $result = DB::table('student_tbl')->where('student_id',$student_id)->get();
        // $result = json_encode($result);
        return response($result);
    }



    public function student_dashboard(Request $request){      
        $email = $request->student_email;
        $password = md5($request->student_password);
        $result = DB::table('student_tbl')
                    ->where('student_email',$email)
                    ->where('student_password',$password)
                    ->first();
        
        if ($result) {
            Session::put('student_name',$result->student_name);
            Session::put('student_id',$result->student_id);
            return view('student.dashboard');        }
        else {
            Session::put('exception', 'Email or Password Invaid');
            return Redirect::to('/');
        }
    }

    public function student_setting(){
        $student_id = Session::get('student_id');
        $result = DB::table('student_tbl')->where('student_id',$student_id)->get();
        return view('student.studentSetting',['result'=>$result]);
    }

    public function updateStudent(Request $request) {
        // print_r($request->student_id);
         $data = array();
            $data['student_phone'] = $request->student_phone;
            $data['student_email'] = $request->student_email;
            $data['student_password'] = md5($request->student_password);
        $image = $request->file('student_image');
        if ($image) {
            $ext = $image->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName = $randFileName.'.'.$ext;
            $imagePath = public_path('upload/');
            $success = $image->move( $imagePath ,$imageName);
            if ($success) {
                $data['student_image'] = $imageName;
            }
        }

        $result = DB::table('student_tbl')->where('student_id', $request->student_id)->update($data);
        if($result){
            Session::put('exception','Student Details Updated Successfully.');
            return Redirect::to('/studentSetting');  
        } else {
            Session::put('exception','Student Details Failed to Updated.');
            return Redirect::to('/studentSetting');  
        }
    }

    public function student_profile(){
        $student_id = Session::get('student_id');
        $result = DB::table('student_tbl')->where('student_id',$student_id)->get();
        return view('student.studentProfile',['result'=>$result]);
    }
}


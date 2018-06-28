<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;


session_start();
class AddStudentController extends Controller
{
    public function addStudent(){
        if (Session::get('admin_id') && Session::get('admin_name')) {
            return view('admin.addStudent');
        }
        else {
            Session::put('exception', 'To access Dashboard,Please Login First.');
            return Redirect::to('/backend');
        }
    	
    }

    public function saveStudent(Request $request){
        $this->validate($request,[
            'student_name' => 'required',
            'student_fathers_name' => 'required',
            'student_mothers_name' => 'required',
            'student_phone' => 'required',
            'student_department' => 'required',
            'admission_year' => 'required',
            'student_roll' => 'required|required|unique:student_tbl',
            'student_email' => 'email|required|unique:student_tbl',
            'student_password'  => 'required'

        ]);
        $data = array();
            $data['student_name'] = $request->student_name;
            $data['student_fathers_name'] = $request->student_fathers_name;
            $data['student_mothers_name'] = $request->student_mothers_name;
            $data['student_phone'] = $request->student_phone;
            $data['student_department'] = $request->student_department;
            $data['admission_year'] = $request->admission_year;
            $data['student_roll'] = $request->student_roll;
            $data['student_email'] = $request->student_email;
            $data['student_password'] = md5($request->student_password);
         // echo "Hello";
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
        $result = DB::table('student_tbl')->insert($data); 
        if($result){
            Session::put('exception','Student Added Successfully.');
            return Redirect::to('/addStudent');  
        }
        else {
            Session::put('exception','Student Failed to Add.');
            return Redirect::to('/addStudent');  
        }
          
    }

    public function deleteStudent($id){
        DB::table('student_tbl')->where('student_id',$id)->delete();
        Session::put('exception', 'Student is sucessfully deleted!');
        return Redirect::to('allStudent');
    }

    public function editStudent($id){
        $student_id = $id;
        $result = DB::table('student_tbl')->where('student_id',$student_id)->get();
        return view('admin.editStudent',['result'=>$result]);
    }

    public function updateStudent(Request $request) {
        // print_r($request->student_id);
         $data = array();
            $data['student_name'] = $request->student_name;
            $data['student_fathers_name'] = $request->student_fathers_name;
            $data['student_mothers_name'] = $request->student_mothers_name;
            $data['student_phone'] = $request->student_phone;
            $data['student_department'] = $request->student_department;
            $data['admission_year'] = $request->admission_year;
            $data['student_roll'] = $request->student_roll;
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
            return Redirect::to('/allStudent');  
        } else {
            Session::put('exception','Student Details Failed to Updated.');
            return Redirect::to('/allStudent');  
        }
    }
}



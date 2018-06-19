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
            // return view('layout')->with('allStudent',$manage_student);      

        }
        else {
            Session::put('exception', 'To access Dashboard,Please Login First.');
            return Redirect::to('/backend');
        }
    	
    }

    public function showAllStudent(){

    }


    public function deleteStudent($id){

        DB::table('student_tbl')->where('student_id',$id)->delete();
        Session::put('exception', 'Student is sucessfully deleted!');
        return Redirect::to('allStudent');
    }


    // public function studentDetails($id){
    //     // $result = DB::table('student_tbl')->where('student_id',$id)->find();
    //     return view('admin.studentview');
    // }
    public static function studentDetails() {
        $student_id = $_GET['id'];
        $result = DB::table('student_tbl')->where('student_id',$student_id)->find();
        return view('admin.studentview');

        foreach($result as $row)
        {
            $html += "<h3>"+ $row->student_id +"</h3>";
        }
        return $html;
    }

}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;

class TeacherController extends Controller
{
    public function allTeacher(){
    	if (Session::get('admin_id') && Session::get('admin_name')) {
            $allTeachers_info = DB::table('teachers_tbl')->get();
            return view('admin.teachers.allTeachers',['allTeachers_info'=>$allTeachers_info]);
        }
        else {
            Session::put('exception', 'To access Dashboard,Please Login First.');
            return Redirect::to('/backend');
        }
    }


    public function addTeacher(){
    	return view('admin.teachers.addTeachers');
    }

    public function saveTeacher(Request $request) {
    	$this->validate($request,[
            'teachers_name' => 'required',
            'teachers_phone' => 'required',
            'teachers_department' => 'required',
            'teachers_address' => 'required',

        ]);
        $data = array();
            $data['teachers_name'] = $request->teachers_name;
            $data['teachers_phone'] = $request->teachers_phone;
            $data['teachers_address'] = $request->teachers_address;
            $data['teachers_department'] = $request->teachers_department;
        $image = $request->file('teachers_image');
        if ($image) {
            $ext = $image->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName = $randFileName.'.'.$ext;
            $imagePath = public_path('upload/');
            $success = $image->move( $imagePath ,$imageName);
            if ($success) {
                $data['teachers_image'] = $imageName;
            }
        }
        $result = DB::table('teachers_tbl')->insert($data); 
        if($result){
            Session::put('exception','Teachers Added Successfully.');
            return Redirect::to('/addTeacher');  
        }
        else {
            Session::put('exception','Teachers Failed to Add.');
            return Redirect::to('/addTeacher');  
        }
    }


    public function deleteTeacher($id){
        DB::table('teachers_tbl')->where('teachers_id',$id)->delete();
        Session::put('exception', 'Teachers is sucessfully deleted!');
        return Redirect::to('allTeacher');
    }


     public function editTeacher($id){
        $teachers_id = $id;
        $result = DB::table('teachers_tbl')->where('teachers_id',$teachers_id)->get();
        return view('admin.teachers.editTeachers',['result'=>$result]);
    }

    public function updateTeacher(Request $request) {
        // print_r($request->teachers_id);
         $data = array();
            $data['teachers_name'] = $request->teachers_name;
            $data['teachers_phone'] = $request->teachers_phone;
            $data['teachers_department'] = $request->teachers_department;
            $data['teachers_address'] = $request->teachers_address;
        $image = $request->file('teachers_image');
        if ($image) {
            $ext = $image->getClientOriginalExtension();
            $randFileName = rand(100,100000);
            $imageName = $randFileName.'.'.$ext;
            $imagePath = public_path('upload/');
            $success = $image->move( $imagePath ,$imageName);
            if ($success) {
                $data['teachers_image'] = $imageName;
            }
        }

        $result = DB::table('teachers_tbl')->where('teachers_id', $request->teachers_id)->update($data);
        if($result){
            Session::put('exception','Teachers Details Updated Successfully.');
            return Redirect::to('/allTeacher');  
        } else {
            Session::put('exception','Teachers Details Failed to Updated.');
            return Redirect::to('/allTeacher');  
        }
    }
}

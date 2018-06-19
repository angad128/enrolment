<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCourseInfo($slug)
    {	       
    	$course_name = $slug;
    	print($course_name);
    	// return view('admin.courses.$course_name');
        
    }
}

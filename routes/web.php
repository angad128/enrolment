<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', 'AdminController@show_admin_login');


// admin route
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/dashboard','AdminController@admin_dashboard');
Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/logout','AdminController@signout');

// setting 
Route::get('/setting','AdminController@setting');
Route::post('/updateAdmin','AdminController@updateAdmin');


// addStudent route
Route::get('/addStudent','AddStudentController@addStudent');
Route::post('/newstudent','AddStudentController@saveStudent');
Route::get('/editStudent/{id}','AddStudentController@editStudent');
Route::post('/update','AddStudentController@updateStudent');
Route::get('/deleteStudent/{id}','AddStudentController@deleteStudent');


// allStudent route
Route::get('/allStudent','AllStudentController@allStudent');
Route::get('/studentView','AllStudentController@studentDetails');

Route::post('/studentDashboard','AllStudentController@student_dashboard');
Route::get('/studentSetting','AllStudentController@student_setting');
Route::get('/studentProfile','AllStudentController@student_profile');
Route::post('/updateStudent','AllStudentController@updateStudent');

// coures info
Route::get('/course/{course_name}','CourseController@getCourseInfo');

// teacher route
Route::get('/allTeacher','TeacherController@allTeacher');
Route::get('/addTeacher','TeacherController@addTeacher');
Route::post('/newTeacher','TeacherController@saveTeacher');
Route::get('/deleteTeacher/{id}','TeacherController@deleteTeacher');

Route::get('/editTeacher/{id}','TeacherController@editTeacher');
Route::post('/updateTeacher','TeacherController@updateTeacher');

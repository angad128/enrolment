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
Route::get('/setting','SettingController@setting');

// addStudent route
Route::get('/addStudent','AddStudentController@addStudent');
Route::post('/newstudent','AddStudentController@saveStudent');

// allStudent route
Route::get('/allStudent','AllStudentController@allStudent');
Route::get('/studentView','AllStudentController@studentDetails');

Route::post('/deleteStudent/{id}','AllStudentController@deleteStudent');

// coures info
Route::get('/course/{course_name}','CourseController@getCourseInfo');



@extends('layout')

@section('content')

            <div class="row dashboard">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Student</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Student Info
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    @foreach($result as $key)
                                    <form role="form" method="POST" action="/update" enctype="multipart/form-data">
                                        <input type="hidden" name="student_id" value="{{$key->student_id}}">
                                        
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Name</label>
                                                    <input name="student_name" type="text" class="form-control" placeholder="{{$key->student_name}}" value="{{$key->student_name}}">
                                                    <p class="help-block">Student name here.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Insert Image(Browse)</label>
                                                    <input name="student_image" type="file" placeholder="{{$key->student_image}}" value="{{$key->student_image}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Fathers Name</label>
                                                    <input name="student_fathers_name" type="text" class="form-control" placeholder="{{$key->student_fathers_name}}" value="{{$key->student_fathers_name}}">
                                                    <p class="help-block">Student Fathers Name here.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Mothers Name</label>
                                                    <input name="student_mothers_name" type="text" class="form-control" placeholder="{{$key->student_mothers_name}}" value="{{$key->student_mothers_name}}">
                                                    <p class="help-block">Student Mothers Name here.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Phone</label>
                                                    <input name="student_phone" type="text" class="form-control" placeholder="{{$key->student_phone}}" value="{{$key->student_phone}}">
                                                    <p class="help-block">Student Contact Number.</p>
                                                 </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Courses</label>
                                                    <select placeholder="{{$key->student_department}}" value="{{$key->student_department}}" name="student_department" class="form-control">
                                                        <option value="CSE">CSE</option>
                                                        <option value="ECE">ECE</option>
                                                        <option value="BBA">BBA</option>
                                                        <option value="EEE">EEE</option>
                                                        <option value="MBA">MBA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Admision Year</label>
                                                    <input placeholder="{{$key->admission_year}}" value="{{$key->admission_year}}" name="admission_year" type="date" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Roll Number</label>
                                                    <input placeholder="{{$key->student_roll}}" value="{{$key->student_roll}}" name="student_roll" type="text" class="form-control">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Email</label>
                                                    <input name="student_email" type="email" class="form-control" placeholder="{{$key->student_email}}" value="{{$key->student_email}}">
                                                    <p class="help-block">Student Email here.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Student Password</label>
                                                        <input  value="{{md5($key->student_password)}}" type="password" name="student_password" class="form-control">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                                    
                                        <button type="submit" class="btn btn-success">UPDATE</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>     
                                        {{ csrf_field() }}                                  
                                    </form>
                                    @endforeach
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
     
@endsection


@extends('layout')

@section('content')

            <div class="row dashboard">
                <div class="col-lg-12">
                    <h1 class="page-header"> Add Students</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Insert Student Info
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <?php $exception = Session::get('exception');?>
                                  @if($exception)
                                  <div class="alert alert-success">
                                      <p>{{$exception}}</p>
                                      <?php Session::put('exception',null);?>
                                  </div>
                                  @endif
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="/newstudent" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Name</label>
                                                    <input name="student_name" type="text" class="form-control">
                                                    <p class="help-block">Student name here.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Insert Image(Browse)</label>
                                                    <input name="student_image" type="file">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Fathers Name</label>
                                                    <input name="student_fathers_name" type="text" class="form-control">
                                                    <p class="help-block">Student Fathers Name here.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Mothers Name</label>
                                                    <input name="student_mothers_name" type="text" class="form-control">
                                                    <p class="help-block">Student Mothers Name here.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Phone</label>
                                                    <input name="student_phone" type="text" class="form-control">
                                                    <p class="help-block">Student Contact Number.</p>
                                                 </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Courses</label>
                                                    <select name="student_department" class="form-control">
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
                                                    <input name="admission_year" type="date" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Roll Number</label>
                                                    <input name="student_roll" type="text" class="form-control">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Student Email</label>
                                                    <input name="student_email" type="email" class="form-control">
                                                    <p class="help-block">Student Email here.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Student Password</label>
                                                        <input type="password" name="student_password" class="form-control">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                                    
                                        <button type="submit" class="btn btn-success">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>                                        
                                    </form>
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

<!-- student_name 
student_fathers_name 
student_mothers_name 
student_roll 
admission_year
student_department
student_image
student_email
student_phone
student_info_tbl_student_rollIndex
student_password
 -->

<!--  student_name 
 student_image
 student_fathers_name
 student_mothers_name
 student_phone
 student_department
 admission_year
 student_roll
 student_email
 student_password
 -->
    
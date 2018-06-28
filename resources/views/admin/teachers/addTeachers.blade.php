@extends('layout')

@section('content')

            <div class="row dashboard">
                <div class="col-lg-12">
                    <h1 class="page-header"> Add Teachers</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Insert Teachers Info
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
                                    <form role="form" method="post" action="/newTeacher" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input name="teachers_name" type="text" class="form-control">
                                                    <p class="help-block"> Teachers name here.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Insert Image(Browse)</label>
                                                    <input name="teachers_image" type="file">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input name="teachers_phone" type="text" class="form-control">
                                                    <p class="help-block">Teachers Contact Number.</p>
                                                 </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <select name="teachers_department" class="form-control">
                                                        <option value="CSE">CSE</option>
                                                        <option value="ECE">ECE</option>
                                                        <option value="BBA">BBA</option>
                                                        <option value="EEE">EEE</option>
                                                        <option value="MBA">MBA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <label>Address</label>
                                                <input name="teachers_address" type="text" class="form-control">
                                               <p class="help-block">Teachers Address here.</p>
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


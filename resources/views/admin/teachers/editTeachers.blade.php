@extends('layout')

@section('content')

            <div class="row dashboard">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Teachers Info</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Teachers Info
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                @foreach($result as $key)
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="/updateTeacher" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="teachers_id" value="{{$key->teachers_id}}">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input name="teachers_name" type="text" class="form-control" placeholder="{{$key->teachers_name}}" value="{{$key->teachers_name}}">
                                                    <p class="help-block"> Teachers name here.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Insert Image(Browse)</label>
                                                    <input name="teachers_image" type="file" placeholder="{{$key->teachers_image}}" value="{{$key->teachers_image}}">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input name="teachers_phone" type="text" class="form-control" placeholder="{{$key->teachers_phone}}" value="{{$key->teachers_phone}}">
                                                    <p class="help-block">Teachers Contact Number.</p>
                                                 </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <select name="teachers_department" class="form-control" placeholder="{{$key->teachers_department}}" value="{{$key->teachers_department}}">
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
                                                <input name="teachers_address" type="text" class="form-control" placeholder="{{$key->teachers_address}}" value="{{$key->teachers_address}}">
                                               <p class="help-block">Teachers Address here.</p>
                                        </div>
                                                    
                                        <button type="submit" class="btn btn-success">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                @endforeach
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


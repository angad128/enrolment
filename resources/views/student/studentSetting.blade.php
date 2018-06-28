@extends('studentLayout')

@section('content')
	            <div class="row dashboard">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Student</h1>
                </div>
                <?php $exception = Session::get('exception');?>
	            @if($exception)
	             <div class="alert alert-success">
	               <p>{{$exception}}</p>
	               <?php Session::put('exception',null);?>
	             </div>
	             @endif
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
                                    <form role="form" method="POST" action="/updateStudent" enctype="multipart/form-data">
                                        <input type="hidden" name="student_id" value="{{$key->student_id}}">
                                        
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
                                                    <label>Insert Image(Browse)</label>
                                                    <input name="student_image" type="file" placeholder="{{$key->student_image}}" value="{{$key->student_image}}">
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

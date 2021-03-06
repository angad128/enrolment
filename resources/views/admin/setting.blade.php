@extends('layout')

@section('content')
	            <div class="row dashboard">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Admin</h1>
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
                            Edit Admin Info
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    @foreach($result as $key)
                                    <form role="form" method="POST" action="/updateAdmin" enctype="multipart/form-data">
                                        <input type="hidden" name="admin_id" value="{{$key->admin_id}}">
                                        
                                        <div class="row">                                          
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Admin Name</label>
                                                    <input name="admin_name" type="text" class="form-control" placeholder="{{$key->admin_name}}" value="{{$key->admin_name}}">
                                                    <p class="help-block">Admin Name Here.</p>
                                                 </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>admin Phone</label>
                                                    <input name="admin_phone" type="text" class="form-control" placeholder="{{$key->admin_phone}}" value="{{$key->admin_phone}}">
                                                    <p class="help-block">admin Contact Number.</p>
                                                 </div>
                                            </div>
                                        </div>                                        
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>admin Email</label>
                                                    <input name="admin_email" type="email" class="form-control" placeholder="{{$key->admin_email}}" value="{{$key->admin_email}}">
                                                    <p class="help-block">Admin Email here.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>admin Password</label>
                                                        <input  value="{{md5($key->admin_password)}}" type="password" name="admin_password" class="form-control">
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
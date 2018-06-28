@extends('layout')

@section('content')
	
            <div class="row dashboard">
                <div class="col-lg-12">
                    <h1 class="page-header">All Teachers</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php $exception = Session::get('exception');?>
            @if($exception)
                <div class="alert alert-success">
                        <p>{{$exception}}</p>
                    <?php Session::put('exception',null);?>
                </div>
            @endif
            <!-- /.row -->
            @if(count($allTeachers_info) >0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Teachers Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Department</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                              
                                
                                <tbody><?php $i=1; foreach($allTeachers_info as $key){ ?>

                                    <tr <?php if($i%2==0){ ?> class="gradeA odd" <?php }else{ ?> class="gradeA even" <?php } ?>>
                                        <td class="  sorting_1">{{$key->teachers_name}}</td>
                                        <td><img class="lazy img img-responsive" src="upload/{{$key->teachers_image}}" style="height:52px ; width: 70px;"> </td>
                                        <td>{{$key->teachers_department}}</td>
                                        <td>{{$key->teachers_phone}}</td>
                                        <td>{{$key->teachers_address}}</td>
                                        <td class="row">
                                            <a href="{{URL::to('/editTeacher/'.$key->teachers_id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit fa-fw" data-toggle="tooltip" title="Edit"></i></a>
                                            <a href="{{URL::to('/deleteTeacher/'.$key->teachers_id)}}" class="btn btn-danger btn-sm" id="delete" ><i class="fa fa-trash-o fa-fw" title="Delete"></i></a>
                                        </td>
                                       </tr>
                                      </tbody>
                                 <?php $i++;} ?>
                            </table>
                          
                        </div>
                        <!-- /.panel-body
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            @else
                <h1>No Record of any teachers found. Please add some new teacherss.</h1>
            @endif
            
            <!-- /.row -->
      
              
            </div>

               
@endsection

@section('scripts')
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.js"></script>
<script>
      $(document).on("click","#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Do you want to delete Teachers record?", function(confirmed){
          if (confirmed) {
            window.location.href = link;
          }
        });
      });

</script>

@endsection






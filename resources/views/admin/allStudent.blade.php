@extends('layout')

@section('content')
	
            <div class="row dashboard">
                <div class="col-lg-12">
                    <h1 class="page-header">All Students</h1>
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
            @if(count($allstudent_info) >0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Studnet Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Roll</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Department</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                              
                                
                                <tbody><?php $i=1; foreach($allstudent_info as $key){ ?>

                                    <tr <?php if($i%2==0){ ?> class="gradeA odd" <?php }else{ ?> class="gradeA even" <?php } ?>>
                                        <td class="  sorting_1">{{$key->student_roll}}</td>
                                        <td class=" ">{{$key->student_name}} <br></td>
                                        <td><img class="lazy" src="upload/{{$key->student_image}}" style="height:52px ; width: 70px;"> </td>
                                        <td>{{$key->student_department}}</td>
                                        <td>{{$key->student_email}}</td>
                                        <td>{{$key->student_phone}}</td> 
                                        <td class="row">
                                            <button type="button" class="btn btn-primary btn-sm" id="viewBtn" value="{{$key->student_id}}"><i class="fa fa-eye fa-fw" data-toggle="tooltip" title="View"></i></button>
                                            <a href="{{URL::to('/studentEdit/'.$key->student_id)}}" class="btn btn-success"><i class="fa fa-edit  fa-fw" data-toggle="tooltip" title="Edit"></i></a>
                                            <a href="{{URL::to('/deleteStudent/'.$key->student_id)}}" class="btn btn-danger" id="delete" ><i class="fa fa-trash-o fa-fw" title="Delete"></i></a>
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
                <h1>No Record of any student found. Please add some new students.</h1>
            @endif
            <!-- /.row -->


<!-- Modal -->
<div class="modal fade" id="studentDetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Student Details</h4>
            </div>

            <div class="modal-body">

            </div>


        </div>
    </div>
</div>
       
@endsection

@section('scripts')
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.js"></script>
<script>
      $(document).on("click","#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Do you want to delete Student record?", function(confirmed){
          if (confirmed) {
            window.location.href = link;
          }
        });
      });
</script>


<script>
    var id=$('#viewBtn').val();
    $(function(){
       $('#viewBtn').click(function() {
            $.ajax({
                url: 'studentView',
                type: 'GET',
                data: { id: id },
                success: function(response)
                {
                    $('#studentDetails').html(response);
                }
            });
       });
    });    
</script>


@endsection






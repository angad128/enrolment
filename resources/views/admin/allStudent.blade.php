@extends('layout')

@section('content')
	          <div class="row dashboard">
                <div class="col-lg-12">
                    <h1 class="page-header">All Students</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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
                            Hover Rows
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
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
                                          <td><img class="lazy img img-responsive" src="upload/{{$key->student_image}}" style="height:52px ; width: 70px;"> </td>
                                          <td>{{$key->student_department}}</td>
                                          <td>{{$key->student_email}}</td>
                                          <td>{{$key->student_phone}}</td> 
                                          <td class="row">
                                              <button type="button" class="btn btn-primary btn-sm" id="viewBtn" value="{{$key->student_id}}" role="dialog"><i class="fa fa-eye fa-fw" data-toggle="tooltip" title="View"></i></button>
                                              <a href="{{URL::to('/editStudent/'.$key->student_id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit fa-fw" data-toggle="tooltip" title="Edit"></i></a>
                                              <a href="{{URL::to('/deleteStudent/'.$key->student_id)}}" class="btn btn-danger btn-sm" id="delete" ><i class="fa fa-trash-o fa-fw" title="Delete"></i></a>
                                          </td>
                                         </tr>
                                    </tbody>
                                 <?php $i++;} ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            @else
                <h1>No Record of any student found. Please add some new students.</h1>
            @endif
        </div>

        <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close"  data-dismiss="modal">&times;</button>
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                          <h4 class="modal-title" id="name"></h4>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                          <h4 class="modal-title">Roll:<span id="roll"></span></h4>
                        </div>
                      </div>
                    </div>
                    <div class="modal-body" style="width: 100%;height: 100%;">
                        <!-- Card -->
                        <div class="card">
                          <!-- Card image -->
                          <div class="view overlay">
                            <div id="image"></div>
                          </div>
                          <!-- Card content -->
                          <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title"></h4>
                            <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-4">
                                <h4 class="card-title">Course: <span id="course"></span></h4>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                                <h4 class="card-title">Phone :<span id="phone"></span></h4>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-4">
                                <h4 class="card-title">Father: <span id="fathers_name"></span></span></h4>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4">
                                <h4 class="card-title">Mother: <span id="mothers_name"></span></h4>
                              </div>
                            </div> 
                          </div>

                        </div>
                        <!-- Card -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
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

  $(function(){
    $('#viewBtn').click(function() {
      $("#myModal").modal();
      $.ajax({
        url: 'studentView',
        type: 'GET', 
        data: { id: $('#viewBtn').val() },
        success: function(response)
        {
          // console.log(response);
          // alert(response[0].student_name);
          document.getElementById("name").innerHTML = response[0].student_name;
          document.getElementById("roll").innerHTML = response[0].student_roll;
          document.getElementById("course").innerHTML = response[0].student_department;
          document.getElementById("phone").innerHTML = response[0].student_phone;
          document.getElementById("fathers_name").innerHTML = response[0].student_fathers_name;
          document.getElementById("mothers_name").innerHTML = response[0].student_mothers_name;
          document.getElementById("image").innerHTML = "<img class='card-img-top' alt='Card image cap' src='/upload/" + response[0].student_image +"' >";
        }
      });
    });
  });    


</script>

@endsection


<!-- 
 $(document).ready(function(){

 $('#viewBtn').click(function(){
    $("#myModal").modal();  
    $.ajax({
      url:"studentView",
      method:"GET",
      data:{id:$('#viewBtn').val()},
      dataType:"JSON",
      success:function(response)
      {
        $(".close").click(function(){
          var $this = $(this);
          if($this.data('clicked')) {
                response.flush();
          }
          else {
            $this.data('clicked', true);
            console.log(response);
            // document.getElementById("name").innerHTML = response[0].student_name;
            // document.getElementById("roll").innerHTML = response[0].student_roll;
            // document.getElementById("course").innerHTML = response[0].student_department;
            // document.getElementById("phone").innerHTML = response[0].student_phone;
            // document.getElementById("fathers_name").innerHTML = response[0].student_fathers_name;
            // document.getElementById("mothers_name").innerHTML = response[0].student_mothers_name;
            // document.getElementById("image").innerHTML = "<img class='card-img-top' alt='Card image cap' src='/upload/" + response[0].student_image +"' >"; 
            }
        });
      }
    });
 });
}); -->



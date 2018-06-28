@extends('layout')

@section('content')
 <!-- /.row -->
            <div class="row dashboard">
                <div class="col-md-3 col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <div class="row">
                            <div class="col-md-6 col-g-6 pull-left">All Student :</div>
                            <div class="col-md-3 col-lg-3 pull-left"><?php 
                              $student = DB::table('student_tbl')->count('student_id');
                              echo $student;
                            ?></div>
                          </div>
                             
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"> 
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                           <div class="row">
                            <div class="col-md-6 col-g-6 pull-left">All Teacher :</div>
                            <div class="col-md-3 col-lg-3 pull-left"><?php 
                              $teacher = DB::table('teachers_tbl')->count('teachers_id');
                              echo $teacher;
                            ?></div>
                          </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart2"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <div class="row">
                            <div class="col-md-6 col-g-6 pull-left">Tution Fee :</div>
                            <div class="col-md-3 col-lg-3 pull-left">13</div>
                          </div>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart3"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                           <div class="row">
                            <div class="col-md-6 col-g-6 pull-left"> Revenue :</div>
                            <div class="col-md-3 col-lg-3 pull-left">13</div>
                          </div>


                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart4"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div> 
            </div>
            <!-- /.row -->

      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i>Computer Science
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i>BBA
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> ECE
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> EEE
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </div>
                                <div class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> MBA
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </div>
                        
                            </div>
                        </div>
                        <!-- /.panel-body -->
            </div>
        </div>
      </div>

           
@endsection

@section('scripts')
<script src="{{URL::to('assets/vendor/morrisjs/morris.min.js')}}"></script>
<script src="{{URL::to('assets/data/morris-data.js')}}"></script>
@endsection

<!-- 


 <div class="row">
                <div class="col-md-4 grid-margin d-flex align-tems-stretch">
                  <div class="row">
                      <div class="col-lg-12 rid-margin d-flex align-tems-stretch"">
                          <div class="row">
                              <div class="col-lg-12 col-sm-6 col-md-12 mb-3">
                                  <div class="social-panel bg-facebook"><p class="mb-0">Computer Science</p></div>
                              </div>
                               <div class="col-lg-12 col-sm-6 col-md-12 mb-3">
                                  <div class="social-panel bg-twitter"><p class="mb-0">BBA</p></div>
                              </div>
                               <div class="col-lg-12 col-sm-6 col-md-12 mb-3">
                                  <div class="social-panel bg-google"><p class="mb-0">EEE</p></div>
                              </div>
                               <div class="col-lg-12 col-sm-6 col-md-12 mb-3">
                                  <div class="social-panel bg-linkedin"><p class="mb-0">ECE</p></div>
                              </div>
                               <div class="col-lg-12 col-sm-6 col-md-12">
                                  <div class="social-panel bg-facebook"><p class="mb-0">MBA</p></div>
                              </div>
                          </div>
                      </div>
                  </div>  
                </div>
            </div> -->
@extends('studentLayout')
@section('styles')
<style>
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

</style>
@endsection
@section('content')
	 <div class="row dashboard">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 toppad" >
   		@foreach($result as $key)
        <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{$key->student_name}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="upload/{{$key->student_image}}" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td>{{$key->student_department}}</td>
                      </tr>
                      <tr>
                        <td>Admision date:</td>
                        <td>{{$key->admission_year}}</td>
                      </tr>
                      <tr>
                        <td>Fathers Name: </td>
                        <td>{{$key->student_fathers_name}}</td>
                      </tr>
                   
                      <tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Kathmandu,Nepal</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="#">{{$key->student_email}}</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>{{$key->student_phone}}</td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>            
        </div>
        @endforeach
        </div>
      </div>
@endsection




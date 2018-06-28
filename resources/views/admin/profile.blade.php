@extends('layout')
@section('styles')
<style>

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
  <div class="col-md-12 col-lg-12 toppad ">
    @foreach($result as $key)
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">{{$key->admin_name}}</h3>
            </div>

                        <!-- /.panel-heading -->
            <div class="panel-body">
              <div class=" col-md-9 col-lg-9 "> 
                <table class="table table-user-information">
                  <tbody>
                    <tr>
                      <td>ID: </td>
                      <td style="font-weight: 900;font-size: 1.5em;">{{$key->admin_id}}</td>
                    </tr>
                    <tr>
                      <td>Email :</td>
                      <td>{{$key->admin_email}}</td>
                    </tr>
                    <tr>
                      <td>Phone Number</td>
                      <td>{{$key->admin_phone}}</td>                  
                    </tr>                 
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.panel-body -->
          </div>
          @endforeach
  </div>
</div>
@endsection
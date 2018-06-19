
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Admin Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="{{url('/adminlogin')}}">
      <h1 class="h3 mb-3 font-weight-normal">Admin Signin</h1>
      <?php $exception = Session::get('exception');?>
      @if($exception)
      <div class="alert alert-danger">
          <p>{{$exception}}</p>
          <?php Session::put('exception',null);?>
      </div>
      @endif

      {{ csrf_field() }}
      <label for="inputEmail" class="" style="float: left;font-weight: 600;">Email</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="" style="float: left;font-weight: 600;">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <div class="row">
        <div class="col-sm-6">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <div class="col-sm-6">
          <a href="#">Forgot Password</a>
        </div>
      </div>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>

  </body>
</html>



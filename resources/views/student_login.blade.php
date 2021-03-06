
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Student Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="/studentDashboard">
      <h1 class="h3 mb-3 font-weight-normal">Student Signin</h1>
      <?php $exception = Session::get('exception');?>
      @if($exception)
      <div class="alert alert-danger">
          <p>{{$exception}}</p>
          <?php Session::put('exception',null);?>
      </div>
      @endif
      {{ csrf_field() }}
      <label for="inputEmail" na class="" style="float: left;font-weight: 600;">Email</label>
      <input type="email" name="student_email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="" style="float: left;font-weight: 600;">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="student_password" placeholder="Password" required>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
          <a href="#">Forgot Password</a>
        </div>
      </div>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
  </body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>POS - Login</title>
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
    {{-- <link href="{{asset('assets')}}/css" rel="stylesheet" type="text/css"> --}}
    <link href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/css/styles.css" rel="stylesheet">
  </head>
  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header bg-primary text-white">Login to your account</div>
        <div class="card-body">
          <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="useremail" class="form-control" placeholder="user email" name="email" :value="old('email')">
                <label for="useremail">Enter useremail</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name ='password'>
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-info btn-block">Login</button>
          </form>
          <div class="text-center">
           <small class="text-danger"> Create an new Account please <a href="{{url('register')}}">Registration</a></small>
            <br>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('assets')}}/js/jquery.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.easing.min.js"></script>
  </body>
</html>

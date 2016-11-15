<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BPM | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="dist/font-awesome-4.6.3/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/adminLTE/css/AdminLTE.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>BPM</b> Login</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
      <p class="login-box-msg">Silahkan Masuk</p>
        {!! Session::get('pesan') !!}
        <form method="post" action="getlogin" id="form" data-parsley-validate="">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input type="test" class="form-control" id="inputEmail3" placeholder="username" name="username" required="">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required="">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block btn-flat" value="Masuk" type="submit">
            </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="dist/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>
    <script src="dist/plugins/parsley/js/parsley-2.1.2.min.js"></script>
    <script src="dist/plugins/parsley/js/id.js"></script>
    <script>
      $(function () {
          $('#form').parsley().on('field:validated', function() {
              var ok = $('.parsley-error').length === 0;
          })
          .on('form:submit', function() {
            return true; // Don't submit form for this demo
          });
      });
    </script>
  </body>
</html>
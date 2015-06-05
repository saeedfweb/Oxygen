<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Oxygen Administration panel | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <?php 
		echo Asset::css('bootstrap.min.css');
		echo Asset::css('font-awesome.min.css');
		echo Asset::css('oxygen/AdminLTE.min.css');
		Asset::add_path('assets/plugins/iCheck/square/','css');
		Asset::add_path('assets/plugins/iCheck/','js');
		echo Asset::css('blue.css');
	?>
    <!--[if lt IE 9]>
        <?php
			echo Asset::js('html5shiv.min.js');
			echo Asset::js('respond.min.js');			
		?>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>O</b>xygen</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="../../index2.html" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <a href="#">I forgot my password</a><br>
		
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <?php
		echo Asset::js('jquery-2.1.4.min.js');
		echo Asset::js('bootstrap.min.js');
		echo Asset::js('icheck.min.js');
	?>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
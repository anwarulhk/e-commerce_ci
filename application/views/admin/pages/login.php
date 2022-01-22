<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Admin </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>/assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>/assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>/assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url() ?>/assets/admin/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>/assets/admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form  action="<?php echo base_url()?>index.php/adminlogin/admin_login_check" method="post">
              <h1>Login Form</h1>
              <style type="text/css">
                    #result{color:red}
                    #result p{color:red}
                </style>
              <div id="result">
                          <p><?php echo $this->session->flashdata('message');?></p>
                      </div>
              <div>
                <input type="text" value="<?php set_value('user_name');?>" name="user_email" id="user_email" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
                <button type="submit" class="btn btn-default">Sign In</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

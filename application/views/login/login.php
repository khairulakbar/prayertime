<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body  class="bg-gradient-primary">
<!--class="bg-gradient-primary"-->
  
  <div class="container mt-5" style="padding-top:100px;">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image">
                <img src="<?php echo base_url(); ?>assets/images/kopi_login.jpg">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <span class="h5 text-gray-900 mb-4">
                      
                    Aplikasi Remote PrayerTime


                    </span>

                    <br>
                    by Degilimedia
					       
                  </div>
                  <form class="user" action="<?php echo base_url(); ?>login/proseslog" id="form-login" method="post">
                    <div class="form-group">
                      <!--<input type="email" class="form-control form-control-user" name="nama_user" id="nama_user" aria-describedby="emailHelp" placeholder="Enter User Name" required/>-->
					            <!--<input type="text" class="form-control form-control-user" name="nama_user" id="nama_user"  placeholder="Enter User Name" required/>-->
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="pass_user" id="pass_user" placeholder="Masukan Passcode...">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <!--<label class="custom-control-label" for="customCheck">Remember Me</label>-->
                        <p class="login-box-msg" class="uppercase"><?php echo $info; ?></p>
                      </div>
                    </div>
                    
				        	<input type="submit" name="login" value="Login" id="submit-login" class="btn btn-primary btn-user btn-block" />
                    <!--<hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>-->
                  </form>
                  <!--<hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>-->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>

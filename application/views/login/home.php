
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php if (!empty($title)) echo $title;?></title>

	<!-- Bootstrap -->
	<link href="<?= base_url() ?>assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url() ?>assets/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?= base_url() ?>assets/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- Animate.css -->
	<link href="<?= base_url() ?>assets/gentelella/vendors/animate.css/animate.min.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?= base_url() ?>assets/gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login" style="background-image: url('<?= base_url() ?>assets/master/login.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content" style="padding: 10px 10px 20px 10px;
                                                border: 1px solid #BFBFBF;
                                                background-color: white;
                                                box-shadow: 10px 10px 5px #aaaaaa;">
            <form action="<?= base_url() ?>login/process" method="POST"> 
              <?php echo $this->session->flashdata('error'); ?>
              <h1>Login</h1> 
              <div>
                <input value="" name="username" type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input value="" name="password" type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-primary submit" style="width: 100%;">Login</button>
                <!-- <a href="#signup" class="#signup" href="#">Lost your password?</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-desktop"></i> PKBM LENTERA</h1>
                  <p>PKBM Lentera © <?= DATE("Y") ?> Copyright</p>
                </div>
              </div>
            </form>
          </section>
        </div>
 
      </div>
    </div>
  </body>
</html>

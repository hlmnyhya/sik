<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPRODES</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Fontastic Custom icon font-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fontastic.css') ?>">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="<?php echo base_url('assets/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700') ?>">
  <!-- jQuery Circle-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/grasp_mobile_progress_circle-1.0.0.min.css') ?>">
  <!-- Custom Scrollbar-->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.default.css') ?>"> id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">
  <!-- Favicon-->
  <link rel="shortcut icon" href="<?php echo base_url('assets/dinas.png') ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
  <div class="page login-page">
    <div class="container">
      <div class="form-outer text-center d-flex align-items-center">
        <div class="form-inner">
          <div class="logo text-uppercase">
            <img src="<?php echo base_url('assets/logotl.svg'); ?>" width="15%"><br><br>
            <h2><span>SISTEM INFORMASI KEPENDUDUKAN</span></h2>
            <h2><strong class="text-success">DESA BATU AMPAR</strong></h2>
          </div>
          <p></p>
          <?php echo form_open('login/if', 'class="text-left form-validate"'); ?>
          <div class="form-group-material">
            <input id="login-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
            <label for="login-username" class="label-material">Username</label>
          </div>
          <div class="form-group-material">
            <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
            <label for="login-password" class="label-material">Password</label>
          </div>
          <div class="form-group text-center"><button class="btn btn-success">Login</button>
            <!-- This should be submit button but I replaced it with <a> for demo purposes-->
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/popper.js/umd/popper.min.js') ?>"> </script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/grasp_mobile_progress_circle-1.0.0.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery.cookie/jquery.cookie.js') ?>"> </script>
  <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery-validation/jquery.validate.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
  <!-- Main File-->
  <script src="<?php echo base_url('assets/js/front.js') ?>"></script>
</body>

</html>
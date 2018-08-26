<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistem Informasi Inventory</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('asset/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('asset/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('asset/css/sb-admin.css') ?>" rel="stylesheet">
</head>
<body style="background-image:url('asset/logo/3d.jpg')"><br><br><br><br>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <img src="<?php echo base_url('asset/logo/siklus.JPG'); ?>">
      <div class="card-header"><h2 align="center">Sistem Informasi Login</h2></div>
      <div class="card-body">
        <form method="POST" action="<?php echo base_url('login/submit'); ?>">
          <?php if ($this->session->flashdata('message')): ?>
            <p class="<?php echo $this->session->flashdata('alert'); ?>"><?php echo $this->session->flashdata('message'); ?></p>
          <?php endif ?>
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" name="username" id="username" type="text" placeholder="Username" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
          </div>
         
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
       
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('asset/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('asset/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
</body>

</html>

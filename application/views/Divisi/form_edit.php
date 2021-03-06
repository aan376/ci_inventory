<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistem Informasi Inventory</I></title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('asset/vendor/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('asset/vendor/') ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('asset/')?>css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php $this->load->view('Layout/header'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('divisi'); ?>">Divisi</a>
        </li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
      <!-- Area Chart Example-->

      <!-- Content -->
      <div>
      <form method="POST" action="<?php echo base_url('divisi/update'); ?>">
      <input type="hidden" name="id" value="<?php echo $divisi->id ?>">
      <div class="form-group">
        <label for="nama">Nama Divisi :</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required value="<?php echo $divisi->nama ?>"> 
      </div>
      <div class="form-group">
        <label for="status">Status:</label>
        <input value="<?php echo $divisi->status ?>" type="text" class="form-control" name="status" id="status" placeholder="Status"required>
      </div> 
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-warning">Reset</button>
      <a href="<?php echo base_url('inventory'); ?>" class="btn btn-danger">Back</a>
    </form>
      </div>
       <!-- End Content -->

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php $this->load->view('Layout/footer'); ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login">Logout</a><?php echo base_url('asset/')?>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('asset/vendor/') ?>jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('asset/vendor/') ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('asset/vendor/') ?>jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('asset/vendor/') ?>chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('asset/')?>js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url('asset/')?>js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>

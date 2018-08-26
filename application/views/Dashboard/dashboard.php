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
  <link href="<?php echo base_url('asset/vendor/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('asset/vendor/') ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('asset/vendor/') ?>datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('asset/') ?>css/sb-admin.css" rel="stylesheet">
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
        <!-- <li class="breadcrumb-item active">Dashboard</li> -->
      </ol>
      <!-- Icon Cards-->
      <div>
        Selamat Datang <?php echo $this->session->userdata('username'); ?>
        
      </div>

      <br><br><br>

      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">Jumlah Inventory = <?php echo $inventory ?> </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-book"></i>
              </div>
              <div class="mr-5">Jumlah Divisi = <?php echo $divisi ?></div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-book"></i>
              </div>
              <div class="mr-5">Jumlah Barang = <?php echo $barang ?></div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                  <i class="fa fa-fw fa-comments"></i>
                   </div>
                  <div class="mr-5">Jumlah Gudang = <?php echo $gudang ?> </div>
                  </div>
                  </div>
                  </div>

      </div>

      <div class="center">

      </div>


        <div class="center">
        
      
      <!-- Area Chart Example-->
     
      <!-- Example DataTables Card-->
     
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php $this->load->view('Layout/footer'); ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
   
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('asset/vendor/') ?>jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('asset/vendor/') ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('asset/vendor/') ?>jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('asset/vendor/') ?>chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url('asset/vendor/') ?>datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url('asset/vendor/') ?>datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('asset/') ?>js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url('asset/') ?>js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url('asset/') ?>js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>

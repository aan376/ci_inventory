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
          <a href="<?php echo base_url('gudang'); ?>">Gudang</a>
        </li>
        <li class="breadcrumb-item active">Add</li>
      </ol>
      <!-- Area Chart Example-->

      <!-- Content -->
      <div>
      <form method="POST" action="<?php echo base_url('gudang/insert'); ?>">
      <div class="form-group">
      <label for="kode_barang">Kode Barang:</label>
      <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode Barang" required>
      </div>

      <div class="form-group">
        <label for="jenis_barang">Jenis Barang:</label>
        <input type="text" class="form-control" name="jenis_barang" id="jenis_barang" placeholder="Jenis Barang" required>
      </div>

      <div class="form-group">
        <label for="tanggal">Tanggal:</label>
        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" required>
      </div>

      <div class="form-group">
        <label for="jumlah_pemasukan">Jumlah Pemasukan:</label>
        <input type="number" class="form-control" name="jumlah_pemasukan" id="jumlah_pemasukan" placeholder="Jumlah Pemasukan" required>
      </div>

       <div class="form-group">
        <label for="jumlah_pengeluaran">Jumlah Pengeluaran:</label>
        <input type="number" class="form-control" name="jumlah_pengeluaran" id="jumlah_pengeluaran" placeholder="Jumlah Pengeluaran" required>
      </div>

      <div class="form-group">
        <label for="jumlah_stok">Jumlah Stok:</label>
        <input type="number" class="form-control" name="jumlah_stok" id="jumlah_stok" placeholder="Jumlah Stok" required>
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

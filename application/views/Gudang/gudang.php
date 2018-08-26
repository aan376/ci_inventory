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
        <li class="breadcrumb-item active">Gudang</li>
        
      </ol>
      <!-- Area Chart Example-->
      <div>
      <a class="btn btn-info" href="<?php echo base_url('gudang/add'); ?>">Add(+)</a>
      <br><br>
      <table class="table table-striped table-bordered table-hover">
        <tr>
          <th>No</th>
          <th>Kode Barang</th>
          <th>Jenis Barang</th>
          <th>Tanggal</th>
          <th>Jumlah Pemasukan</th>
          <th>Jumlah Pengeluaran</th>
          <th>Jumlah Stok</th>
          <th>Action</th>
        </tr>

        <?php foreach ($gudang as $key => $value): ?>
          <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $value->kode_barang ?></td>
            <td><?php echo $value->jenis_barang ?></td>
            <td><?php echo $value->tanggal ?></td>
            <td><?php echo $value->jumlah_pemasukan ?></td>
            <td><?php echo $value->jumlah_pengeluaran ?></td>
            <td><?php echo $value->jumlah_stok ?></td>

            <td align="center">
              <a title="Edit Data" href="<?php echo base_url('gudang/edit/'.$value->id); ?>"><i class="fa fa-pencil"></i></a>
              &nbsp;
              <a href="<?php echo base_url('barang/delete/'.$value->id); ?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')" title="Hapus Data" href=""><i class="fa fa-trash"></i></a>
            </td>
          </tr>
        <?php endforeach ?>

      </table>  
      </div>

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

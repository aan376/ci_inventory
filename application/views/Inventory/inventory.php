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

  <!-- Datatable CSS -->
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <!-- Datatable CSS -->

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
        <li class="breadcrumb-item active">Inventory</li>
        
      </ol>
      <!-- Area Chart Example-->
      <div>
      <a class="btn btn-info" href="<?php echo base_url('inventory/add'); ?>">Add(+)</a>
      <br><br>
      <table id="data_table" class="table table-striped table-bordered table-hover">
        <thead>
        <tr style="background-color: lightgreen">
          <th>No</th>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Nama Pembeli</th>
          <th>Tanggal</th>
          <th>Harga</th>
          <th>Jumlah Pengeluaran</th>
          <th>Jumlah Stok</th>
          <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($inventory as $key => $value): ?>
          <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $value->kode_barang ?></td>
            <td><?php echo $value->nama_barang ?></td>
            <td><?php echo $value->nama_pembeli ?></td>
            <td><?php echo $value->tanggal ?></td>
            <td><?php echo $value->harga ?></td>
            <td><?php echo $value->jumlah_pengeluaran ?></td>
            <td><?php echo $value->jumlah_stok ?></td>

            <td align="center">
              <a title="Edit Data" href="<?php echo base_url('inventory/edit/'.$value->id); ?>"><i class="fa fa-pencil"></i></a>
              &nbsp;
              <a href="<?php echo base_url('inventory/delete/'.$value->id); ?>" onclick="return confirm('Apakah anda ingin menghapus data ini?')" title="Hapus Data" href=""><i class="fa fa-trash"></i></a>
            </td>
          </tr>
        <?php endforeach ?>
        </tbody>

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
    
    <!-- Datatable JS -->
    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!-- Datatable JS -->

    <script type="text/javascript">
      $(document).ready(function() {
        $('#data_table').DataTable();
      });
    </script>


  </div>
</body>

</html>

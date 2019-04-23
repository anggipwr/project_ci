<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>
<?php $this->load->view("_partials/tema.php") ?>
<div class="wrapper">
	
	<?php $this->load->view("_partials/navbar.php") ?>
	
	<?php $this->load->view("_partials/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) 
    <section class="content-header">
      <h1>
        Judul Halaman
        <small>Sub Judul Halaman</small>
      </h1>
	 
      <--?php $this->load->view("_partials/breadcrumb")?>
    </section>
	-->

    <!-- Main content -->
    <section class="content container-fluid">

     <div class="box box-solid box-default">
            <div class="box-header text-center">
              <h3 class="box-title">Selamat Datang PTT-PK Dinas Kelautan dan Perikanan Provinsi Jawa Timur</h3>
			  <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            
            <!-- /.box-body -->
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
	<?php $this->load->view("_partials/footer")?>
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

	<?php $this->load->view("_partials/js")?>
	
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
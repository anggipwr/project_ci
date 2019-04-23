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
            <div class="box-header with-border">
              <h3 class="box-title">Cetak Laporan SPJ</h3>
			<div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <div class="row">
			   <div class="col-md-4">
			   </div>
			   <div class="col-md-4">
				<div class="box box-solid with-border">
					<div class="box-body">
				<form action="<?php echo base_url().'report/cetak'?>" method="post" target="_blank">		
				  <div class="form-group">
				  <label>Tanggal Laporan:</label>
				  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" id="tanggal" name="tanggal" required>
				  </div>
				  </div>
				  <div class="form-group">
				  <label>Jenis Laporan:</label><br>
				  <input type="radio" name="jenis" class="flat-red" value="1" checked> Honorarium Bulanan <br>
				  <input type="radio" name="jenis" class="flat-red" value="2"> THR <br>
				  <input type="radio" name="jenis" class="flat-red" value="3"> Tambahan Honorarium
				  </div>
				  <div class="form-group">
					<button type="submit" class="btn btn-success btn-block">Cetak</button>
				  </div>
				</form>
					</div>
				</div>
				</div>
			<div class="col-md-4">
			</div>
			   </div>
            </div>
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
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
              <h3 class="box-title">DATA PTT-PK <?php echo $this->session->userdata('nama_lengkap')?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Pendidikan</th>
                  <th>Unit</th>
				  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($hasilquery as $ptt): ?>
									<tr>
										<td>
											<?php echo $ptt->nip ?>
										</td>
										<td>
											<?php echo $ptt->nama ?>
										</td>
										<td>
											<?php echo $ptt->pendidikan ?>
										</td>
										<td>
											<?php echo $ptt->unit ?>
										</td>
										<td>
										<a href="<?php echo site_url('ptt/view/'.$ptt->id_pegawai) ?>" class="btn btn-xs" title="Lihat Data <?php echo $ptt->nama ?>"><i class="fa fa-info" aria-hidden="true"></i></a>
										<a href="<?php echo site_url('ptt/edit/'.$ptt->id_pegawai) ?>" class="btn btn-xs" title="Ubah Data <?php echo $ptt->nama ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
										<a href="<?php echo site_url('ptt/delete/'.$ptt->id_pegawai) ?>" class="btn btn-xs" title="Hapus Data <?php echo $ptt->nama ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
										
										</div>
										</td>
									</tr>
									<?php endforeach; ?>
                </tbody>
              </table>
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
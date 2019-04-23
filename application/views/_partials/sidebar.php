<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="<?php echo $this->uri->segment(1) == '' ? 'active': '' ?>"><a href="<?php echo base_url('')?>"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="<?php echo $this->uri->segment(1) == 'ptt' ? 'active': '' ?>"><a href="<?php echo site_url('ptt');?>"><i class="fa fa-user"></i> <span>Data PTT</span></a></li>	
		<li class="treeview">
          <a href="#"><i class="fa fa-briefcase"></i> <span>SKP</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Sub Menu 1</a></li>
            <li><a href="#">Sub Menu 2</a></li>
			<li><a href="#">Sub Menu 3</a></li>
			<li><a href="#">Sub Menu 4</a></li>
          </ul>
        </li>
		<li class="<?php echo $this->uri->segment(1) == 'report' ? 'active': '' ?>"><a href="<?php echo site_url('report');?>"><i class="fa fa-print"></i> <span>Cetak Laporan</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
 <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="../assets/stisla/pages/index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="../assets/stisla/pages/index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
             

              <li><a class="nav-link" href="<?php echo base_url('admin/dasbor') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

              <li class="menu-header">Master</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>User</span></a>
                <ul class="dropdown-menu">
                   <li><a class="nav-link" href="<?php echo base_url('admin/admin') ?>"><i class="far fa-square"></i> <span>Data User</span></a></li>
                   <li><a class="nav-link" href="<?php echo base_url('admin/admin/add') ?>"><i class="far fa-square"></i> <span>Tambah User</span></a></li>
                </ul>
              </li>



            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="../assets/stisla/pages/#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>
        </aside>
      </div>


       <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?php echo $title ?></h1>
          </div>
          <div class="section-body">
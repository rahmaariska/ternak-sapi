<?php
$menu = $this->session->userdata('menu');
$submenu = $this->session->userdata('submenu');

?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url();?>/assets/AdminLte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url();?>/assets/AdminLte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$id_user->username; ?></a>
          <a href="#" class="d-block text-success"><?=$id_user->nama_level; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview <?=($menu == 'ternak')?('menu-open'):(''); ?>">
            <a href="#" class="nav-link <?=($menu == 'ternak')?('active'):(''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?=($menu == 'peternakan')?('menu-open'):(''); ?>">
            <a href="#" class="nav-link <?=($menu == 'peternakan')?('active'):(''); ?>">
              <i class="nav-icon fas fa-hat-cowboy"></i>
              <p>
                Peternakan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('/Pengajuan'); ?>" class="nav-link <?=($submenu == 'pengajuan')?('active'):('');?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Peternakan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Peternakan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Kelompok');?>" class="nav-link <?=($submenu == 'kelompok')?('active'):('');?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kelompok</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Koperasi'); ?>" class="nav-link <?=($submenu == 'koperasi')?('active'):('')?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Koperasi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('/Pengguna'); ?>" class="nav-link <?=($menu == 'pengguna')?('active'):(''); ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('/Petugas'); ?>" class="nav-link <?=($menu == 'petugas')?('active'):(''); ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Petugas
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
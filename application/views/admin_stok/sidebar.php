<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header">
          <span>General</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
          data-original-title="General"></i>
        </li>
        <li class="nav-item"><a href="<?php echo site_url('stok') ?>"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <hr>
        <!-- Kategori Barang -->
        <li class=" navigation-header">
          <span>Kategori Barang</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
          data-original-title="Apps"></i>
        </li>
        <li class=" nav-item"><a href="<?php  echo site_url('stok/daftarkategori') ?>"><i class="ft-bookmark"></i><span class="menu-title" data-i18n="">Daftar Kategori</span></a>
        </li>
        <li class=" nav-item"><a href="<?php echo base_url('stok/inputkategori') ?>"><i class="ft-plus-circle"></i><span class="menu-title" data-i18n="">Input Kategori </span></a>
        </li>
        <!-- Barang -->
        <li class=" navigation-header">
          <span>Data Barang</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
          data-original-title="Apps"></i>
        </li>
        <li class=" nav-item"><a href="#"><i class="ft-shopping-cart"></i><span class="menu-title" data-i18n="">Daftar Barang</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="ft-plus-circle"></i><span class="menu-title" data-i18n="">Input Barang </span></a>
        </li>
        <hr>
        <!-- Profile -->
        <li class=" navigation-header">
          <span>Profile</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
          data-original-title="Apps"></i>
        </li>
        <li class=" nav-item"><a href="<?php echo base_url('stok/editprofile') ?>"><i class="ft-user"></i><span class="menu-title" data-i18n="">Edit Profile</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="ft-lock"></i><span class="menu-title" data-i18n="">Ganti Password</span></a>
        </li>
      </ul>
    </div>
  </div>
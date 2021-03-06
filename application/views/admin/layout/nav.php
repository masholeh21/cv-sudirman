<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav" id="main-menu">
	<li><a  href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="#"><i class="fa fa-wrench"></i> Settings<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/setting/config') ?>">General Settings</a></li>
            <li><a href="<?php echo base_url('admin/setting/logo') ?>">Logo</a></li>
            <li><a href="<?php echo base_url('admin/setting/icon') ?>">Icon</a></li>
        </ul>
    </li>
    <li><a href="#"><i class="fa fa-user"></i> Tentang Kami<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/about/sekilas_perusahaan') ?>">Sekilas Perusahaan</a></li>
            <li><a href="<?php echo base_url('admin/about/pesan_direktur') ?>">Pesan Direktur</a></li>
            <li><a href="<?php echo base_url('admin/about/visi_misi') ?>">Visi dan Misi</a></li>
        </ul>
    </li>
        <li><a href="#"><i class="fa fa-bullhorn"></i>Produk<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/product/industri_besar') ?>">Industri Besar</a></li>
            <li><a href="<?php echo base_url('admin/product/industri_kecil') ?>">Industri Kecil</a></li>
        </ul>
    </li>
    <li><a href="#"><i class="fa fa-image"></i> Galleri<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/gallery/galeri_foto') ?>">Foto</a></li>
            <li><a href="<?php echo base_url('admin/gallery/galeri_video') ?>">Video</a></li>
        </ul>
    </li>
    <li><a href="#"><i class="fa fa-film"></i> Slider<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/Slider') ?>">List Slider</a></li>
            <li><a href="<?php echo base_url('admin/Slider/create') ?>">Create Slider</a></li>
        </ul>
    </li>
    <li><a href="#"><i class="fa fa-users"></i> Karyawan<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/Karyawan') ?>">List Karyawan</a></li>
            <li><a href="<?php echo base_url('admin/Karyawan/create') ?>">Create Karyawan</a></li>
        </ul>
    </li>
    <li><a href="<?php echo base_url('admin/data_user') ?>"><i class="fa fa-users"></i> Data User</a></li>
    <li><a href="<?php echo base_url('admin/kontak') ?>"><i class="fa fa-envelope-o"></i> Kontak</a></li>
    <li><a href="<?php echo base_url('admin/login/logout') ?>"><i class="fa fa-envelope-o"></i>Logout</a></li>

</ul>
</div>

</nav>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
<div id="page-inner">


<div class="row">
<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
             <h2><?php echo $title ?></h2>
        </div>
        <div class="panel-body">
            <div class="table-responsive">

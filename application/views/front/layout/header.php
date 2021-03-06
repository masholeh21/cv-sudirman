<!-- Main Header start -->
<header class="main-herader">

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Header topbar start -->

  <div class="header-topbar center991">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="herader-topbar-col tobar-leftside">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span class="after-bdr"><?php echo $site['telepon'] ?></span>
                      <i class="fa fa-envelope-o" aria-hidden="true"></i>
                      <span><?php echo $site['email'] ?></span>
                  </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="herader-topbar-col tobar-rightside center991">
                      <p><a href="#appointment" id="scroll"><span>Download Brosur</span></a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>

    <!-- Header navbar start -->
    <div class="header-navbar fixed-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html">
                                <img src="<?php echo base_url(); ?>assets/images/header2.png" alt="CV-Sudirman" width="300px" height="70px"/>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInUp">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active">
                                    <a href="<?php echo base_url('home'); ?>">Home </a>
                                </li>
                                <li><a href="<?php echo base_url('about'); ?>">TENTANG KAMI</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUK<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url('product_1'); ?>">Industri Besar</a>
                                        </li>
                                        <li><a href="<?php echo base_url('product_2'); ?>">Industri Rumahan</a>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GALERI<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url('photo'); ?>">Foto</a>
                                        </li>
                                        <li><a href="<?php echo base_url('video'); ?>">Video</a>
                                    </ul>
                                    </li>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('contact'); ?>">KONTAK</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

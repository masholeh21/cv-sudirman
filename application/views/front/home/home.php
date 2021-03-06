<?php
$sekilasperusahaan = $this->mTentangKami->listSekilasPerusahaan();
?>

<!-- Main Slider Start -->
  <section class="main-slider-area">
      <div class="main-container">
          <div id="carousel-example-generic" class="carousel slide carousel-fade">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">

                  <?php
                    $i=2;
                    foreach ($sliders as $slider){
                    if ($i % 2 == 0){
                  ?>
                  <!-- First slide -->
                  <div class="item active slide-<?php echo $i ?> text-left">
                      <img src="<?php echo base_url('assets/upload/image/'.$slider['image']);?>" alt="Image slide 3"/>
                      <div class="carousel-caption">
                          <p data-animation="animated fadeInUp">
                             <?php echo $slider['judul'];?>
                          </p>
                          <h3 data-animation="animated fadeInUp">
                              <?php echo $slider['sub_judul'];?>
                          </h3>
                          <a href="contact.html" class="btn btn-primary btn-lg" data-animation="animated zoomIn">Contact Us</a>
                      </div>
                  </div>

                  <?php }else{ ?>

                  <div class="item slide-<?php echo $i ?> text-right">
                      <img src="<?php echo base_url('assets/upload/image/'.$slider['image']);?>" alt="Image slide 3"/>
                      <div class="carousel-caption">
                          <p data-animation="animated fadeInUp">
                             <?php echo $slider['judul'];?>
                          </p>
                          <h3 data-animation="animated fadeInUp">
                              <?php echo $slider['sub_judul'];?>
                          </h3>
                          <a href="contact.html" class="btn btn-primary btn-lg" data-animation="animated zoomIn">Contact Us</a>
                      </div>
                  </div>

                  <?php
                    } $i++; }
                  ?>

              </div>
              <!-- /.carousel-inner -->

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
          <!-- /.carousel -->
      </div>
  </section>

  <!-- About start -->
  <section class="about-area" id="about">
      <div class="container">
          <div class="row">
              <div class="col-lg-7 col-md-7">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="about-col">
                              <div class="experience-box wow bounceIn" data-wow-duration="1s" data-wow-delay="0s">
                                  <h1>20</h1>
                                  <h4>Years Experience</h4>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="about-col welcome-text">
                              <p>WELCOME!</p>
                              <h2>CV-SUDIRMAN</h2>
                              <h4>Induction Furnance System</h4>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="about-col">
                              <p><?php echo $sekilasperusahaan['deskripsi'] ?></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-5 col-md-5">
                 <div class="about-col">
                    <img src="<?php echo base_url(); ?>assets/images/logo-transparant.png" alt="">
                 </div>
              </div>
          </div>
      </div>
  </section>

  <!--services start-->
  <section class="services-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="defult-title text-center">
                      <h1>Our <span>services</span></h1>
                      <h5>consectetur adipisicing elit alias</h5>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-4 col-sm-4 col-xs-4 fw600">
                          <div class="serviceBox wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                              <div class="service-icon">
                                  <i class="flaticon-brick-wall"></i>
                              </div>
                              <h3 class="title">Industri Besar</h3>
                              <p class="description">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                              </p>
                          </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4 fw600">
                            <img src="<?php echo base_url(); ?>assets/images/fav.png" height="100px" alt=" ">
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4 fw600">
                          <div class="serviceBox wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                              <div class="service-icon">
                                  <i class="flaticon-crane-1"></i>
                              </div>
                              <h3 class="title">Industri Rumahan</h3>
                              <p class="description">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur.
                              </p>
                          </div>
                      </div>

                  </div>
              </div>

          </div>
      </div>
  </section>

  <!-- Projects Start -->
  <section class="project-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="defult-title text-center">
                      <h1><span>product</span></h1>
                      <h5>Product CV. Sudirman</h5>
                  </div>
              </div>
          </div>
          <div class="row">

              <?php foreach ($produks as $produk){ ?>

              <div class="col-md-4 col-sm-4">
                  <div class="project-col">
                      <div class="hover-box">
                          <img src="<?php echo base_url('assets/upload/image/'.$produk['image']);?>" alt="">
                          <div class="hover-box-content">
                              <h3><?php echo $produk['judul'];?></h3>
                              <ul class="icon">
                                  <li><a class="gallery" href="<?php echo base_url('assets/upload/image/'.$produk['image']);?>" data-lightbox="lightbox" data-title="<?php echo $produk['judul'];?>"><i class="fa fa-search"></i></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>

              <?php } ?>

          </div>
      </div>
  </section>

  <!-- Counter Start -->
  <section class="counter-area">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6 default-col">
                  <div class="counter-box">
                      <div class="counter-icon"><i class="icofont icofont-files"></i>
                      </div>
                      <div class="counter-item counter">0</div>
                      <div class="counter-title">
                          <h4>Pengunjung Web</h4>
                      </div>
                  </div>
                  <!--counter-box-->
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 default-col">
                  <div class="counter-box">
                      <div class="counter-icon"><i class="icofont icofont-businessman"></i>
                      </div>
                      <div class="counter-item counter">0</div>
                      <div class="counter-title">
                          <h4>Happy client</h4>
                      </div>
                  </div>
                  <!--counter-box-->
              </div>
          </div>
      </div>
  </section>

  <!-- Team Start -->
  <section class="team-section" style="background-color:#CF181F">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="defult-title text-center">
                      <h1><span>Our Best Team</span></h1>
                      <h5><span>CV-SUDIRMAN<span></h5>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="team-carousel">

                      <?php foreach ($karyawan as $karyawan){ ?>

                      <div class="our-team">
                          <div class="team-pic">
                              <img src="<?php echo base_url('assets/upload/image/'.$karyawan['image']);?>" alt="">
                          </div>
                          <div class="team-profile">
                              <h3 class="team-title">
                                  <a href="team-details.html"><?php echo $karyawan['nama'];?></a>
                                  <small><?php echo $karyawan['jabatan'];?></small>
                              </h3>
                              <ul class="team-social">
                                  <li><a href="#" class="fa fa-facebook"></a></li>
                                  <li><a href="#" class="fa fa-twitter"></a></li>
                                  <li><a href="#" class="fa fa-google-plus"></a></li>
                                  <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                          </div>
                      </div>

                      <?php } ?>

                  </div>
              </div>
          </div>
      </div>
  </section>

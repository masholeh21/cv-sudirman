<!-- Inner Page title Start -->
  <section class="innerpage-titlebar">
      <div class="container">
          <div class="titlebar-box">
              <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                      <div class="titlebar-col">
                          <h2>Tentang Kami</h2>
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                      <div class="titlebar-col">
                          <p><a href="<?php echo base_url('home'); ?>">Home</a> | <a href="#"><span>About</span></a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- About Three start -->
  <section class="about-area about-area-three">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="about-three-col">
                      <img src="<?php echo base_url('assets/upload/image/'.$sekilasperusahaan['image']);?>" alt="">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="about-three-col">
                     <h3>Sekilas Perusahaan</h3>
                     <p><?php echo $sekilasperusahaan['deskripsi'] ?></p>
                 </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                 <div class="about-three-col">
                     <h3>Visi & Misi </h3>
                     <p><?php echo $visimisi['deskripsi'] ?></p>
                 </div>
              </div>
              <div class="col-md-6">
                  <div class="about-three-col">
                      <img src="<?php echo base_url('assets/upload/image/'.$visimisi['image']);?>" alt="">
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="about-three-col">
                      <img src="<?php echo base_url('assets/upload/image/'.$pesandirektur['image']);?>" alt="">
                  </div>
              </div>
              <div class="col-md-6">
                 <div class="about-three-col">
                     <h3>Pesan Direktur</h3>
                     <p><p><?php echo $pesandirektur['deskripsi'] ?></p>
                 </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Separator Start -->
  <section class="separator-area">
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="separator-col">
                      <h2>please feel free to contact us</h2>
                      <h4><span>Hotline:</span> +001-111-222-3344</h4>
                      <h4><span>Mail Address:</span> yourmail@gmail.com</h4>
                  </div>
              </div>
          </div>
      </div>
  </section>

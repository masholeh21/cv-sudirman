<!-- Inner Page title Start -->
<section class="innerpage-titlebar">
    <div class="container">
        <div class="titlebar-box">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                    <div class="titlebar-col">
                        <h2>Produk Kita</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                    <div class="titlebar-col">
                        <p><a href="<?php echo base_url('home'); ?>">Home</a> | <a href="#"><span>Industri Rumahan</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Section -->
<section class="project-title-area" id="work">
    <div class="container">
        <div class="row">
            <?php foreach ($produks as $produk){ ?>
            <div class="col-md-4 col-sm-6 fw600 projects-title-col">
                <div class="hover-box">
                    <img src="<?php echo base_url('assets/upload/image/'.$produk['image']);?>" alt="">
                    <div class="hover-box-content">
                        <ul class="icon">
                            <li><a class="gallery" href="<?php echo base_url('assets/upload/image/'.$produk['image']);?>" data-lightbox="lightbox" data-title="Your project title"><i class="fa fa-search"></i></a></li>
                            <li><a href="<?php echo base_url($produk['slug_industri_kecil']);?>"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="project-title-box">
                    <h3><?php echo $produk['judul'] ?></h3>
                </div>
            </div>
            <?php } ?>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <ul class="pagination">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

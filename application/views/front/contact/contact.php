<!-- Inner Page title Start -->
<section class="innerpage-titlebar">
    <div class="container">
        <div class="titlebar-box">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                    <div class="titlebar-col">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                    <div class="titlebar-col">
                        <p><a href="<?php echo base_url('home'); ?>">Home</a> | <a href="#"><span>Contact</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Start -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-box col-default">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p>3312(A) / 2 Mayville, Barker Street, Western Australia</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-box col-default">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p>yourmail@gmail.com</p>
                    <p>yourmail@gmail.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-box col-default">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>+012 716-753-8524 <br> +012 607-591-1611</p>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="contact-form col-default text-center">
                    <div id="form-messages"></div>
                    <form id="ajax-contact" method="post" action="php/contact.php">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                        <textarea class="form-control textarea-hight-full" id="message" name="message" rows="5" placeholder="Message" required></textarea>
                        <button class="btn btn-default simple-btn" type="submit">Sent Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Map -->
<div id="map" style="width:100%; height:400px;"></div>



<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<!-- All Included JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-dropdownhover.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-scrolltofixed-min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jarallax.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.countup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dyscrollup.js"></script>
<script src="<?php echo base_url(); ?>assets/js/animated-text.js"></script>
<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/imagesloaded.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.filterizr.min.js"></script>

<!-- Google map -->
<script src="<?php echo base_url(); ?>assets/js/google-map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdEPAHqgxFK5pioDAB3rsvKchAtXxRGO4&callback=initMap"></script>

<!-- Custom Js -->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<!-- AJAX Contact Form Using -->
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>

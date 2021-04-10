<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?> 
<section class="custome-footer">
<div class="container">
     <div class="row">
     <div class="col-xl-4 col-lg-4 col-md-5 col-sm-8 col-12">
        <div class="footer-logo">
        <a href="<?php echo get_home_url(); ?>">
                        	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="img" />
            </a>
            <p>MovingWithLove Moving Company strives to keep our customers satisfied with quality assurance, professionalism by our well-trained movers and meekness of care towards the shipper's personals.</p>
            
        </div>
         
     </div>
     <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
     <div class="footer-nav">
     <div class="footer-title">
          <p>Quick Links</p>
        </div>
        <ul>
          <li><a href="front-page.php">HOME</a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li><a href="http://localhost/MWL/services/">SERVICES</a></li>
          <li><a href="http://localhost/MWL/testimonials/">TESTIMONIALS</a></li>
          <li><a href="http://localhost/MWL/rates/">RATES</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
     </div>  
     </div>
     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
     <div class="footer-nav">
     <div class="footer-title">
          <p>Our Services</p>
        </div>
        <ul>
          <li><a href="http://localhost/MWL/services/">BUSINESS MOVE</a></li>
          <li><a href="http://localhost/MWL/services/">PROFESSIONAL PACKING</a></li>
          <li><a href="http://localhost/MWL/services/">MOVING SUPPLIE</a></li>
          <li><a href="http://localhost/MWL/services/">LONG DISTANCE</a></li>
          <li><a href="http://localhost/MWL/services/">LOCAL MOVING</a></li>
        </ul>
     </div>  
     </div>
     <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-12">
     <div class="footer-nav">
     <div class="footer-title">
          <p>GET IN TOUCH</p>
        </div>
        <div class="footer-contact">
          <div class="address">
            <div class="icon">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            </div>
            <div class="text">
              <p>Daily: 7am - 8pm</p>
            </div>
          </div>
          <div class="address">
            <div class="icon">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <div class="text">
              <p><a href="mailto:movingwith1love@gmail.com">movingwith1love@gmail.com</a></p>
            </div>
          </div>
          <div class="address">
            <div class="icon">
            <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <div class="text">
               <p><a href="tel:7607037671">760-703-7671</a> </p>  
            </div>
          </div>
        </div>
     </div>
     </div>
     </div>
   </div>
    </section>
  <section class="bottom-footer">
<p>Copyright 2020 Moving with Love. All Rights Reserved</p>
  </section>
 
<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.colorbox-min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.colorbox.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script>
</body>   
</html>
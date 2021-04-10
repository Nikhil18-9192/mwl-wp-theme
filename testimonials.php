<?php
/**
 * Template Name: sub Page testimonials Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */ 
 
get_header(); ?>
   <section class="testimonials-page">
   <div class="pages-title">
           <h1>Our Testimonials</h1>
         </div>
         <div class="testimonial">
             <div class="container">
                 <h4>Every move is with love. Check out our testimonials below.</h4>
      <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
      <video id="my_video1" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_0681_791.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video1')"><i class="fa fa-play-circle"></i></button>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
      <video id="my_video2" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_0372_143.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video2')"><i class="fa fa-play-circle"></i></button>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
      <video id="my_video3" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_0381_102.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video3')"><i class="fa fa-play-circle"></i></button>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
      <video id="my_video4" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_0464_854.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video4')"><i class="fa fa-play-circle"></i></button>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
      <video id="my_video5" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_0728_713.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video5')"><i class="fa fa-play-circle"></i></button>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
      <video id="my_video6" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_1046_525.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video6')"><i class="fa fa-play-circle"></i></button>
            </div>
             
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
      <video id="my_video7" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_0680_777.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video7')"><i class="fa fa-play-circle"></i></button>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
      <video id="my_video8" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_1155_306.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video8')"><i class="fa fa-play-circle"></i></button>
            </div>
            
          </div>
          </div>

     </div>
   </section>
<?php get_footer(); ?>
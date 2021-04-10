<?php
/**
 * Template Name: Front Page Template
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
   
  <div class="slider">
    <div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider.jpg" alt="img" />
    
    </div>
    <div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider.jpg" alt="img" />
     
    </div>
  </div>
  <div class="slider-text">
    <div class="container">
            <h1>We provide best <br><span style="font-weight: 700;">mover & packer </span> services</h1>
            <p>We provides removels to and from the manchesters space. <br> We tend to might have all of the fashionable removals instrumentality <br> at our disposal, however there's additional to our service than the removel vans</p>
            <a href="#">Read More</a>
            </div>
          </div>
  <section class="custome-cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12">
          <div class="cta-text">
            <p>TAKE THE STRESS OUT OF MOVING AND CONTACT US TODAY!</p>
          </div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
          <div class="cta-btn">
          <a href="http://localhost/MWL/#contact">GET A FREE QUOTE</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="custome-services">
  <div class="container">
    <div class="section-title">
      <p>Our Services</p>
      <h2>WHAT WE OFFER</h2>
      </div>
      <div class="services">
        <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
          <div class="service-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service1.jpg" alt="img" />
          <h4>Local Moving</h4>
          <p>We do a wide variety of local moves, including apartments, single-family homes, retirement communities, dorms, condos, and many more!</p>
          <a href="#">Read More</a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
        <div class="service-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service2.jpg" alt="img" />
        <h4>Long Distance</h4>
          <p>Long-distance moving causes many overwhelming aspects to think about, and we are here to provide you with customer service that fits you perfectly.</p>
          <a href="#">Read More</a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
        <div class="service-card">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service3.jpg" alt="img" />
        <h4>Corporate Move</h4>
          <p>Moving a business can certainly be time consuming, so we ensure your items are processed quickly and efficiently minimizing downtime</p>
          <a href="#">Read More</a>
            </div>
        </div>
        </div>
        <div class="all-service-btn">
        <a href="http://localhost/MWL/services/">View All Services</a>
      </div>
      </div>
      
    </div>
  </section>
<section class="custome-rating">
<div class="container">
<div class="section-title">
      <p>Our Rates</p>
      <h2>Moving Expences</h2>
      </div>
      <div class="rating">
        <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="price-table-layout-1">
                            <div class="price-table-header">
                                <h3 class="heading text-uppercase">2 MEN & TRUCK</h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/truck.png" alt="img" class="pricing-table-img" />
                                <div class="price-value">
                                    <span class="currency">$</span>
                                     95<span class="hours">/hour</span> 
                                </div>
                            </div>
                            <div class="pricing-content">
                                 <p>includes loading, unloading & assembling/ disassembling furniture with 3 hour minimum packing materials added with additional cost.</p>
                            </div>
                            <a href="#" class="price-plan-btn">Get Started</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="price-table-layout-1">
                            <div class="price-table-header">
                                <h3 class="heading text-uppercase">3 MEN & TRUCK</h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/truck.png" alt="img" class="pricing-table-img"/>
                                <div class="price-value">
                                    <span class="currency">$</span>
                                    142<span class="hours">/hour</span> 
                                </div>
                            </div>
                            <div class="pricing-content">
                                <p>includes loading, unloading & assembling/ disassembling furniture with 3 hour minimum packing materials added with additional cost</p>
                            </div>
                            <a href="#" class="price-plan-btn">Get Started</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="price-table-layout-1">
                            <div class="price-table-header">
                                <h3 class="heading text-uppercase">4 MEN & TRUCK</h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/truck.png" alt="img" class="pricing-table-img" />
                                <div class="price-value">
                                    <span class="currency">$</span>
                                    190<span class="hours">/hour</span> 
                                </div>
                            </div>
                            <div class="pricing-content">
                                 <p>includes loading, unloading&assembling/ disassembling with 4 hour minimum. packing materials added with additional cost.</p>
                            </div>
                            <a href="#" class="price-plan-btn">Get Started</a>
                        </div>
                    </div>
                    </div>
                    </div>
</div>
</section>

<section class="custome-testimonial">
  <div class="container">
<div class="section-title">
      <p>Our Testimonials</p>
      <h2>What They Say</h2>
      </div>
      </div>
      <div class="testimonial">
      <div class="owl-carousel owl-theme">
      <div class="item">
      <video id="my_video1" class="video" height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_0681_791.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video1')"><i class="fa fa-play-circle"></i></button>
            </div>
            <div class="item">
      <video id="my_video2" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_0372_143.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video2')"><i class="fa fa-play-circle"></i></button>
            </div>
            <div class="item">
      <video id="my_video3" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_0381_102.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video3')"><i class="fa fa-play-circle"></i></button>
            </div>
            <div class="item">
      <video id="my_video4" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_0464_854.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video4')"><i class="fa fa-play-circle"></i></button>
            </div>
            <div class="item">
      <video id="my_video5" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_0728_713.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video5')"><i class="fa fa-play-circle"></i></button>
            </div>
            <div class="item">
      <video id="my_video6" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_1046_525.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video6')"><i class="fa fa-play-circle"></i></button>
            </div>
             
            <div class="item">
      <video id="my_video7" class="video"  height="100%" width="100%">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/img_0680_777.mp4" type="video/mp4">
            your browser does not support video change browser
          </video>
          <button id="playpausebtn" onclick="playPause(this,'my_video7')"><i class="fa fa-play-circle"></i></button>
            </div>
            <div class="item">
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
<section class="about-us" id="about">
  <div class="container-fluid">
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="about-detail">
        <div class="about-text">
          <h4>About us</h4>
          <p>MovingWithLove Moving Company strives to keep our customers satisfied with quality assurance, professionalism by our well-trained movers and meekness of care towards the shipper's personals.</p>
          <p>We base our foundation on repetitive quality customer service along with "word of mouth" referrals. In the effort of providing our customers with an efficient and professional level of moving service within one's budget and beyond that of other moving companies, we offer our moving services at an hourly rate or a flat itemized guaranteed rate.We are a family owned moving company and we serve all of San Diego with top notch residential and commercial moving services.</p>
          <p>Our services aren't limited to San Diego; MovingWithLove Services throughout San Diego, California, and the United States. MovingWithLove can also help you relocate across the state, or across the country. If you need a residential mover or commercial mover, we are here to help.</p>
          <h5>Call us today at 760-703-7671 for a free estimate 
from a live operator.</h5>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="about-img">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-img.jpg" alt="img" />
      </div>
    </div>
  </div>
  </div>
</section>
<section class="contact" id="contact">
<div class="container-fluid">
  <div class="row">
  
  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2">
  <div class="contact-form">
    <div class="form">
    <h4>Get A Free Quote</h4>
    <div class="name">
      <input type="text" placeholder="First Name">
      <input type="text" placeholder="Last Name">
    </div>
    <div class="email">
    <input type="text" placeholder="Phone">
      <input type="text" placeholder="Date Of Move">
    </div>
    <input type="text" placeholder="Email" name="email">
    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
    <button type="submit">SUBMIT</button>
    </div>
    </div>
  </div>
  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
    <div class="contact-img">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact.jpg" alt="img" />
    </div>
  </div>
  </div>
</div>
</section>
          
<?php get_footer(); ?>
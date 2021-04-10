<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?> /assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?> /assets/css/owl.theme.default.min.css">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/colorbox.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet" />
</head>
<body <?php body_class(); ?>>
    <div class="main_top_header">
        <div class="container">
            	 <div class="row">
                     <div class="col-xl-4 col-lg-3 col-md-4 col-sm-12 col-12">
                         <div class="logo">
                         <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="img" />
                           
						</a>
                         </div>
                     </div>
                     <div class="col-xl-8 col-lg-9 col-md-8 col-sm-12 col-12">
                            
                            <div class="header-contact">
                                <span><a href="tel:7607037671"><i class="fa fa-phone" aria-hidden="true"></i>760-703-7671</a></span>
                                <span><a href="mailto:movingwith1love@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>movingwith1love@gmail.com</a></span>
                            </div>
                            
                          
                         <div class="toggle-menubar">    
              
                 <div class="header_right_main">
             <div class="header_menu">
                 <div class="header-inner section-inner">
                 <div class="header-titles-wrapper">
                     <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                         <span class="toggle-inner">
                             <span class="toggle-text"><i class="fa fa-bars" aria-hidden="true"></i></span>
                         </span>
                     </button><!-- .nav-toggle -->
 
                 </div><!-- .header-titles-wrapper -->
 
                 <div class="header-navigation-wrapper">
 
                     <?php
                     if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
                         ?>
 
                             <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">
 
                                 <ul class="primary-menu reset-list-style">
 
                                 <?php
                                 if ( has_nav_menu( 'primary' ) ) {
 
                                     wp_nav_menu(
                                         array(
                                             'container'  => '',
                                             'items_wrap' => '%3$s',
                                             'theme_location' => 'primary',
                                         )
                                     );
 
                                 } elseif ( ! has_nav_menu( 'expanded' ) ) {
 
                                     wp_list_pages(
                                         array(
                                             'match_menu_classes' => true,
                                             'show_sub_menu_icons' => true,
                                             'title_li' => false,
                                             'walker'   => new TwentyTwenty_Walker_Page(),
                                         )
                                     );
 
                                 }
                                 ?>
 
                                 </ul>
 
                             </nav><!-- .primary-menu-wrapper -->
 
                         <?php
                     }
 
                     if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
                         ?>
 
                         <div class="header-toggles hide-no-js">
 
                         <?php
                         if ( has_nav_menu( 'expanded' ) ) {
                             ?>
 
                             <div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">
 
                                 <button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                                     <span class="toggle-inner">
                                         <span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
                                         <i class="fa fa-bars" aria-hidden="true"></i>
                                     </span>
                                 </button><!-- .nav-toggle -->
 
                             </div><!-- .nav-toggle-wrapper -->
 
                             <?php
                         }
 
                         if ( true === $enable_header_search ) {
                             ?>
 
                             <div class="toggle-wrapper search-toggle-wrapper">
 
                                 <button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
                                     <span class="toggle-inner">
                                         <?php twentytwenty_the_theme_svg( 'search' ); ?>
                                         <span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
                                     </span>
                                 </button><!-- .search-toggle -->
 
                             </div>
 
                             <?php
                         }
                         ?>
 
                         </div><!-- .header-toggles -->
                         <?php
                     }
                     ?>
 
                 </div><!-- .header-navigation-wrapper -->
 
             </div>
             </div>
            
         </div>
         <?php  // Output the menu modal. 
         get_template_part( 'template-parts/modal-menu' );?>
                  
                 </div>
                         </div>
                      
            </div>
            </div>		
        </div><!-- container-fluid -->
     
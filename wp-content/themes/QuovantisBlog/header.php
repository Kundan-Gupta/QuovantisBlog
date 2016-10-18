<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/quovantisblog.css"> -->
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
</head>

<body <?php body_class(); ?>>

<!-- <div class="sidebar-toggle">X</div> -->

<div class="sidebar custom-sidebar">
    <?php dynamic_sidebar( 'customsidebar' ); ?>
</div>

<div id="page" class="hfeed site">
    <div class="sidebar-toggle"><span class="fa fa-bars"></span></div>
    <!-- ******************* The Navbar Area ******************* -->
    <div class="wrapper-fluid wrapper-navbar <?php if (!is_home() || !is_front_page()){ ?> navbar-fixed-top <?php } ?>" id="wrapper-navbar">
	
        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'understrap' ); ?></a>
        
        
        <header class="container">
            <div class="">
                <div class="logo">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                                            title="" 
                                            rel="home"><?php bloginfo( 'name' ); ?>
                    </a>
                    <?php if(is_home() || is_front_page()){ ?>
                        <div class="tag-line">
                            <?php bloginfo('description'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="navbar-container">
                    <nav class="navbar">
                        <div class="container category-menu">
                            <!-- Brand and toggle get grouped for better mobile display -->
                           
                            <div class="row">
                                <div class="col-md-12 nopad-right">
                                    <?php wp_nav_menu(
                                        array(
                                            'theme_location' => 'primary',
                                            'container_class' => 'nav-container',
                                            'menu_class' => 'nav navbar-nav',
                                            'fallback_cb' => '',
                                            'menu_id' => 'main-menu',
                                            'walker' => new wp_bootstrap_navwalker()
                                        )   
                                    );?>    
                                </div>
                            </div>
                        </div>
                    </nav>

                    <!-- <div class="hamburger">
                        <span class="fa fa-bars"></span>
                    </div> -->


                </div>
            </div>
        </header>



    </div><!-- .wrapper-navbar end -->

<!--   <div class="container padding-left-x10 padding-right-x10"><hr class="separator"></div> -->

 

<!DOCTYPE html>
<html <?php echo language_attributes(); ?>>
<html>
    <head>
        <title><?php echo get_bloginfo('name'); ?> | <?php echo get_bloginfo('description'); ?></title>
        <meta charset="<?php echo get_bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/media query.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-family.css">
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <?php wp_head(); ?>
        
    </head>
    <body>

        <div class="pageLoad">
            <div class="inner">
                <div></div>
                <div></div> 
                <div></div>
                <div></div>
            </div> 
        </div>
        <header class="navbar-section">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                         <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ak-logo.png" class="logo"  alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- <ul class="navbar-nav ml-auto align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="#HOME">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#ABOUTUS">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#SERVICES">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">Our Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link login-btn" href="#contact"><span>Login</span></a>
                            </li>
                        </ul> -->

                       <?php
                            $defaults = array(
                                'theme_location'  => 'primary-menu',
                                'menu'            => 'Main-Menu',
                                'container'       => 'ul',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'nav-item',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul class="navbar-nav ml-auto align-items-center">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => ''
                            );
                            wp_nav_menu( $defaults );
                        ?>

                    </div> 
                </div>
            </nav>
        </header>


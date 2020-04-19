<?php get_header(); ?>
<?php echo the_content(); ?>


<?php $hero_section = get_field('hero_section'); ?>  
<!-----------------BANNER SECTION START----------------->
        <section class="banner-section" id="HOME">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="baner-content">
                        <div class="banner">
                            <h1 class="banner-heading"><?php echo $hero_section['banner_heading']; ?></h1>
                            <p class="banner-content"><?php echo $hero_section['banner_content']; ?></p>
                            <a class="banner-btn" href="#"><?php echo $hero_section['banner_button']; ?></a>
                        </div></div>

                    </div>
                    <div class="col-lg-4 col-md-2"></div>
                </div>  
            </div>
        </section>
        
        <!-------------------BANNER SECTION END------------------->

        <!-----------------ABOUT US SECTION START----------------->

        <?php $about_us = get_field('about_us'); ?>

        <section class="aboutus-section" id="ABOUTUS">
            <span class="background-content wow fadeInLeft"><?php echo $about_us['about_background_heading']; ?></span>
            <div class="text-center wow fadeInDown">
                <h6 class="company"><?php echo $about_us['about_heading']; ?></h6>
                <h3 class="company-heading"><?php echo $about_us['about_company']; ?><span class="text-color-primary"><?php echo $about_us['about_success']; ?></span></h3>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="modern-number text-center wow fadeInLeft">
                            <h2 class="heading-about">
                                <span class="mark-text"><?php echo $about_us['mark_text']; ?></span>
                                <?php echo $about_us['experience_it']; ?></h2>
                            <h6 class="success"><?php echo $about_us['sucess']; ?></h6>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-us wow fadeInRight">
                            <div class="about-content"><?php echo $about_us['about_content']; ?></div>
                            <div class="button-text">
                                <a href="#" class="btn-text">
                                    <?php echo $about_us['about_button']; ?>
                                    <span class="button-icon ml-1">
                                    <i class="fa fa-long-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <!-----------------ABOUT US SECTION END----------------->
        
       
       
        <!-----------------SERVICES SECTION START----------------->

        <?php $services_section = get_field('services_section'); ?>

        <section id="SERVICES" class="service-section">
            <span class="services-heading"><?php echo $services_section['service_heading']; ?></span>
            <div class="service bg-gray pb-5">
                <div class="container">
                  <div class="row">
                    <div class="section-head col-sm-12 wow fadeInDown">
                      <!-- <h4 class="wow bounceInUp"><span>Why Choose</span> Me?</h4> -->
                        <div class="services text-center ">
                            <h2 class="heading"><?php echo $services_section['services_heading']; ?><br>
                                <span class="text-color-primary"> 
                                    <?php echo $services_section['it_services']; ?>
                                </span>
                            </h2>
                            <div class="brand_border text-center">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fa fa-handshake-o"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </div>
                        </div>
                      <p class="servicess-content wow bounceInLeft"><?php echo $services_section['services_content']; ?></p>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item wow bounceInUp"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
                        <h6><?php echo $services_section['modern_design']; ?></h6>
                        <p><?php echo $services_section['modern_content']; ?></p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item wow bounceInUp"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
                        <h6><?php echo $services_section['modern_design']; ?></h6>
                        <p><?php echo $services_section['modern_content']; ?></p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item wow bounceInUp"> <span class="icon feature_box_col_three"><i class="fa fa-mobile"></i></span>
                       <h6><?php echo $services_section['modern_design']; ?></h6>
                        <p><?php echo $services_section['modern_content']; ?></p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item wow bounceInUp"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
                        <h6><?php echo $services_section['modern_design']; ?></h6>
                        <p><?php echo $services_section['modern_content']; ?></p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item wow bounceInUp"> <span class="icon feature_box_col_five"><i class="fa fa-laptop"></i></span>
                        <!-- <h6>Responsive Design</h6> -->
                        <h6><?php echo $services_section['modern_design']; ?></h6>
                        <p><?php echo $services_section['modern_content']; ?></p>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                      <div class="item wow bounceInUp"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
                        <h6><?php echo $services_section['modern_design']; ?></h6>
                        <p><?php echo $services_section['modern_content']; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>            
        </section>

        <!----------------------SERVICES SECTION END----------------->

        <!-----------------WORKPROCESS SECTION START----------------->

        <?php $workprocess = get_field('workprocess'); ?>


        <section class="process-section pt-100 pb-70 working-process">
            <span></span>
            <div class="container">
                    <div class="working-section-title wow bounceInDown">
                        <span class="our-working"><?php echo $workprocess['our_working_process'] ?></span>
                        <h3 class="software-testing"><?php echo $workprocess['software_working_process']; ?></h3>
                    </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="process-item wow fadeInLeft">
                            <div class="process-image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/planning.png" class="img-fluid work" alt="process">
                            </div>
                            <div class="process-content">
                                <h3><?php echo $workprocess['planning']; ?></h3>
                                <p><?php  echo $workprocess['planning_content']; ?></p>
                                <div class="process-btn">
                                    <a href="#" class="process-button">
                                        <?php echo $workprocess['planning_button']; ?>
                                        <span class="button-icon ml-1">
                                        <i class="fa fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="process-item">
                            <div class="process-image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/design.png" class="img-fluid work" alt="process">
                            </div>
                            <div class="process-content">
                                <h3><?php echo $workprocess['designing']; ?></h3>
                                <p><?php echo $workprocess['designing_content']; ?></p>
                                <div class="process-btn">
                                    <a href="#" class="process-button">
                                        <?php echo $workprocess['planning_button']; ?>
                                        <span class="button-icon ml-1">
                                        <i class="fa fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="process-item wow fadeInRight">
                            <div class="process-image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/analytics.png" class="img-fluid work" alt="process">
                            </div>
                            <div class="process-content">
                                <h3><?php echo $workprocess['analytics']; ?></h3>
                                <p><?php echo $workprocess['analytics_content']; ?></p>
                                <div class="process-btn">
                                    <a href="#" class="process-button">
                                        <?php echo $workprocess['planning_button']; ?>
                                        <span class="button-icon ml-1">
                                        <i class="fa fa-long-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-----------------WORKPROCESS SECTION START----------------->


        <?php $it_works = get_field('it_works'); ?>

        <section class="process-section">
            <span class="background-content-works"><?php echo $it_works['content_works']; ?></span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <div class="process-left">
                            <div class="process-title">
                                <h2 class="process wow fadeInDown"><?php echo $it_works['process']; ?></h2>
                            </div>
                        
                            <div class="process-left-content wow fadeInLeft">
                                <p><?php echo $it_works['process_content']; ?></p>
                                <div class="porcess-item">
                                    <div class="process-icon icon">
                                        <span>01</span>
                                    </div>
                                    <div class="process-text">
                                        <h3>Enter Your Details</h3>
                                        <p><i class="fa fa-check"></i> lorem ipsum dolor site amet,consectetur adipsicing</p>
                                        <p><i class="fa fa-check"></i> Consectetur adipsisicing elit,sed.</p>
                                        <p><i class="fa fa-check"></i> Sed do eiusmod tempor incididunt ut labore</p>
                                        <p><i class="fa fa-check"></i> Et Dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                                <div class="porcess-item">
                                    <div class="process-icon icon">
                                        <span>02</span>
                                    </div>
                                    <div class="process-text">
                                        <h3>Enter Your Details</h3>
                                        <p><i class="fa fa-check"></i> lorem ipsum dolor site amet,consectetur adipsicing</p>
                                        <p><i class="fa fa-check"></i> Consectetur adipsisicing elit,sed.</p>
                                        <p><i class="fa fa-check"></i> Sed do eiusmod tempor incididunt ut labore</p>
                                        <p><i class="fa fa-check"></i> Et Dolore magna aliqua. Ut enim ad minim veniam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="process-right wow bounceInRight">
                            <div class="work-image-one">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/screen11.png" class="img-fluid works" alt="process1">
                            </div>
                            <div class="work-image-two">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-----------------WORKPROCESS SECTION END START----------------->


        <!--------------------TEAM SECTION START---------------------->
        <section id="team" class="team-section">
            <span class="background-content-experts">EXPERTS</span>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 pull-right">
                        <div class="team-section-text">
                            <div class="section-count">
                                <span class="wow fadeInDown">04</span>
                            </div>
                            <div class="section-text wow fadeInLeft">
                                <h2 class="section-title">Meet Our Experts</h2>
                                <p>Lorem ipsum dolor sit amet,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-7 col-sm-12">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="team-list">
                                    <ul class="team-members">
                                        <li class="wow zoomIn" data-wow-duration="1s" data-wow-delay=".1s">
                                            <a href="#team-1" data-team="team-1">
                                                <figure>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/teamsection.jpeg" class="img-fluid" alt="Team Member image One">
                                                </figure>
                                            </a>
                                        </li>
                                        <li class="active wow zoomIn" data-wow-duration="1s" data-wow-delay=".3s">
                                            <a href="#team-2" data-team="team-2">
                                                <figure>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/teamsection2.jpeg" class="img-fluid" alt="Team Member image two">
                                                </figure>
                                            </a>
                                        </li>
                                        <li class="wow zoomIn" data-wow-duration="1s" data-wow-delay=".5s">
                                            <a href="#team-3" data-team="team-3">
                                                <figure>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/teamsection3.jpeg" class="img-fluid" alt="Team Member image three">
                                                </figure>
                                            </a>
                                        </li>
                                        <li class="wow zoomIn" data-wow-duration="1s" data-wow-delay=".7s">
                                            <a href="#team-4" data-team="team-4">
                                                <figure>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/teamsection4.jpeg" class="img-fluid" alt="Team Member image four">
                                                </figure>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-8 members">
                                <div id="team-1" class="team-single">
                                    <div class="team-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/teamsection.jpeg" class="img-fluid" alt="">
                                        <div class="team-social">
                                            <ul>
                                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-info text-center">
                                        <h4>Andy Maray</h4>
                                        <p>Founder &amp; CEO</p>
                                    </div>
                                </div>    
                                <div id="team-2" class="team-single active">
                                    <div class="team-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/teamsection2.jpeg" class="img-fluid" alt="">
                                        <div class="team-social">
                                            <ul>
                                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-info text-center">
                                        <h4>Gustavo Souza</h4>
                                        <p>Naive Designer</p>
                                    </div>
                                </div>    
                                <div id="team-3" class="team-single">
                                    <div class="team-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/teamsection3.jpeg" class="img-fluid" alt="">
                                        <div class="team-social">
                                            <ul>
                                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-info text-center">
                                        <h4>Nikolaos Markopoulos</h4>
                                        <p>Developer</p>
                                    </div>
                                </div>
                                <div id="team-4" class="team-single">
                                    <div class="team-img">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/teamsection4.jpeg" class="img-fluid" alt="">
                                        <div class="team-social">
                                            <ul>
                                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-info text-center">
                                        <h4>Nur jaman</h4>
                                        <p>Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!--------------------------TEAM SECTION END---------------------------->

        <!-----------------------PORTFOLIO SECTION START----------------------->

        <section class="portfolio-section">
            <div class="container">
                <h1 class="our-projects-title">Our Projects</h1>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="nav justify-content-center wow fadeInUp" role="tablist" id="customersCats" >
                        <li class="nav-item">
                        <a class="nav-link active show" href="#featuredSection" id="featured" data-toggle="tab" role="tab" aria-controls="featuredSection" aria-selected="true">Feature</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#educationSection" id="education" data-toggle="tab" role="tab" aria-controls="educationSection" aria-selected="false">Education</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#healthSection" id="healthcare" data-toggle="tab" role="tab" aria-controls="healthSection" aria-selected="false">Healthcare</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#nonProfitSection" id="nonprofit" data-toggle="tab" role="tab" aria-controls="nonProfitSection" aria-selected="false">Non-Profit</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#privateSection" id="private" data-toggle="tab" role="tab" aria-controls="privateSection" aria-selected="false">Private Sector</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#publicSection" id="public" data-toggle="tab" role="tab" aria-controls="publicSection" aria-selected="false">Public Sector</a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tab-content" id="catsContent">
                            <div class="tab-pane fade show active" id="featuredSection" role="tabpanel" aria-labelledby="featured">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio1.jpg" alt="Portfolio Item" class="img-fluid portfolio"/>
                                    </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio2.jpg" alt="Portfolio Item" class="img-fluid portfolio" />
                                    </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio3.jpg" alt="Portfolio Item" class="img-fluid portfolio"/>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="educationSection" role="tabpanel" aria-labelledby="education">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio4.jpg" alt="Portfolio Item" class="img-fluid portfolio"/>
                                    </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio5.jpg" alt="Portfolio Item" class="img-fluid portfolio" />
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="healthSection" role="tabpanel" aria-labelledby="healthcare">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio3.jpg" alt="Portfolio Item" class="img-fluid portfolio"/>
                                    </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio1.jpg" alt="Portfolio Item" class="img-fluid portfolio"/>
                                    </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio2.jpg"  alt="Portfolio Item" class="img-fluid portfolio"/>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nonProfitSection" role="tabpanel" aria-labelledby="nonprofit">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio3.jpg" alt="Portfolio Item" class="img-fluid portfolio" />
                                    </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio4.jpg"  alt="Portfolio Item" class="img-fluid portfolio"/>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="privateSection" role="tabpanel" aria-labelledby="private">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio5.jpg"  alt="Portfolio Item" class="img-fluid portfolio"/>
                                    </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio2.jpg"  alt="Portfolio Item" class="img-fluid portfolio"/>
                                    </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                    <a href="#">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/portfolio1.jpg"  alt="Portfolio Item" class="img-fluid portfolio"/>
                                    </a>
                                    </div>            
                                </div>
                            </div>
                            <div class="tab-pane fade" id="publicSection" role="tabpanel" aria-labelledby="public">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                        <a href="#">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Exposure-1.jpg"  alt="Portfolio Item" class="img-fluid portfolio"/>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4" onclick="location.href='#'">
                                        <a href="#">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/04.jpg"  alt="Portfolio Item" class="img-fluid portfolio"/>
                                        </a>
                                    </div>            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-----------------------PORTFOLIO SECTION START--------------------------->

        <!----------------------TESTIMONIAL SECTION START-------------------------->
        
        <section id="testim" class="testim">
            <div class="wrap">
                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                <ul id="testim-dots" class="dots">
                    <li class="dot active"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                </ul>
                <div id="testim-content" class="cont">   
                    <div class="active">
                        <div class="img"><img src="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg" alt=""></div>
                        <h2>Lorem P. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>
                    <div>
                        <div class="img"><img src="https://image.ibb.co/cNP817/pexels_photo_220453.jpg" alt=""></div>
                        <h2>Mr. Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>
                    <div>
                        <div class="img"><img src="https://image.ibb.co/iN3qES/pexels_photo_324658.jpg" alt=""></div>
                        <h2>Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>
                    <div>
                        <div class="img"><img src="https://image.ibb.co/kL6AES/Top_SA_Nicky_Oppenheimer.jpg" alt=""></div>
                        <h2>Lorem De Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>
                    <div>
                        <div class="img"><img src="https://image.ibb.co/gUPag7/image.jpg" alt=""></div>
                        <h2>Ms. Lorem R. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                </div>
            </div>
        </section>


        <!------------------TESTIMONIAL SECTION END-------------------------->

        <!------------------CONTACT US SECTION START-------------------------->

        <section class="contact" id="contact">
            <div class="container">
                <div class="heading wow fadeInDown">
                    <h2>Contact
                        <span> Us </span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        <br>incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="row">
                    <div class="col-md-5  wow bounceInLeft">
                        <div class="title">
                            <h3>Contact detail</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                        </div>
                        <div class="content">
                            <div class="info">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <h4 class="d-inline-block">PHONE :
                                    <br>
                                    <span>+12457836913 , +12457836913</span></h4>
                            </div>
                            <div class="info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h4 class="d-inline-block">EMAIL :
                                    <br>
                                    <span>example@gmail.com</span></h4>
                            </div>
                            <div class="info">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h4 class="d-inline-block">ADDRESS :<br>
                                    <span>8B Vijay Tower,  789, Mohali</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-inputs wow bounceInRight">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control message" rows="5" id="comment" placeholder="Message"></textarea>
                                </div>
                                <button class="btn btn-block" type="submit">Send Now!</button>
                                <!-- <button type="button" class="btn btn-primary">Send Now!</button> -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!------------------CONTACT US SECTION END-------------------------->

<?php get_footer(); ?>
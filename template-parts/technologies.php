<?php

/**
 * The template for displaying the technologies page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * Template Name: Technologies Template 
 * @package jitutheme
 */

get_header();

?>
<!-- BANNER -->
<section>
    <div class="container-fluid banner d-flex align-items-center tech-pg-banner" id="banner_height">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-12 col-md-8 col-lg-6">
                    <h1 class="banner_h1">
                        <span class="redtext">THE Jitu </span>Technologies 
                    </h1>
                    <p class="banner_p">
                        At THE Jitu, we offer comprehensive suite of services that helps your organization reduce costs, increase productivity, and gain access to top-notch talent. We take pride in offering customized and personalized solutions that cater to the unique needs of each company we work with.
                    </p>
                    <div class="row">
                        <span class="col-12 col-sm-auto mb-5">
                            <a href ="<?php echo site_url('/technology-services');?>" class="button-clear">
                                Technology Services
                            </a>
                        </span>
                        <span class="col-12 col-sm-auto">
                            <a href ="<?php echo site_url('/processes');?>" class="col-12 col-sm-auto primary-button">
                                Our Processes
                            </a>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- About us section start -->

<section class="tech-about" style="background-color: #FCF4F4">
    <div class="container">
        <div class="row  col-rev tech-p-about">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div>
                    <p >THE Jitu is an IT Staff augmentation firm that offers scalable remote software engineers to businesses. Our engineers are recent computer science graduates and the entire team in Nyeri, Kenya is led on-site by American executives .
                        Our purpose is to provide staff augmentation that enables businesses to scale their IT workforce and avoid costly onboarding and common pitfalls offshore IT services often bring.
                        We provide staff in various fields - Designers, Business and Data Analysts, Software Developers, Project Managers, and Customer Support - to guarantee business success.
                    </p>
                    <a href="<?php echo __(site_url('/about-us'))?>" class="primary-button btn">About us</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="<?php echo    __(get_template_directory_uri())?>/assets/img/abou-us-sm.jpg" alt="Staff Augumentation Company" class="img-thumbnail attachmentimg">
            </div>
        </div>
    </div>
</section>
<!-- About us section end -->



<section class="bg-white tech-careers">
    <div class="container">
        <div class="row tech-p-careers">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="<?php echo    __(get_template_directory_uri())?>/assets/img/carrers-sm.jpg" alt="Staff Augumentation Company" class="img-thumbnail attachmentimg">
            </div>
            <div class="col-lg-6 col-sm-12 col-md-12">
                <p>
                    As we grow our team to offer the best services, we are seeking new talent to join us.
                    Interested in joining THE Jitu? Check out our open positions and apply today. We can't wait to have you onboard.
                </p>
                <a href="<?php echo site_url('/careers') ?>" class="primary-button btn">View Open Positions</a>
            </div>
        </div>
    </div>
</section>

<!-- THH Family start -->
<?php get_template_part('template-parts/thh-family');?>
<!-- THH Family section end -->


<!-- CONTACT US -->
<section class="section jitucontact" id="contact_section">
    <div class="mt-5 pb-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6 col-sm-12">
                    <h2 class="redtext text-uppercase">Let's Discuss Your<br /> Next Project</h2>
                    <p class="contact-content">
                        Fill out the form or call us to set up a meeting. We’ll be happy to discuss your staffing needs in detail, provide estimates, and answer all your questions.
                    </p>
                    <span class="">
                        <i class="ri-phone-fill"></i> (+254) 710 453 693
                    </span>
                </div>
                <div class="col">
                    <?php echo do_shortcode('[wpforms id="7"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_sidebar();
get_footer();

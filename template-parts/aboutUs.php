<?php

/**
 * The template for displaying the about us page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 *  Template Name: About Us 
 * @package jitutheme
 */

get_header();

?>

<!-- BANNER -->
<section>
    <div class="container-fluid aboutUsBanner d-flex align-items-center" style="height:98vh">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <h1 class="banner_h1">Scale Your IT Workforce <br> with <span class="redtext">THE Jitu </span></h1>
                   <div>
                   <p>  A Cost-Effective staff
                        Augmentation Solution</p> 
                   </div>
                </div>
                <div>
                    <a href="<?php echo site_url('/contact-us');?>" class="home-btn btn primary-button">Contact Us Today</a>      
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHO WE ARE -->
<section class="mb-5">
   <div class="container-fluid  mb-5">
    <div class="container text-center mt-5 ">
                <div class="who-we-are">
                        <h1 class="redtext">Who We Are</h1>
                    <h6 class="mt-5" style="font-size:24px;"><b>
                        THE Jitu is an IT Staff augmentation firm that offers scalable remote software engineers to
                            businesses. Our engineers are recent computer science graduates and the entire team in
                            Nyeri, Kenya is led on-site by American executives .</b>
                        </h6>
                    <div class="mt-5 mb-5" >
                        <p>Our purpose is to provide staff augmentation that enables businesses to scale their IT workforce and avoid 
                            costly onboarding and common pitfalls offshore IT services often bring.</p>

                        <p class="mb-5">We provide staff in various fields - Designers, Business and Data Analysts, Software Developers, Project 
                            Managers, and Customer Support - to guarantee business success.</p>
                    </div>  
                </div>      
   
        </div>
   </div>
</section>

<!-- OUR PROGRESS  section-->
<div  class="container-fluid" id="our-progress">
<section class="mt-5" id="image-section">
    <div class="row container justify-content-center" style="margin:auto;">
            <!-- grid -->
            <div class="col" id="grid-images">
                <div class="row">
                    <div id="first-row" >
                        <div class="col-sm-3 col-md-6 mb-5 ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/DSC_0965.webp" alt="" class="rounded" id="pro-images">
                        </div>
                        <div class="col-sm-9 col-md-6 mb-5 ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/20230331_170542.webp" alt="" class="rounded" id="pro-images">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div id="second-row">
                        <div class="col-sm-3 col-md-6 mb-5 ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/DSC_0884.webp" alt="" class="rounded" id="pro-images">
                        </div>
                        <div class="col-sm-9 col-md-6 mb-5 ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/DSC_1016.webp" alt="" class="rounded" id="pro-images">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div id="third-row">
                        <div class="col-sm-3 col-md-6 mb-3 ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/20230331_174953.webp" alt="" class="rounded" id="pro-images">
                        </div>
                        <div class="col-sm-9 col-md-6 mb-3 ">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/DSC_0076.webp" alt="" class="rounded" id="pro-images">
                        </div>
                    </div>
                </div>

            </div>


            <div class="col col-sm-9 col-md-6 progress-text text-black p-3">
                <div class="">
                    <h2 class="redtext mt-5">Our Progress</h2>
                    <p >A permanent US executive team based in Nyeri,
                        Kenya provides leadership and deep subject
                        matter expertise in technology and business
                        operations.</p>
                    <p class="mb-5">We were founded by THH-LLC, a
                        technology-focused holding company in Atlanta,
                        GA with clients ranging from start-ups to global
                        enterprises. One of our objectives has been to
                        make a difference in the Silicon Savanna
                        software industry. In this regard, we have
                        managed to enter into partnerships within the
                        tech community in Kenya and rapidly grow our
                        software development team.</p>
                   <a href="<?php echo site_url('/Technology-services');?>" class="btn  primary-button">EXPLORE OUR TECHNOLOGY SERVICES</a>
                </div>
            </div>
        </div>
   </div>

</section>


<!-- THH FAMILY -->
<?php get_template_part('template-parts/thh-family'); ?>


<!-- HEAR FROM EMPLOYEES -->
<?php get_template_part( 'template-parts/testimonials' ); ?>



<?php
get_sidebar();
get_footer();

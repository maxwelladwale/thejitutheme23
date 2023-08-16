<?php

/**
 * The template for displaying the training page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 *  Template Name: training
 * @package jitutheme
 */

get_header();

?>
<!-- BANNER -->
<section class="bannertraining" id="bannertraining" style="height: 98vh;">
    <div class="container-fluid trainingbanner d-flex align-items-center" style="height:100%">
        <div class="container">
            <div class="row align-items-end landing">
                <div class="col-sm-12 col-lg-6 col-md-6 landingHeader" style="text-align: right;">
                    <h1> <span class="redtext">Training </span> </h1>
                    <p style="font-size: 20px;">
                        An intensive and immersive <br> 3-month programs
                    </p>
                    <a href="#calendar" class="button btn" id="trainingbtn">View Our Upcoming <br> Program Calendar</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MID NAV -->
<section class="section pb-5 trainingContent" style="margin: 0px !important;">
    <div class="container">
         <p class="threetraining">
            Our three-month training program is designed to provide an intensive and immersive learning experience. The program is taught by experienced instructors who have a deep understanding of these technologies and have been working in the industry for many years. We believe in a hands-on approach to learning, so you will have plenty of opportunities to practice your skills and work on real-world projects.
        </p>


        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-sm-12 trainingInvesting">

                <div class="row align-items-start ">
                    <div class="col">
                        <h4 class="training-desc">
                            <p class="trainingp1">
                                We believe in investing in our trainees and giving them the support they need to succeed after they complete our training program. Many of our graduates are placed into software development roles with our company after completing our training program. We are proud to have a talented team of developers who are passionate about what they do, and we are committed to fostering a culture of collaboration and innovation.
                            </p>
                        </h4>
                        <p class="training-desc trainingp2">
                            If you are ready to take the next step in your career and become a full stack web developer, we invite you to join our training program.
                        </p>
                        
                            <a href="<?php echo site_url('/contact-us');?>" class="trainingcont primary-button" >Contact Us Today</a>
                            
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 trainingimag1">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/trainingses.webp" class=" trainingImg" alt="">
            </div>
        </div>
    </div>
</section>

<div class="box-shadow training"></div>

<!-- What we teach section -->
<section class="teach">
    <div class="">
        <div class="container">
            <div class="row py-5 text-center">
                <div class="col-12 d-flex flex-column align-items-center">
                    <h4 class="redtext">WHAT WE TEACH</h4>
                    <h4 class="py-3 col-lg-6 col-sm-12" style="font-size: 25px; color: #595b61;">
                        In order to ensure that our resources are competitive in the market, we teach market-based technologies and professional skills.
                    </h4>
                </div>

                <div class="container trainingCon">
                    <div class="row justify-content-center row-cols-2 row-cols-lg-5 g-5 g-lg-3 trainingStacks">
                        <div class="col">
                            <div class="stackIcon">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/React-icon.svg.webp" class="img-thumbnail icon" alt="">
                            </div>
                            <div class="stack">
                                <p style="font-size: 20px;">React/Node Express JS</p>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/AngularJS-Icon.webp" class="img-thumbnail icon" alt="">
                            </div>
                            <div class="stack">
                                <p style="font-size: 20px;">Angular/Node Express JS</p>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/wordpress.webp" class="img-thumbnail icon" alt="">
                            </div>
                            <div class="stack">
                                <p style="font-size: 20px;">Wordpress</p>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/NET_logo.webp" class="img-thumbnail icon" alt="">
                            </div>
                            <div class="stack">
                                <p style="font-size: 20px;">.NET</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="d-flex flex-column gap-20px" style="padding-top:25px; color: #595b61;">
                            <div class="justify-content-center checkdiv1 rightIcon" style="height:50px">
                                <img class="plus check1" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-solid.svg" class="img-thumbnail " alt="" style="margin-bottom: 10px; margin-right: 10px; margin-left: 24px;">
                                <p class="checkp3" style="font-size: 20px;">
                                    Competitive market rates and affordable resources
                                </p>
                            </div>

                            <div class="justify-content-center checkdiv2 rightIcon" style="height:42px">
                                <img class="plus check2" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-solid.svg" class="img-thumbnail" alt="" style="margin-bottom: 10px; margin-right: 10px" ;>
                                <p class="checkp1" style="font-size: 20px;">
                                    Effective communication and professional skills
                                </p>
                            </div>
                            <div class="d-flex justify-content-center checkdiv3 rightIcon" style="height:54px">
                                <div>
                                    <img class="plus check3" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-solid.svg" class="img-thumbnail" alt="" style="margin-bottom: 10px; margin-right: 10px; margin-left: 58px;">
                                </div>
                                <div>
                                    <div>
                                        <p class="checkp2" style="font-size: 20px;">
                                            Resources with the ability to learn, unlearn and relearn
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our program calendar -->
<section class="calender pb-5 py-5 " id ="calendar">
    <div class="calenderdiv"></div>
    <div class="bg-program">
        <div class="mt-5 mb-5">  
                    <div class="row align-items-end progCalendar">
                        <div class="col">
                            <h4 style="font-size:35px;"class="redtext calProg">Our Program Calendar</h4>
                            <p class="programContent">
                                During our three-month training program, cohort trainees are equipped with quality resources and achieve global standard results in a competitive environment.
                            </p>
                        </div>
                    </div>
                    <a href="" class="button programBtn">VIEW PROGRAM DATES</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Attachments -->
<section class=" pb-5 py-5 program">
    <div class="container programcon">
        <div class="row mt-5 mb-5 " style="margin-left: 0 !important; margin-right: 0 !important;" >
            <div class="col-lg-6 col-md-12 col-sm-12 trainingImg2">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/attachmentimg.webp" class="img-thumbnail attachmentimg" alt="">
            </div>

            <div class="col-lg-6 col-md-12  col-sm-12 d-flex flex-column justify-content-center">

                <div class="row align-items-start ">
                    <div>
                        <h4 style="font-size:35px;" class="redtext prog1">Attachments</h4>

                        <p class="attchmentContent">
                            Our attachment training program focuses on full stack web development using Angular and React. These are two of the most popular and powerful web development frameworks used by top companies all over the world. Our comprehensive curriculum covers everything you need to know to become a proficient full stack developer, from front-end design to back-end architecture and everything in between.
                        </p>
                    </div>
                    <a href="" class="button attachmentbtn">VIEW PROGRAM DATES</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<?php get_template_part( 'template-parts/testimonials' ); ?>


<?php
get_sidebar();
get_footer();

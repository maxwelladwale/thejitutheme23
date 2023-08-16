<?php

/**
 * The template for displaying the home page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 *  Template Name: Contact-us 
 * @package jitutheme
 */

get_header();

?>

<!-- <section class="contact_banner">
    <div class="bbanner">
        <h1> Contact us</h1>
    </div>
</section> -->
<section style="box-shadow: 0px 6px 9px 5px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid banner d-flex align-items-center banns" id="ct_banner_height">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-sm-12 col-lg-8 col-md-8 bannerDiv" >
                    <h1 class="banner_h1">Connect, Communicate, <span class="redtext">Collaborate!</span></h1>
                    <p class="banner_p">
                    Whether you have a question, feedback, or simply want to say hello, we're excited to hear from you and assist you in any way we can.
                    </p>
                    <a href="#contactForm" class="home-btn primary-button">Contact Us Today</a>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>
</section>
<div class="box-shadow"></div>

<section>
    <div class="container pt-5" id ="contactForm" style="padding-bottom: 50px; margin-top: 70px;">
        <p> Simply fill out the form below with your details and message, and we'll get back to you as soon as possible.</p>
        <?php echo do_shortcode('[wpforms id="51"]');?>
    </div>
</section>
<!-- <section class="contact-frm">
    <div class="container">
        <div class="row con_form">
            <div class="col-lg-6 col-md-12 cont_text">
                <h1>We'd Love to Hear from You</h1>
                <p>
                    We're here to make it easy for you to get in touch with us. Whether you have a question, need assistance, or want to share your thoughts, our friendly team is just a message away. Reach out to us today and let's start a conversation!
                </p>
                <div class="contact-icons">
                    <p><i class="fa-solid fa-phone"></i> <a href="tel:+254710453693" class="contactlink">(+254) 710 453 693</a> </p>
                    <p><i class="fa-solid fa-envelope"></i> <a href="mailto:hello@thejitu.com" class="contactlink">hello@thejitu.com</a></p>
                    <p><i class="fa-solid fa-location-dot"></i> P.O Box 1126-10100 Nyeri, Kenya</p>
                    <p><i class="fa-solid fa-building"></i>  Kimathi Way, KDS Centre, 2nd Floor Nyeri Town, Kenya</p>
                    <p><i class="fa-solid fa-building"></i>  Naivas Building, Nyeri Mall, 2nd Floor Gakere Rd, Nyeri</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                
            </div>
        </div>
        
    </div>
</section> -->

<?php
get_footer();

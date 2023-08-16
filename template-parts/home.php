<?php

/**
 * The template for displaying the home page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 *  Template Name: home 
 * @package jitutheme
 */

get_header();

?>
<!-- BANNER -->
<section style="box-shadow: 0px 6px 9px 5px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid banner d-flex align-items-center banns" id="banner_height">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-sm-12 col-lg-8 col-md-8 bannerDiv">
                    <h1 class="banner_h1">Augment your team, <span class="redtext">accelerate your successes!</span></h1>
                    <p class="banner_p">
                        In addition to helping your organization reduce cost, increase productivity, and hire top talent, we offer a comprehensive suite of services. Our mission is to offer customized and personalized solutions that cater to the unique needs of each company we work with. Whether you need front-end or back-end services, technology solutions, or all three, we are here to help.
                    </p>
                    <a href="#home-contact-form" class="home-btn primary-button">Contact Us Today</a>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>
</section>

<div class="box-shadow"></div>

<!-- MID NAV -->
<section class="section pb-5 services servicessect" id="our_services">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h3 class="redtext">Our Services</h3>
                <p class="mt-3 services-contents"> Aside from providing extra talent in Front Office and Back Office services, we provide a training program to empower young Kenyan software developers.</p>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">

                <!--Card Begin-->
                <a href="<?php echo site_url('/technology-services');?>">
                    <div class="card mb-3 midnav">
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <!-- <i class="ri-cpu-line"></i>  -->
                                <img id="services-img" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/technology.png" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">Technology</h5>
                                    <p class="card-text">Streamline your operations, reduce costs, and increase efficiency with our IT Services Solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!--Card End-->

                <!--Card Begin-->
                <a href="<?php echo site_url('/bpo');?>">
                    <div class="card mb-3 midnav">
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <!-- <i class="ri-bar-chart-grouped-fill"></i> -->
                                <img id="services-img" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/outsourcing.png" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">BPO (Business Process Outsourcing)</h5>
                                    <p class="card-text">Our BPO services improve customer service and increase efficiency in customer-facing operations. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!--Card End-->

                <!--Card Begin-->
                <a href="<?php echo site_url('/training');?>">
                    <div class="card mb-3 midnav">
                        <div class="row">
                            <div class="col-md-2 d-flex align-items-center justify-content-center">
                                <!-- <i class="ri-graduation-cap-line"></i>  -->
                                <img id="services-img" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/train.png" class="img-thumbnail" alt="">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h5 class="card-title">TRAINING</h5>
                                    <p class="card-text">By working in a fully-fledged software company, young software developers in Kenya can gain invaluable experience. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <!--Card End-->

            </div>
        </div>
    </div>
</section>

<!-- WHY THE JITU -->
<div class="box">
    <div class="bbox">
    
    </div>
</div>

<!-- TRIAL -->
<section class="section whyjitusect" id="jitu_why">
    <div class="why_jtu">
        <div class="container-fluid">
            <div class="row">
                <div class="whyjtu col-sm-12 col-lg-6 d-flex flex-column align-items-start justify-content-start">
                    <img id="why_jtuimg" src="<?php  echo get_template_directory_uri()?>/assets/img/jeremy.jpg" alt="jitu employee">
                </div>
                <div class=" whyjtu col-sm-12 col-lg-6 d-flex flex-column align-items-start justify-content-start ps-5">
                    <div class="akordion-header">
                        <h3>WHY THE JITU</h3>
                    </div>
                    <!-- Accordion 1 -->
                    <div class="aks-accordion" itemscope itemtype="https://schema.org/FAQPage" data-accordion="">
                            <div class="aks-accordion-row">
                            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                                <div class="aks-accordion-item-row">
                                <div class="aks-accordion-item-icon">
                                    <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
                                    <path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                                    v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" /></svg>
                                    <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
                                    <path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" /></svg>

                                </div>
                                <div class="aks-accordion-item-title">
                                    <h5 itemprop="name">SCALABLE AND COMMITED STAFF</h5>
                                </div>
                                </div>
                                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                                <p itemprop="text">Scalability is essential to meet fluctuating IT demands. THE Jitu brings curated, uniquely trained software engineers who are 100% committed solely to your company.
                                </p>
                                </div>

                            </div>

                            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                                <div class="aks-accordion-item-row">
                                <div class="aks-accordion-item-icon">
                                    <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
                                    <path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                                    v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" /></svg>
                                    <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
                                    <path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" /></svg>

                                </div>
                                <div class="aks-accordion-item-title">
                                    <h5 itemprop="name">ADVANCED TRAINING AND CERTIFICATION</h5>
                                </div>
                                </div>
                                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                                <p itemprop="text">THE Jitu hires only the best and brightest individuals who have earned degrees from top technical and business schools. These highly qualified individuals then participate in a rigorous training and evaluation program, which lasts either one or three months, depending on their specific role within the company.
                                </p>
                                </div>

                            </div>

                            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                                <div class="aks-accordion-item-row">
                                <div class="aks-accordion-item-icon">
                                    <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
                                    <path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                                    v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" /></svg>
                                    <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
                                    <path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" /></svg>

                                </div>
                                <div class="aks-accordion-item-title">
                                    <h5 itemprop="name">KENYAN BASED US EXECUTIVES</h5>
                                </div>
                                </div>
                                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                                <p itemprop="text">THE Jitu employs US executives located in Kenya to help identify top African talent and organize flexible programs for changing business needs.
                                </p>
                                </div>

                            </div>

                            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                                <div class="aks-accordion-item-row">
                                <div class="aks-accordion-item-icon">
                                    <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
                                    <path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                                    v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" /></svg>
                                    <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
                                    <path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" /></svg>

                                </div>
                                <div class="aks-accordion-item-title">
                                    <h5 itemprop="name">TRANSPARENT AND COST-EFFECTIVE</h5>
                                </div>
                                </div>
                                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                                <p itemprop="text">THE Jitu alleviates exorbitant costs for permanent employees by providing simple 12-month contracts with transparent and fixed monthly pricing.
                                </p>
                                </div>

                            </div>

                            <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                                <div class="aks-accordion-item-row">
                                <div class="aks-accordion-item-icon">
                                    <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
                                    <path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                                    v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" /></svg>
                                    <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
                                    <path d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" /></svg>

                                </div>
                                <div class="aks-accordion-item-title">
                                    <h5 itemprop="name">THH FAMILY</h5>
                                </div>
                                </div>
                                <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" data-accordion-content="">
                                <p itemprop="text">THE Jitu collaborates with diverse partners and clients, fostering long-term relationships and providing exceptional service and support.
                                </p>
                                </div>

                            </div>

                            </div>

                    </div>

                    <a href="#home-contact-form" class="akordionbtn primary-button">Contact Us Today</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TRIAL -->

<!-- THH FAMILY -->
<section class="section why-jitu">
    <div class="container-fluid mt-5 mb-5">
        <div class="container text-center ">
            <h3 class="text-uppercase we-are-h3">We are part of the THH-LLC <br> technology family</h3>
            <p class="part-of-thh-p">
            THE Jitu brings dedicated remote software engineers from Kenya to the world, providing reliability and adaptability across business challenges to empower IT teams.
            </p>
        </div>
    </div>

    <div class="container">
        <section class="customer-logos slider">
            <div class="slide">
                <a href="https://acquiretek.com/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/AcquireTek.png"></a>                
            </div>
            <div class="slide">
                <a href="https://www.carveos.com/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/CarveOS.png"></a>
            </div>
            <div class="slide">
                <a href="https://www.eclipsereality.com/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/Eclipse Reality logo.png"></a>
            </div>
            <div class="slide">
                <a href="https://griffinsolutionsgroup.com/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/Griffin Solutions Group.png"></a>
            </div>
            <div class="slide">
                <a href="https://www.k2-data.com/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/k2-data-logo-large.png"></a>
            </div>
            <div class="slide">
                <a href="https://acquiretek.com/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/AcquireTek.png"></a>
            </div>
            <div class="slide">
                <a href="https://www.carveos.com/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/CarveOS.png"></a>
            </div>
            <div class="slide">
                <a href="https://www.eclipsereality.com/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/Eclipse Reality logo.png"></a>
            </div>
            <div class="slide">
                <a href="https://griffinsolutionsgroup.com/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/Griffin Solutions Group.png"></a>
            </div>
            <div class="slide">
                <a href="https://www.k2-data.com/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/familylogos/k2-data-logo-large.png"></a>
            </div>

        </section>
    </div>
</section>

<!-- TESTIMONIALS -->
<?php get_template_part( 'template-parts/testimonials' ); ?>

<!-- CONTACT US -->
<section class="section jitucontact home-jitucontact">
    <div class="mt-5 pb-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-6 col-sm-12">
                    <h2 class="redtext text-uppercase">Let's Discuss Your<br /> Next Project</h2>
                    <p class="contact-content" id="home-contact-form">
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

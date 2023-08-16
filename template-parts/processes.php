<?php

/**
 * The template for displaying the processes page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 *  Template Name: processes
 * @package jitutheme
 */

get_header();

?>

<style>
    .process-banner {
        background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/processBanner.jpg'), linear-gradient(100deg, #111 20%, #777777 80%);
        background-size: cover;
        background-position-y: 4rem;
        
    }
</style>

<!-- BANNER -->
<section>
    <div class="container-fluid banner process-banns process-banner d-flex align-items-center" id="banner_height">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-12 col-md-8 col-lg-6">
                    <h1 class="text-white career-section-title">
                        Delivering <span class="redtext">exceptional services </span> that meet the needs of our clients.
                    </h1>
                    <p class="banner-content text-white">
                        By utilizing multi-country processes, we provide our clients with faster turnaround times, greater flexibility, better quality, and cost savings.
                    </p>
                    <div class="row">
                        <span class="col-12 col-sm-auto mb-5">
                            <a href="#sldc_processes" class="button-clear">
                                Our SDLC Processes
                            </a>
                        </span>
                        <span class="col-12 col-sm-auto">
                            <a href="#contact_section" class="col-12 col-sm-auto primary-button">
                                CONTACT US TODAY
                            </a>
                        </span>
                    </div>
                </div>
                <!-- <div class="col">

                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- MID NAV -->
<section class="section pb-5 multi-country-processes">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-6 col-md-12 col-sm-12 world">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/maps.png" class="img-thumbnail world-map" alt="">

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">

                <!--country proceses section-->
                <div class="row align-items-start">
                    <div class="col multi-country">
                        <h1 class="redtext country">Multi-Country Processes</h1>
                        <h4 class="country-desc">
                            <span class="redtext">We pride ourselves on being a truly global organization.</span> With teams located in both the United States and Kenya, we can offer our clients the benefits of multi-country processes.
                        </h4>
                        <p class="country-content">
                            Our teams in both countries are highly skilled and experienced in web development, and work in their own time zones to ensure maximum efficiency and client satisfaction. This means that we can offer 24/7 support to our clients, regardless of where they are located.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- benefits to clients section -->
<section>
    <div class="testimonial mb-5">
        <div class="container">
            <div class="row py-5 text-center">
                <div class="col-12 d-flex flex-column align-items-center sm-flex-column">
                    <h2 class="redtext header_text">Our multi-country processes offer several benefits to our clients, including:</h2>
                </div>

                <div class="row mt-5 mb-5 muliple_processes">
                    <div class="col-md-6 processTab col-sm-12">

                        <!-- Tabs -->
                        <div class="tbs d-flex align-items-start">
                            <div class="nav flex-column me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <p class="nav-tabs nav-link tabbs active special" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Faster Turnaround Times
                                </p>
                                <hr>
                                <p class="nav-tabs nav-link tabbs" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Greater flexibility
                                </p>
                                <hr>
                                <p class="nav-tabs nav-link tabbs" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Better quality
                                </p>
                                <hr>
                                <p class="nav-tabs nav-link tabbs" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Cost savings
                                </p>
                            </div>
                            <div class="tbs-content">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                        <p>With teams working in different time zones, we can complete projects faster than companies with only one location. This means that our clients can get their projects completed faster, without sacrificing quality</p>
                                        <a class="sdlc__contact_btn button" href="<?php echo site_url('/technology-services');?>">VIEW OUR SERVICES</a>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                        <p>Our multi-country processes mean we provide our clients with more flexibility in project timelines and scheduling. We can work around our clients' schedules, ensuring their projects are completed on time and within budget.</p>
                                        <a class="sdlc__contact_btn button" href="<?php echo site_url('/technology-services');?>">VIEW OUR SERVICES</a>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                                        <p>With teams in both the United States and Kenya, we offer our clients the benefits of diverse perspectives and expertise. This means that our clients receive higher-quality services that meet their specific needs.</p>
                                        <a class="sdlc__contact_btn button" href="<?php echo site_url('/technology-services');?>">VIEW OUR SERVICES</a>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                                        <p>By utilizing offshore teams, we offer our clients cost savings without sacrificing quality. This means that our clients receive high-quality web development services at a more affordable price.</p>
                                        <a class="sdlc__contact_btn button" href="<?php echo site_url('/technology-services');?>">VIEW OUR SERVICES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tabs -->
                    </div>
                </div>

                <!-- Start Accordions -->
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">

                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <p class="accordion-header" id="headingOne">
                                Faster turnaround times
                            </p>
                        </button>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>With teams working in different time zones, we can complete projects faster than companies with only one location. This means that our clients can get their projects completed faster, without sacrificing quality.</p>
                                <a class="sdlc__contact_btn button" href="<?php echo site_url('/technology-services'); ?>">VIEW OUR SERVICES</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <p class="accordion-header" id="headingTwo">
                                Greater flexibility
                            </p>
                        </button>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Our multi-country processes mean we provide our clients with more flexibilty in project timelines and scheduling. We can work around our clients' schedules, ensuring their projects are completed on time and within budget.</p>
                                <a class="sdlc__contact_btn button" href="<?php echo site_url('/technology-services'); ?>">VIEW OUR SERVICES</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p class="accordion-header" id="headingThree">
                                Better quality
                            </p>
                        </button>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>With teams in both the United States and Kenya, we offer our clients the benefits of diverse perspectives and expertise. This means that our clients receive higher-quality services that meet their specific needs.</p>
                                <a class="sdlc__contact_btn button" href="<?php echo site_url('/technology-services'); ?>">VIEW OUR SERVICES</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <p class="accordion-header" id="headingFour">
                                Cost savings
                            </p>
                        </button>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>By utilizing offshore teams, we offer our clients cost savings without sacrificing quality. This means that our clients receive high-quality web development services at a more affordable price.</p>
                                <a class="sdlc__contact_btn button" href="<?php echo site_url('/technology-services'); ?>">VIEW OUR SERVICES</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Accordions -->
            </div>
        </div>
    </div>
</section>

<!-- software development life-cycle -->

<section class=" section">
    <div class="container-fluid img-sdlc nml">
        <div class="bg-benefits">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/process__banner.jpg" class="img-thumbnail benefits-img" alt="">
        </div>
        <div class="sw_lifeCycle" id="sldc_processes">
            <p class="redtext subHeaderSDCL">Software Development Life Cycle</p>
            <h2 class="headerSDLC">
                THE Jitu specializes in providing exceptional web development services using our proven Software Development Lifecycle (SDLC) process.
            </h2>
            <p class="sw_subheading">
                We believe that effective software development requires a comprehensive approach that covers every stage of the project lifecycle, from planning to deployment.
            </p>
        </div>
    </div>
</section>

<section class="agile-process">
    <div class="container ">
        <div class="row mt-5 mb-5 sdlcprocesses">
            <div class="col-md-6 col-sm-12">
                <div class="sdlcprocess">
                    <h1 class="redtext sdlc">Our SDLC process consists of the following stages:</h1>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/sdlc-processes.png" class="img-thumbnail agile" alt="">

                    <p class="closing_p">By following our comprehensive SDLC process, we ensure that our clients receive high-quality web development services that are delivered on time and within budget. Let us utilize our experience and help you achieve your business goals through effective software development.</p>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 stages">

                <!--country proceses section-->
                <div class="row align-items-start ">
                    <div class="col">
                        <h5 class="redtext">Planning </h5>
                        <p class="sdlc_p" >We work closely with our clients to define their project goals and objectives. We analyze their requirements, establish project timelines and budgets, and develop a detailed project plan that outlines the scope of work.</p>
                    </div>
                    <div class="col">
                        <h5 class="redtext">Analysis </h5>
                        <p class="sdlc_p">During this stage, we conduct a thorough analysis of our clients' requirements to ensure we understand their needs. We collaborate with our clients to identify any potential challenges and develop solutions to address them.</p>
                    </div>
                    <div class="col">
                        <h5 class="redtext">Design </h5>
                        <p class="sdlc_p" >Based on the requirements analysis, we develop a comprehensive design plan that outlines the system architecture, user interface design, database schema, and other critical aspects of the system.</p>
                    </div>
                    <div class="col">
                        <h5 class="redtext">Development </h5>
                        <p class="sdlc_p" >During this stage, our team of experienced developers works diligently using 2–3-week spring cycles to create high-quality code that meets the design specifications. We employ rigorous manual and automated testing procedures to ensure that the code is error-free and meets our clients' requirements.</p>
                    </div>
                    <div class="col">
                        <h5 class="redtext">Testing </h5>
                        <p class="sdlc_p" >We conduct rigorous testing procedures to ensure that the software is stable, reliable, and performs as expected. We utilize a variety of testing methodologies, including unit testing, integration testing, and user acceptance testing.</p>
                    </div>
                    <div class="col">
                        <h5 class="redtext">Deployment </h5>
                        <p class="sdlc_p" >Once the software has been tested and approved, we deploy it to the production environment. We work closely with our clients to ensure that the software is installed correctly and is functioning as expected.</p>
                    </div>
                    <div class="col">
                        <h5 class="redtext">Testing </h5>
                        <p class="sdlc_p" >We offer ongoing maintenance and support services to ensure that our clients' software remains stable and reliable. We provide timely updates and bug fixes to ensure that the software continues to meet our clients' evolving needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

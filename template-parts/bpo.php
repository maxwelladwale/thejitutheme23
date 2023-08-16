<?php

/**
 * The template for displaying the technology services page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * Template Name: Business Process Outsourcing 
 * @package jitutheme
 */

get_header();
?>

<!-- BANNER -->
<section id="BPO_Banner">
    <div class="container-fluid banner bpo__banner d-flex align-items-center" id="banner_height">
        <div class="container">
            <div class="row align-items-start" id="BPO_Banner_Row">
                <div class="col-12 col-md-8 col-lg-6">
                    <h1 class="banner_h1 redtext">Business Process Outsourcing</h1>
                    <p id="BPO_P">
                        Businesses can streamline their operations and improve their bottom line with our BPO services. With our team of skilled professionals, you can reduce costs, increase efficiency, and improve customer satisfaction, whether you need accounting, customer support, or IT helpdesk services.
                    </p>
                    <div id="banner_btn">
                        <a href="<?php echo site_url('/contact-us');?>" class="bpo-banner-button">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Navigation Tabs -->
<section class="container">
    <h1 class="redtext py-4 text-center fw-light" id="Streamline">Streamline Your Operations</h1>
    <div class="overflow-hidden">
        <ul class="nav flex-nowrap justify-content-md-evenly border-bottom overflow-auto service-navs-animation" id="Operations">
            <li class="nav-item flex-shrink-0" role="presentation">
                <a class="nav-link py-4 text-black active" href="#Acc_Section_Target">Accounting</a>
            </li>

            <li class="nav-item flex-shrink-0" role="presentation">
                <a class="nav-link py-4 text-black" href="#CAS_Section_Target">Customer Application Support</a>
            </li>

            <li class="nav-item flex-shrink-0" role="presentation">
                <a class="nav-link py-4 text-black" href="#IT_Section_Target">Level 1 IT Help Desk</a>
            </li>
        </ul>
    </div>
</section>

<section class="container">
    <!-- Accounting Services -->
    <div id="Acc_Section_Target"></div>
    <div class="row py-5" id="Accounting_Services">
        <div class="col-md-6">
            <h2 class="redtext">Accounting Services</h2>
            <p>
                Your business's financial performance will be boosted with ease and peace of mind when you use our accounting services. In addition to offering top-notch remote accounting, and finance teams, we handle the vetting process to ensure that you have the best professionals managing your financial needs while you concentrate on growing your business.
            </p>
            <!-- <button class="col-12 col-sm-auto bpo_contact_btn" onclick="location.href='https://thejitu.jitudevops.com/contact-us/'" type="button">
                Contact Us
            </button> -->
            <a href="<?php echo site_url('/contact-us');?>" class="primary-button">Contact Us</a>
        </div>
        <ul class="scrollable col-md-6 mb-0 h-100 overflow-x-hidden" style="max-height: 30rem;">
            <li class="mb-3">
                <span>Accounts Payable Processing which involves managing and processing the company's bills and payments to vendors and suppliers.</span>
            </li>
            <li class="mb-3">
                <span>Account receivable transactions involve managing and processing the company's incoming payments from customers for goods or services provided.</span>
            </li>
            <li class="mb-3">
                <span>Assets / Equipment Ledgers this involves maintaining records of all assets and equipment owned by the company, including depreciation and disposal records.</span>
            </li>
            <li class="mb-3">
                <span>Bank Reconciliation is a service offering as well. It involves reconciling the company's bank accounts to ensure that all transactions are accurately recorded in the company's books.</span>
            </li>
            <li class="mb-3">
                <span>Bookkeeping is also one of our key services which involves maintaining accurate records of all financial transactions, including income, expenses, assets, and liabilities.</span>
            </li>
            <li class="mb-3">
                <span>Credit Card Processing involves managing and processing the company's credit card transactions, including payments to credit card processors and reconciling credit card statements.</span>
            </li>
        </ul>
    </div>
</section>

<!-- Diagonal Image -->
<section id="Diagonal_Image">
    <div class="position-relative">
        <div class="mb-5-wrap">
            <div class="diagonal-image-banner mb-5"></div>
        </div>
    </div>
</section>

<!-- Customer Application Support -->
<div id="CAS_Section_Target"></div>
<section class="container" id="CAS_Container">
    <div class="row py-5" id="Customer_Application_Support">
        <div class="col-md-6">
            <h2 class="redtext">Customer Application Support</h2>
            <p>
                We can transform your customer service by bringing on board our exceptional remote application support teams. Our rigorous vetting process ensures that you will have access to a team of experts equipped with the latest tools and technology, ready to provide seamless support to your customers. By building lasting customer relationships and maintaining your brand's reputation, we will help you focus on growing your business.
            </p>
            <a href="<?php echo site_url('/contact-us');?>" class="primary-button">Contact Us</a>
        </div>
        <ul class="scrollable col-md-6 mb-0 h-100 overflow-x-hidden" style="max-height: 30rem;">
            <li class="mb-3">
                <span>Maintaining a positive customer experience by being professional, courteous, and empathetic towards customer concerns. We ensure that customers feel heard and valued.</span>
            </li>
            <li class="mb-3">
                <span>Managing event users' registration and login details for events hosted on the client specified platform. This may include verifying user details, creating user accounts, and providing technical support to users who have difficulty accessing the platform.</span>
            </li>
            <li class="mb-3">
                <span>Moderate chat/video/audio/content: THE Jitu Level One Support manages events, moderate chat rooms and video/audio content. We ensure that the client content is appropriate.</span>
            </li>
            <li class="mb-3">
                <span>Online presenter preparation: Our Level One Support can prepare online presenters for events hosted on the Client preferred platforms. This includes providing technical support, guiding presenters on equipment set up, and ensuring that presenters are familiar with the platform's features.</span>
            </li>
        </ul>
    </div>
</section>


<!-- Level 1 IT Help Desk -->
<div id="IT_Section_Target"></div>
<section class="container" id="IT_Container">
    <div class="row py-5" id="Level_1_IT_Help_Desk">
        <div class="col-md-6">
            <h2 class="redtext">Level 1 IT Help Desk</h2>
            <p>
                Our first-level I.T. help desk provides comprehensive solutions for your company's technical needs. Our experienced team is devoted to delivering reliable 24/7 support, so your employees are always able to access the assistance they require. Additionally, our services include event management and new account creation, sparing you time and helping you to concentrate on your main business goals. With us taking care of the technology side, you can have every confidence that everything is secure.
            </p>
            <a href="<?php echo site_url('/contact-us');?>" class="primary-button">Contact Us</a>
        </div>
        <ul class="scrollable col-md-6 mb-0 h-100 overflow-x-hidden" style="max-height: 30rem;">
            <li class="mb-3">
                <span><span class="fw-bold">Troubleshooting:</span> Helping customers diagnose and fix any issues they may encounter while using the application.</span>
            </li>
            <li class="mb-3">
                <span><span class="fw-bold">Technical assistance:</span> Providing technical guidance to customers on how to use the application.</span>
            </li>
            <li class="mb-3">
                <span><span class="fw-bold">Training:</span> Providing customers with training on how to use the application effectively.</span>
            </li>
            <li class="mb-3">
                <span><span class="fw-bold">Bug fixes:</span> Identifying and fixing bugs or errors that customers encounter while using the application.</span>
            </li>
            <li class="mb-3">
                <span><span class="fw-bold">Maintenance:</span> Providing ongoing maintenance and support to ensure the application continues to function as expected.</span>
            </li>
            <li class="mb-3">
                <span><span class="fw-bold">Upgrades:</span> Providing customers with upgrades or updates to the application to improve its functionality and performance.</span>
            </li>
            <li class="mb-3">
                <span><span class="fw-bold">Configuration:</span> Helping customers configure the application to meet their specific needs or requirements.</span>
            </li>
        </ul>
    </div>
</section>

<!-- HEAR FROM CLIENTS -->

<?php
//testimonial template part
get_template_part( 'template-parts/testimonials' );

get_footer();

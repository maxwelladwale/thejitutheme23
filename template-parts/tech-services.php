<?php

/**
 * The template for displaying the technology services page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * Template Name: Technology Services 
 * @package jitutheme
 */

get_header();

?>
<!-- BANNER -->
<section class="tech-services-banner  mb-5">
    <div class="container-fluid banner sticky-banners tech-serve-banner d-flex align-items-center" id="banner_height">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-12 col-md-8 col-lg-6">
                    <h1 class="banner_h1">
                        Augment your team <span class="redtext">accelerate </span> your success!
                    </h1>
                    <p>
                    At THE Jitu, we offer a comprehensive suite of services that help your organization reduce costs, increase productivity, and gain access to top-notch talent. We take pride in offering customized and personalized solutions that cater to the unique needs of each company we work with.
                    </p>
                    <div class="row">
                        <span class="col-12 col-sm-auto mb-5">
                            <a href ="<?php echo site_url('/processes');?>" class="button-clear">
                            REVIEW OUR PROCESSES
                            </a>
                        </span>
                        <span class="col-12 col-sm-auto">
                            <a href ="#contact_section" class="col-12 col-sm-auto primary-button">
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
    <div class="box-shadow"></div>
</section>

<!-- Services Navigation Tabs -->
<section class="container overflow-hidden tech-sub-menu">
    <ul class="nav flex-nowrap justify-content-lg-around border-bottom overflow-auto">
        <li class="nav-item flex-shrink-0" role="presentation">
            <a class="nav-link py-4 text-black fw-bold" href="#Full-Stack">Full-Stack Software Development</a>
        </li>

        <li class="nav-item flex-shrink-0" role="presentation">
            <a class="nav-link py-4 text-black fw-bold" href="#Quality Engineer">Quality Engineer/SRE</a>
        </li>

        <li class="nav-item flex-shrink-0" role="presentation">
            <a class="nav-link py-4 text-black fw-bold" href="#Restful API & GraphQL API">Restful API & GraphQL API</a>
        </li>

        <li class="nav-item flex-shrink-0" role="presentation">
            <a class="nav-link py-4 text-black fw-bold" href="#ETL/Reporting Analysis">ETL/Reporting Analysis</a>
        </li>
        <li class="nav-item flex-shrink-0" role="presentation">
            <a class="nav-link py-4 text-black fw-bold" href="#wordpress">Wordpress Monitoring Service</a>
        </li>
    </ul>
</section>

<!-- Service 1: Full-Stack Software Development -->
<section id="Full-Stack">
    <div class="container mb-sm-5 pb-5">
        <div class="py-5 text-center">
            <h3 class="redtext fw-light">Full-Stack Software Development</h3>
            <h1>Need a Custom Web Application?</h1>
        </div>

        <!-- Tech Stacks -->
        <div class="row pb-4 pb-sm-5">
            <div class="col-12 col-sm-2 text-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/tech-stacks.png" class="img-fluid mb-3" alt="">
                <h6 class="d-sm-none mb-3 fw-bold" style="font-weight:600;">TECH STACKS</h6>
                <p class="d-sm-none" style="color: #595b61;">
                We create customized web applications that are tailored to meet our clients' unique needs. Our team of developers uses the latest web development technologies such as React, Angular, Java, .NET, and all relevant components. We have the ability to deliver complex projects on time, within budget, and with a global standard of quality.
                </p>
            </div>
            <div class="d-none d-sm-block col-sm-10 col-lg-9">
                <h6 class="" style="font-weight:600;">TECH STACKS</h6>
                <p style="color: #595b61;">
                We create customized web applications that are tailored to meet our clients' unique needs. Our team of developers uses the latest web development technologies such as React, Angular, Java, .NET, and all relevant components. We have the ability to deliver complex projects on time, within budget, and with a global standard of quality.
                </p>
            </div>
        </div>

        <!-- Best Practices -->
        <div class="row pb-4 pb-sm-5">
            <div class="col-12 col-sm-2 text-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/best-practices.png" class="img-fluid mb-3" alt="">
                <h6 class="d-sm-none mb-3 fw-bold" style="font-weight:600;">BEST PRACTICES</h6>
                <p class="d-sm-none" style="color: #595b61;">
                    Our front-end developers create responsive and visually appealing user interfaces
                    that follow best UI/UX practices and are easy to use and navigate. Meanwhile, our
                    back-end developers are experts in creating scalable and secure applications that
                    can handle high traffic volumes.
                </p>
            </div>
            <div class="d-none d-sm-block col-sm-10 col-lg-9">
                <h6 class="" style="font-weight:600;">BEST PRACTICES</h6>
                <p style="color: #595b61;">
                    Our front-end developers create responsive and visually appealing user interfaces
                    that follow best UI/UX practices and are easy to use and navigate. Meanwhile, our
                    back-end developers are experts in creating scalable and secure applications that
                    can handle high traffic volumes.
                </p>
            </div>
        </div>

        <!-- Sensible Solutions -->
        <div class="row pb-4 pb-sm-5">
            <div class="col-12 col-sm-2 text-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/sensible-solutions.png" class="img-fluid mb-3" alt="">
                <h6 class="d-sm-none mb-3 fw-bold" style="font-weight:600;">SENSIBLE SOLUTIONS</h6>
                <p class="d-sm-none" style="color: #595b61;">
                We don't just create full-stack solutions; we also follow industry best practices to ensure that the applications we build are secure, scalable, and easy to maintain. Our team of developers provides continuous integration/continuous delivery (CI/CD), DevOps, containerization, and all the tools necessary to ensure smooth launching of custom applications and patches.
                </p>
            </div>
            <div class="d-none d-sm-block col-sm-10 col-lg-9">
                <h6 class="" style="font-weight:600;">SENSIBLE SOLUTIONS</h6>
                <p style="color: #595b61;">
                We don't just create full-stack solutions; we also follow industry best practices to ensure that the applications we build are secure, scalable, and easy to maintain. Our team of developers provides continuous integration/continuous delivery (CI/CD), DevOps, containerization, and all the tools necessary to ensure smooth launching of custom applications and patches.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col offset-sm-2">
                <p class="redtext">Learn more about how we can help you achieve your business goals.</p>
                <a href="#contact_section" class="button">
                    Contact Us Today
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Service 2: Quality Engineer/SRE -->
<section class="qual-eng" id="Quality Engineer">
    <div class="position-relative">
        <div class="quality-eng-banner mb-5" style="height: 90vh; clip-path: polygon(0% 5rem, 100% 0%, 100% 100%, 0% 100%);"></div>
        <div class="container-fluid nml">
            <div class="position-absolute row g-0" style="bottom: -4rem;">
                <div class="col-12 col-md-8">
                    <div class="bg-white quality-engineer-sre  p-5 rounded shadow">
                        <h5 class="redtext fw-light">Quality Engineer/SRE</h5>
                        <h3>
                            Quality Engineers and Site Reliability Engineers are both critical roles in ensuring the success of a business, especially in the technology industry.
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 py-5 text-center">
                <h2 class="redtext">Quality Engineers</h2>
                <p>
                    We take pride in delivering high-quality engineering solutions. We employ a team of skilled Quality Engineers that possess the critical job skills necessary to ensure that every project we undertake is a success.
                </p>
            </div>
        </div>
        <div class="position-relative row g-lg-0 align-items-start justify-content-lg-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/quality-engineer-tenates.png" alt="Quality Engineers" class="qual-eng-img position-absolute d-none d-lg-block w-auto">
            <div style="min-height: 576px;" class="col-12 col-md-6 col-lg-5 col-xl-4 row g-lg-0 team-commu">
                <div class="col-lg-11 col-xl-auto mb-4 mb-lg-0">
                    <h6 class="redtext fw-bold">TEAMWORK</h6>
                    <p style="color: #595b61;">
                        Collaboration is an integral part of our company culture, and our Quality Engineers are
                        skilled
                        at working collaboratively with cross-functional teams to deliver outstanding projects on
                        time
                        and within budget.
                    </p>
                </div>
                <div class="col-lg-10 d-lg-flex flex-column justify-content-center mb-4 mb-lg-0">
                    <h6 class="redtext fw-bold">COMMUNICATION</h6>
                    <p style="color: #595b61;">
                    Our engineers are excellent communicators, with the ability to communicate technical concepts effectively to both technical and non-technical stakeholders.
                    </p>
                </div>
            </div>
            <div style="min-height: 576px;" class="col-12 col-md-6 offset-lg-1 row g-lg-0 quality-pro">
                <div class="col-lg-9 offset-30 mb-4 mb-lg-0 qltys">
                    <h6 class="redtext fw-bold">QUALITY ASSURANCE</h6>
                    <p style="color: #595b61;">
                        Our engineers have an in-depth understanding of quality assurance principles and practices,
                        which enables them to develop and implement effective quality control measures throughout
                        the project lifecycle.
                    </p>
                </div>
                <div class="col-lg-7 offset-lg-5 mb-4 mb-lg-0 prob-solv">
                    <h6 class="redtext fw-bold">PROBLEM SOLVING</h6>
                    <p style="color: #595b61;">
                        Our team members have exceptional problem solving skills that enable them to identify
                        complex issues and implement solutions that meet the highest standards of quality and
                        efficiency.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5 col-xl-4 offset-lg-2">
                <div class="mb-4 mb-lg-0">
                    <h6 class="redtext fw-bold">TECHNICAL EXPERTISE</h6>
                    <p style="color: #595b61;">
                    Our Quality Engineers possess a strong technical background with proficiency in a wide range of programming languages, software testing tools, and other technical skills.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service 3: Site Reliability Engineers -->
<section class="site-reliability sr-shadow" id="Site Reliability Engineers">
    <div class="position-relative">
        <div class="banner position-absolute top-0 left-0 h-100 w-100 z-n1 opacity-25" style="clip-path: polygon(0% 5rem, 100% 0%, 100% 100%, 0% 100%);"></div>
        <div class="container pt-5">
            <div class="row justify-content-center py-5">
                <div class="col-12 col-md-6 pt-5 pb-md-4 text-center">
                    <h2 class="redtext">Site Reliability Engineers</h2>
                    <p class="fw-bold">We offer a resourceful range of SRE services.</p>
                </div>
            </div>
            <div class=row>
                <div class="col-md-1"></div>
                <div class="col-md-5 mb-4 mb-md-0">
                    <h6 class="redtext fw-bold">INFRASTRUCTURE DESIGN AND MANAGEMENT</h6>
                    <p>We design and manage infrastructure for large-scale web applications. We utilize the latest technologies and tools to ensure that our clients' infrastructure is reliable, scalable, and secure.</p>
                </div>
                <div class="col-md-5 mb-4 mb-md-0">
                    <h6 class="redtext fw-bold">MONITORING AND ALERTING</h6>
                    <p>We monitor and alert all web applications. Using a variety of monitoring tools and techniques proactively identifies and addresses issues before they impact our clients' users.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-5 mb-4 mb-md-0">
                    <h6 class="redtext fw-bold">PERFORMANCE OPTIMIZATION</h6>
                    <p>
                    By optimizing the performance of web applications, we ensure that all applications meet the needs of our clients' users. We use a variety of tools and techniques to identify and resolve performance issues, ensuring that our clients' applications are fast and responsive.

                    </p>
                </div>
                <div class="col-md-5 mb-4 mb-md-0">
                    <h6 class="redtext fw-bold">DISASTER RECOVERY</h6>
                    <p>We design and implement disaster recovery plans for web applications to ensure that our clients' applications are protected against unexpected failures and that they can be quickly recovered in the event of a disaster.</p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-5"></div>
                <div class="col-md-5 mb-4 mb-md-0">
                    <h6 class="redtext fw-bold">CONSULTING SERVICES</h6>
                    <p>Our team members provide consulting services to our clients, including infrastructure design reviews, performance optimization, and disaster recovery planning.</p>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row justify-content-center pb-5 py-md-5">
                <div class="col-12 col-md-5 text-center">
                    <h6 class="fw-bold mb-5">Our Quality Engineers or Site Reliability Engineering services that are tailored to your specific needs.</h6>
                    <a href="#contact_section" class="justify-content-center button">
                        CONTACT US TODAY
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div id="Restful API & GraphQL API">
        <div class="pb-5 text-white" style="background-color:#C11E2E;">
            <div class="container py-5">
                <div>
                    <h3 class="fw-light">Restful API and GraphQL API</h3>
                </div>
                <div class="h1 fw-bold">
                    Our custom RESTful and GraphQL API development services help businesses create tailored solutions that meet their specific needs.
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-0 justify-content-between align-items-start pb-md-5">
                <div style="margin-top: -3rem;" class="col col-12 col-md-5 mb-4">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ql-rest-api.png" alt="" class="img-fluid shadow-lg position-absolute restful-img">
                </div>
                <div class="col col-12 col-md-6 row g-0 restfulapi">
                    <div class="col-lg-9 restfulP">
                        <div class="my-lg-5">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/rest-api.svg" alt="" class="img-fluid col-2 me-4">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/graphql.svg" alt="" class="img-fluid col-2">
                        </div>
                        <p class="">
                        RESTful and GraphQL APIs are essential components of modern web applications, allowing businesses to connect their front-end user interfaces with the back-end data and services they need. Our team of developers has extensive experience in creating custom APIs using both RESTful and GraphQL protocols; we handle even the toughest business problems. Our APIs are efficient, secure, and scalable to navigate even the toughest business problems.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row p-md-2 restful-contents">
                <div class="col-lg-4 col-md-12 restful-content">
                    <div class="mb-lg-4 text-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-circle.svg" alt="" class="img-fluid">
                    </div>
                    <p>
                        By creating custom APIs, we help businesses streamline their operations, reduce costs, and improve customer experiences. Our APIs are designed to be efficient, secure, and scalable, ensuring that they can handle high volumes of traffic and provide fast responses.
                    </p>
                </div>
                <div class="col-lg-4 col-md-12 restful-content">
                    <div class="mb-lg-4 text-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-circle.svg" alt="" class="img-fluid">
                    </div>
                    <p>
                    We offer affordable custom API development solutions to keep your project on budget. Our APIs are built with scalability and future growth in mind, ensuring that they can adapt to changing business needs and deliver value over time while seeing an ROI in the long run.
                    </p>
                </div>
                <div class="col-lg-4 col-md-12 restful-content">
                    <div class="mb-lg-4 text-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-circle.svg" alt="" class="img-fluid">
                    </div>
                    <p>
                        Whether our clients need a custom API solution for a new application or to integrate legacy code, our team is up to the challenge. We have the expertise and experience to create custom APIs that meet our clients' unique business requirements, no matter how complex or challenging.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center my-5 ">
                <span class="divider-shad"></span>
            </div>
        </div>
    </div>
</section>

<!-- Service 5: ETL/Reporting Analysis -->
<section id="ETL/Reporting Analysis">
    <div class="container">
        <div class="pb-4 p-md-5 text-center">
            <div class="redtext">
                <h3 class="fw-light">ETL/Reporting Analysis</h3>
            </div>
            <div class="h1 fw-bold mb-3">
                Data is at the heart of every business decision. We translate raw data into actionable insights.
            </div>
        </div>
        <div class="row justify-content-center g-0">
            <div class="card col-md-10 flex-row align-items-center mb-4 mb-md-5 p-3 p-md-4 shadow-lg etl-cards">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/etl.png" class="col-1" alt="">
                <div class="col card-body">
                    <div class="card-text">
                        <span class="mb-0 h6 fw-bold">ETL</span>
                        <div>
                        We extract data from various sources, transform it into a usable format, and load it into a database or data warehouse. Using the latest technologies and techniques ensures that our clients' data is accurate, consistent, and up-to-date.
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-md-10 flex-row align-items-center mb-4 mb-md-5 p-3 p-md-4 shadow-lg etl-cards" >
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/report-analysis.png" class="col-1" alt="">
                <div class="col card-body">
                    <div class="card-text">
                        <span class="mb-0 h6 fw-bold">REPORTING ANALYSIS</span>
                        <div>
                            We use advanced statistical models and data visualization tools to help our clients understand their data and make informed business decisions.
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ETL/Reporting Analysis end-->


<!-- Service 3: Site Reliability Engineers -->
<section class="site-reliability sr-shadow" id="wordpress">
    <div class="position-relative">
        <div class="wordpress-dev position-absolute top-0 left-0 h-100 w-100 z-n1 opacity-25" style="clip-path: polygon(0% 5rem, 100% 0%, 100% 100%, 0% 100%);"></div>
        <div class="container pt-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-12 col-md-12 col-sm-12 pt-3 pb-md-4 text-center">
                    <div class="icon-container text-center pb-2">
                        <img  src="<?php echo get_template_directory_uri() ?>/assets/img/icons/wordpress-serv.svg" alt="">
                    </div>
                    <h2 class="redtext text-center">WordPress Web Design & Development  </h2>
                    <p>THE Jitu specializes in designing and developing outstanding, responsive websites using a fast go-to-market strategy.
                        Our web solutions are designed to function smoothly and provide a consistent user experience across all platforms.
                        We also provide website monitoring services to protect our clients from the dangers of cyberspace.
                    </p>
                </div>
            </div>
            <div class="col-lg-12 d-flex row">
                <div class="col-md-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 mb-4 mb-md-0 me-3">
                    <h5 class="redtext fw-bold text-uppercase no-left pb-2">Website Development Service</h5>
                    <ul class="list-none web-dev-list">
                        <li class="text-dark"><p class="mb-0 lh-lg"><span class="fw-bold">WordPress Theme Development</span> - This service involves creating a theme that is optimized for search engines while following best practices for security, performance, and accessibility</p></li>
                        <li class="text-dark"><p class="mb-0 lh-lg"><span class="fw-bold">WordPress Migration</span> – This involves migrating all the website's content, data, and functionality between servers without losing any of the website's current features</p> </li>
                        <li class="text-dark"><p class="mb-0 lh-lg"><span class="fw-bold">SEO Friendly Theme design and development</span> – We create SEO-friendly websites optimized for search engines with clean code structure, fast load times, and are mobile responsive </p></li>
                        <li class="text-dark"><p class="mb-0 lh-lg"><span class="fw-bold">Browser testing for functionality and responsiveness</span> – We ensure that your website is user-friendly and accessible to all users, regardless of their device or browser preference </p></li>
                        <li class="text-dark"><p class="mb-0 lh-lg"><span class="fw-bold">Custom Plugin Development</span> – We create custom plugins to extend the functionality of WordPress sites, add new features or improve existing ones</p></li>
                        <li class="text-dark"><p class="mb-0 lh-lg"><span class="fw-bold">Dedicated Project Team</span> - We will assign a dedicated Team to your project. You can contact him/her whenever you like on typical business days for status updates. No delays. No bottlenecks. Guaranteed </p></li>
                    </ul>
                </div>

                <div class="col-lg-5 col-md-12 col-sm-12 mb-4 mb-md-0">
                    <h5 class="redtext fw-bold text-uppercase no-left pb-2">Website Monitoring Services </h5>
                    <ul class="list-none monitoring-list">
                        <li class="text-dark"><p class="mb-0 lh-lg"><span class="fw-bold">Firewall Configuration </span> - Our team performs a firewall configuration to protect your website against brute force attacks and limit login attempts </p></li>
                        <li class="text-dark"><p class="mb-0 lh-lg"><span class="fw-bold">Malware Removal </span> - Our developers identify and remove malicious code from your website </p> </li>
                        <li class="text-dark"><p class="mb-0 lh-lg"><span class="fw-bold">Web Application Security </span> - THE Jitu will protect you against common threats such as SQL injections, cross-site scripting, and cross site request forgery </p> </li>
                        <li class="text-dark"><p class="mb-0 lh-lg"><span class="fw-bold">Security Audits </span> - Our developers will identify vulnerabilities and recommend solutions for strengthening the security of the website </p></li>
                        <li class="text-dark"><p class="mb-0 lh-lg"><span class="fw-bold">Backups and Recovery </span> - Our team will keep backups of your website to ensure that your website data is protected and can be quickly restored in the event of a disaster </p></li>
                        <li class="text-dark"><p class="mb-0 lh-lg"><span class="fw-bold">Dedicated Team </span> - Keep your server secure with dedicated team ready to assist in case of any incident</p></li>
                    </ul>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row justify-content-center pb-5 py-md-5">
                <div class="col-12 col-md-5 text-center">
                    <a href="#contact_section" class="justify-content-center button">
                        CONTACT US TODAY
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<span id="contact_section"></span>

<!-- CONTACT US -->
<section class="section jitucontact" style="margin-top:0px !important;" >
    <div class="pt-5 pb-5">
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

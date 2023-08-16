<?php

/**
 * The template for displaying the careers page
 *  
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 *  Template Name: career 
 * @package jitutheme
 */

get_header();

?>
<!-- BANNER -->
<section class="banners-section">
    <div class="banner_img_container">
        <img class="career_banner_img" src="<?php echo get_template_directory_uri() ?>/assets/img/career-banner.webp" alt="">
    </div>
    <div class="container-fluid d-flex align-items-center banner_content_container" style="height:90vh">
        <div class="container">
            <div class="row align-items-start landing">
                <div class="col-sm-12 col-lg-6 col-md-6">
                    <h1 class="banner-title"><span class="redtext">Join Our Team!</span></h1>
                    <p class="career-content text-white">
                        We are a technology company that is changing the world.
                    </p>
                </div>
                <div class="col land_btn">
                    <a class="career__btn" href="#open_position">Browse Job Openings</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="box-shadow"></div>

<!-- WHY WORK WITH US -->
<section class="section pb-5 why_us">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 col-sm-12">
                <h3 class="redtext why-work">Why Work with Us?</h3>
            </div>
            <div class="col-md-6 col-sm-12 reasons">
                <h3 class="reasons-why-title">We are a company that cares about our employees.</h3>
                <ul>
                    <li>List of benefits of collabarating with the company</li>
                    <li>Competitive compensation</li>
                    <li>Flexible work arrangements</li>
                    <li>Professional development opportunities</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- OPEN JOB POSITIONS -->
<section id="open_position" class="section pb-5 careers">
    <div class="container">
        <div class="search_input_container">
            <input class="search_input" type="text" placeholder="Search by keyword or position title">
            <div class="dropdown-container">
                <select id="location-select" class="location-select">
                    <option value="All">All</option>
                    <option value="Remote, Kenya">Remote, Kenya</option>
                    <option value="Nyeri, Kenya">Nyeri, Kenya</option>
                </select>
            </div>
        </div>
        <div class="job-post">
            <div id="career_img">
                <img class="career_img" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/process_banner.jpg" alt="">
            </div>
            <div class="job-content">
                <h3 class="job-title">Quality Assurance Engineer : Level 1</h3>
                <h5 class="job-location">Remote, Kenya</h5>
                <p class="job-description">Seeking a detail-oriented Quality Assurance Engineer to ensure high-quality software products. Responsibilities include test planning, bug identification/reporting, regression testing, collaboration with cross-functional teams, and documentation. Requires strong analytical skills, attention to detail, and experience with testing methodologies/tools. Join us to contribute to continuous software quality improvement.</p>
                <a class="button job-opening-btn" href="https://workforcenow.adp.com/mascsr/default/mdf/recruitment/recruitment.html?cid=43083a58-c969-4778-a25b-8be156938e63&ccId=9200083794271_2&jobId=461236&source=CC2&lang=en_US">Apply Today</a>
            </div>
        </div>
        <div class="job-post">
            <div id="career_img">
                <img class="career_img" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/career-img.webp" alt="">
            </div>
            <div class="job-content">
                <h3 class="job-title">Software Engineer : Full Stack</h3>
                <h5 class="job-location">Nyeri, Kenya</h5>
                <p class="job-description">Seeking a skilled developer with expertise in writing code using language features/frameworks, understanding system architecture, maintaining coding standards, debugging/troubleshooting, implementing tests, solving business problems, and applying critical thinking for software solutions. Join our team and contribute to our innovative projects.</p>
                <a class="button job-opening-btn" href="https://workforcenow.adp.com/mascsr/default/mdf/recruitment/recruitment.html?cid=43083a58-c969-4778-a25b-8be156938e63&ccId=9200083794271_2&jobId=461236&source=CC2&lang=en_US">Apply Today</a>
            </div>
        </div>
        <div class="no-job hide">
            <p class="no-job-description">There isn't any open position on this job title.</p>
            <img class="no-job_img" src="<?php echo get_template_directory_uri() ?>/assets/img/icons/no-vacancy.png" alt="">
        </div>
    </div>
</section>

<!-- THH FAMILY -->
<?php get_template_part('template-parts/thh-family'); ?>

<!-- TESTIMONIALS -->
<?php get_template_part('template-parts/testimonials'); ?>

<?php
get_sidebar();
get_footer();
?>
<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

<div class="glitchcontainer">
  <p class="glitch">
    <span aria-hidden="true">404</span>
    404
    <span aria-hidden="true">404</span>
  </p>

  <div class="cta404">
    <p> Oops Sorry, we couldn't find the page you are looking for</p>
    <div class="">
      <a href="<?php echo site_url(); ?>"><button class="cta404back">Home</button></a>
      <a href="<?php echo site_url('contact-us'); ?>"><button class="cta404back">Contact Us</button></a>
    </div>
  </div>
</div>


<?php get_footer(); ?>
<?php 
/**
 * The Footer
 * 
 * Holds the footer content and closing body tag
 */

wp_footer() ?>
<footer class="main_footer container-fluid">
    <div class="footer_logo col-sm-12 col-lg-4">
        <?php 
        if (has_custom_logo()):
            the_custom_logo();
        endif;    
        ?> 
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-jitu-red.svg" alt="The Jitu Red Company logo"></a>

    </div>
    <div class="footer_content row col-sm-12 col-lg-8">
        <div class="f_contacts col-sm-12 col-md-6 col-lg-4">
            <h3>Contact Us</h3>
            <ul>
                <li>P.O Box 1126-10100 Nyeri, Kenya</span></li>
                <li><a href="tel:+254710453693">(+254) 710 453 693</a></li>
                <li><a href="mailto:hello@thejitu.com">hello@thejitu.com</a></li>
                <li><a href="https://www.linkedin.com/company/thejitu-com/mycompany/" target="_blank" rel="noopener noreferrer"><span class="ri-linkedin-box-fill socials"> </span></a></li>
            </ul>
        </div>
        <div class="f_quicklinks col-sm-12 col-md-6 col-lg-3">
            <h3>Quick Links</h3>
            <?php
            wp_nav_menu(array(
                'theme_location'  => 'footer-menu',
                'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'ul',
                'container_class' => 'f_quicklinks col-sm-12 col-md-6 col-lg-4',
                'container_id'    => '',
                'menu_class'      => '',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ));
            ?>
            <!-- <a href="https://www.linkedin.com/company/thejitu-com/mycompany/" target="_blank" rel="noopener noreferrer"><span class="ri-linkedin-box-fill socials"> </span></a> -->
        </div>
        <div class="f_ourtechfam col-sm-12 col-md-6 col-lg-3">
            <h3>Our Technology Family</h3>
            <ul>
                <li><a href="https://acquiretek.com/"  target="_blank">AcquireTek</a></li>
                <li><a href="https://www.carveos.com/" target="_blank">Carveos</a></li>
                <li><a href="https://www.eclipsereality.com/" target="_blank">Eclipse Reality</a></li>
                <li><a href="https://griffinsolutionsgroup.com/" target="_blank">Griffin Technology Solutions</a></li>
                <li><a href="https://www.k2-data.com/" target="_blank">K2 Data Technologies</a></li>
            </ul>
        </div>
    </div>
</footer>
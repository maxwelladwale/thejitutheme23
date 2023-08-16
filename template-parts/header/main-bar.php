
<?php

/**
 * Displays main navigation
 *
 */
?>

        <nav class="navbar navbar-expand-lg navbar-light bg-white p-0">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/logo-jitu-red.svg" alt="The Jitu Red Company logo" width="150" class="d-inline-block align-text-top">
                    </a>
                    <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </div>
                    <div class="nav-lev1 collapse navbar-collapse" id="navbarText">
                        <!-- <div>
                            <span id="extra_linkz">
                                <div><a class="nav-link active link_p2" aria-current="page" href="#">About</a></div> 
                                <div><a class="nav-link link_p2" href="#">Careers</a></div>
                                <div style="padding-left: 20px;"><a class="nav-link link_p2" href="#">Contacts</a></div>
                            </span>
                        </div> -->

                        <?php if ( has_nav_menu( 'top-bar' ) ) : ?>
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location'  => 'top-bar',
                                        'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                                        'container'       => 'div',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => '',
                                        'items_wrap'      => '<ul  id="extra_linkz" class="navbar-nav me-auto mb-2 mb-lg-0 ul1 text-black ">%3$s</ul>',
                                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'          => new WP_Bootstrap_Navwalker(),
                                    ));
                                ?>
                          
                        <?php
                        endif;
                        ?>

                        <?php if ( has_nav_menu( 'top-menu' ) ) :

                        wp_nav_menu(array(
                            'theme_location'  => 'top-menu',
                            'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'navbar-nav ul2',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'items_wrap' => '<ul  id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 ul1 main-bar">%3$s</ul>',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ));
                    endif;
                    
                        ?>
                    </div>
                </div>
            </nav>

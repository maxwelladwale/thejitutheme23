<?
/**
 * Displays top bar navigation
 *
 */

if ( has_nav_menu( 'top-bar' ) ) : ?>
    <nav class="navbar navbar-expand-lg bg-jitu p-0" id="d_topbar">
        <?php
            wp_nav_menu(array(
                'theme_location'  => 'top-bar',
                'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'container menu-cont',
                'container_id'    => '',
                'menu_class'      => '',
                'items_wrap'      => '<ul  id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 ul1 top-bar">%3$s</ul>',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ));
        ?>
    </nav>
<?
endif;
?>

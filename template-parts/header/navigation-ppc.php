<?php

/**
 * Template part for displaying the header navigation menu
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

?>

<nav id="site-navigation" class="main-navigation nav--toggle-sub sticky_nav ppc_navigation">
    <div class="navigation_and_logo_container">
        <div class="site_logo">
            <a href="#"><img src="<?php echo get_field('navigation_logo', 'option')['url']; ?>" alt=""></a>
        </div>
        <div class="navbar_cta hide_on_mobile">
            <a target="_blank" href="tel:949-276-2886" class="invocaNumber cta_left cta_box_shadows" target="_blank">949-276-2886</a>
        </div>
    </div>
</nav>
<?php

/**
 * Template Name: PPC Template
 * Template Post Type: Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header('ppc');

sbh_center()->print_styles('sbh_center-content');

?>

<main id="primary" class="ppc_page_template_main">
	<div class="ppc_page_container">
		<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
				the_content();
			endwhile;
		endif;
		?>
	</div>

</main>


<?php
get_template_part('template-parts/javascript/removeTargetBlank');

get_footer();

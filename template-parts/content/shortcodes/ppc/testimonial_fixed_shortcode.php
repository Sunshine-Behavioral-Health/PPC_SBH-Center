<?php
function testimonial_fixed_shortcode()
{
    ob_start();
?>
    <section class="testimonials_section">
        <div class="testimonial_container">
            <div class="testimonial_image_container">
                <img src="<?php echo get_template_directory_uri() . '/images/testimonial/andrew.png' ?>" alt="" loading="lazy">
            </div>
            <div class="testimonial_content">
                <h3>Daniel Yao</h3>
                <p>Needed this. They gave me the time and space I needed to get back on track. Deff would reccomend 10/10</p>
                <div class="testimonial_content_stars_container">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="" loading="lazy">
                </div>
            </div>
        </div>
    </section>
<?php
    return ob_get_clean();
}

add_shortcode('testimonial_fixed_shortcode', 'testimonial_fixed_shortcode');

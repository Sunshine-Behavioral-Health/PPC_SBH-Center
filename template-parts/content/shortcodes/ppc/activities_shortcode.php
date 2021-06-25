<?php
function activities_shortcode()
{
    ob_start();
?>
    <section class="activities_shortcode_section">
        <div class="activities_shortcode_container">
            <h2>HEADLINE</h2>
            <h4>Subheadline</h4>
            <div class="activities_shortcode_list_wrapper">
                <div class="activities_shortcode_list_container">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri() . '/images/icons/monarch_blue_circle_checkmark.png' ?>" alt="">ACTIVITY</li>
                        <li><img src="<?php echo get_template_directory_uri() . '/images/icons/monarch_blue_circle_checkmark.png' ?>" alt="">ACTIVITY</li>
                        <li><img src="<?php echo get_template_directory_uri() . '/images/icons/monarch_blue_circle_checkmark.png' ?>" alt="">ACTIVITY</li>
                        <li><img src="<?php echo get_template_directory_uri() . '/images/icons/monarch_blue_circle_checkmark.png' ?>" alt="">ACTIVITY</li>
                    </ul>
                </div>

                <div class="activities_shortcode_list_image_container">
                    <img src="<?php echo get_field('activities_shortcode-image', 'option')['url'] ?>" alt="">
                </div>
            </div>
        </div>
    </section>
<?php
    return ob_get_clean();
}

add_shortcode('activities_shortcode', 'activities_shortcode');

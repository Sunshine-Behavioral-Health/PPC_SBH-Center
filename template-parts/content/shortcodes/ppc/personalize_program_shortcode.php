<?php
function personalize_program_shortcode()
{
    ob_start();
?>
    <section class="personalize_program_section">
        <div class="personalize_program_container">
            <div class="personalize_program_content">
                <h2>Personalize Your Program:</h2>
                <p>You can personalize your program according to your personal needs by selecting from a variety of therapies.</p>
                <p>Some of the therapies we offer are:</p>

                <ul>
                    <li><img src="<?php echo get_template_directory_uri() . '/images/icons/checkmark_icon.png' ?>" alt="">Individual Group Therapies</li>
                    <li><img src="<?php echo get_template_directory_uri() . '/images/icons/checkmark_icon.png' ?>" alt="">Cognitive Behavioral Therapy</li>
                    <li><img src="<?php echo get_template_directory_uri() . '/images/icons/checkmark_icon.png' ?>" alt="">Dialectical Behavior Therapy</li>
                    <li><img src="<?php echo get_template_directory_uri() . '/images/icons/checkmark_icon.png' ?>" alt="">Holistic Therapy</li>
                    <li><img src="<?php echo get_template_directory_uri() . '/images/icons/checkmark_icon.png' ?>" alt="">Experiential Therapy</li>
                </ul>
            </div>
            <div class="personalize_program_image" style="background:transparent url(<?php echo get_template_directory_uri() . '/images/personalize.jpg' ?>) no-repeat center center /cover"> </div>
        </div>
    </section>
<?php
    return ob_get_clean();
}

add_shortcode('personalize_program_shortcode', 'personalize_program_shortcode');

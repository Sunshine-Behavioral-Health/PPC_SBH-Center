<?php
function why_center_shortcode()
{
    ob_start();
?>
    <section class="why_center_section">
        <div class="why_center_container">
            <div class="why_center_headlines">
                <h2>Why <?php echo get_field('site_name', 'option') ?>?</h2>
                <p>Our caring staff is dedicated to meet everyone's unique needs by providing a client-centered approach</p>
            </div>
            <div class="why_center_cards_container">
                <div class="why_center_card">
                    <div class="treatment_programs_card_image_container circle_brown">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/medal_icon.png' ?>" alt="">
                    </div>
                    <h4>Fully Licensed & Accredited</h4>
                </div>
                <div class="why_center_card">
                    <div class="treatment_programs_card_image_container circle_green">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/clock_icon.png' ?>" alt="">
                    </div>
                    <h4>24/7 Help</h4>
                </div>
                <div class="why_center_card">
                    <div class="treatment_programs_card_image_container circle_brown">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/calendar_icon.png' ?>" alt="">
                    </div>
                    <h4>Flexible Length of Stay</h4>
                </div>
                <div class="why_center_card">
                    <div class="treatment_programs_card_image_container circle_green">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/handshake_icon.png' ?>" alt="">
                    </div>
                    <h4>Most Insurances Accepted</h4>
                </div>
                <div class="why_center_card">
                    <div class="treatment_programs_card_image_container circle_brown">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/medical_icon.png' ?>" alt="">
                    </div>
                    <h4>Medically Assisted Treatment</h4>
                </div>
                <div class="why_center_card">
                    <div class="treatment_programs_card_image_container circle_green">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/shield_icon.png' ?>" alt="">
                    </div>
                    <h4>100% Confidential & Private</h4>
                </div>
            </div>
        </div>
    </section>
<?php
    return ob_get_clean();
}

add_shortcode('why_center_shortcode', 'why_center_shortcode');

<?php
function accreditation_shortcode($atts)
{
    $atts = shortcode_atts(
        array(
            'paragraph' => ''
        ),
        $atts
    );
    $output = '<section class="accreditation_section">
    <div class="accreditation_container">
        <div class="accreditation_content">
            <h2>Accredidation</h2>';
    $output .= '<p>' . $atts['paragraph'] . '</p></div><div class="accredidation_badges"><div class="badge_image"><img src="' . get_template_directory_uri() . "/images/gold_seal.jpg" . '" alt=""></div><div class="badge_image">' . get_field("legitscript_html", "option") . '</div></div></div></section>';
    return $output;
}


add_shortcode('accreditation_shortcode', 'accreditation_shortcode');

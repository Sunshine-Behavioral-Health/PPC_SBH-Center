<?php
function contact_form_cta($atts)
{

    $atts = shortcode_atts(
        array(
            'headline' => 'Are you or your loved one suffering from addiction?',
            'subheadline' => 'Do you have questions or concerns? Our intake coordinators will answer them.',
        ),
        $atts
    );

    $ctaFormShortcode = '[gravityform id="20" title="false" description="false"]';

    $output = '';
    $output .= '<section class="contact_cta_section contact_form_shortcode_section shortcode_section"><div class="contact_form_cta_container contact_form_shortcode_container"><h4 class="contact_form_cta_headline">' . $atts['headline'] . '</h4>' . '<p>' . $atts['subheadline'] . '</p>';
    $output .= '<div class="short_code_contact_form_cta_form_container"><div class="contact_form_cta_form_container contact_form_shortcode_cta_form_container">' . do_shortcode($ctaFormShortcode) . '</div></div></div></section>';
    return $output;
}
add_shortcode('contact_form_cta', 'contact_form_cta');

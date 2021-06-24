<?php

function interjection_stripe($atts)
{
    $atts = shortcode_atts(
        array(
            'headline' => '',
            'subheadline' => '',
            'have_cta' => '',
            'cta_type' => '',
            'background_color' => ''
        ),
        $atts
    );

    $output = '';
    $output .= '<section class="interjection_stripe_section" style="background-color: var(--' . $atts['background_color'] . '_color) ">';
    $output .= '<div class="interjection_stripe_cta_container">';
    $output .= '<h2>' . $atts['headline'] . '</h2>';
    if (!empty($atts['subheadline'])) {
        $output .= '<h3>' . $atts['subheadline'] . '</h3>';
    }
    if ($atts['cta_type'] == "phone" && $atts['have_cta'] == "true") {
        $output .= '<a href="tel:949-276-2886" class="invocaNumber interjection_stripe_phone_cta">949-276-2886</a>';
    } elseif ($atts['cta_type'] == "insurance" && $atts['have_cta'] == "true") {
        $output .= '<a href="#verify-your-insurance" class="interjection_stripe_verify_insurance_cta">VERIFY INSURANCE</a>';
    }
    $output .= '</div>';
    $output .= '</section>';
    return $output;
}

add_shortcode('interjection_stripe', 'interjection_stripe');

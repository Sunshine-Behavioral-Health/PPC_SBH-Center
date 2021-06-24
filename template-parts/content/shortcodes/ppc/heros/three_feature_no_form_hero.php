<?php
function three_feature_no_form_hero($atts)
{
    $atts = shortcode_atts(
        array(
            'headline' => '',
            'subheadline' => '',
        ),
        $atts
    );

    $output = '';
    $output .= '<section class="three_feature_no_form_hero_section ppc_hero_section" style="background-image: url(' . get_field('ppc_hero_image')['url'] . ')">';
    $output .= '<div class="ppc_hero_container">';
    $output .= '<div class="ppc_hero_wrapper">';
    $output .= '<div class="hero_headline_subheadline">';
    $output .= '<h1>' . $atts['headline'] . '</h1>';
    $output .= '<h3>' . $atts['subheadline'] . '</h3>';
    $output .= '</div>';
    $output .= '<div class="ppc_hero_cta_container">';
    $output .= '<p class="hero_247">We are available 24/7</p>';
    $output .= '<a href="tel:949-276-2886" class="invocaNumber three_feature_no_form_cta cta_box_shadows">949-276-2886</a>';
    $output .= '<p class="hero_cta_subtext">Calls are free & confidential</p>';
    $output .= '<p class="hero_form_link_text">Or Complete this <a href="#verify-your-insurance" class="hero_form_link">Form to get started</a></p>';
    $output .= '</div>';
    $output .= '<div class="hero_three_boxes hide_on_mobile">';
    $output .= '<div class="hero_box">';
    $output .= '<img src="' . get_template_directory_uri() . '/images/icons/person_icon.png' . '" alt="">';
    $output .= '<div class="hero_three_boxes_box_divider"></div>';
    $output .= '<h3>Personalized Treatment Plans</h3>';
    $output .= '</div>';
    $output .= '<div class="hero_box">';
    $output .= '<img src="' . get_template_directory_uri() . '/images/icons/medical_clinic_icon.png' . '" alt="">';
    $output .= '<div class="hero_three_boxes_box_divider"></div>';
    $output .= '<h3>Safe & Comfortable Environment</h3>';
    $output .= '</div>';
    $output .= '<div class="hero_box">';
    $output .= '<img src="' . get_template_directory_uri() . '/images/icons/dollar_sign.png' . '" alt="">';
    $output .= '<div class="hero_three_boxes_box_divider"></div>';
    $output .= '<h3>May be Covered by Insurance</h3>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</section>';
    return $output;
}

add_shortcode('three_feature_no_form_hero', 'three_feature_no_form_hero');

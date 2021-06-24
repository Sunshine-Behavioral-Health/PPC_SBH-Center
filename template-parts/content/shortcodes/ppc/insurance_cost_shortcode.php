<?php
function insurance_cost_shortcode($atts)
{
    $atts = shortcode_atts(
        array(
            'headline_1' => 'Cost',
            'paragraph_1' => 'The cost of rehab varies depending on the program you are interested in and the length of your stay. However, if you are hesitant because of the cost, you should know that paying cash is not your only option.',
            'headline_2' => 'We Work With Many Other Insurances Companies!',
            'paragraph_2' => 'If you have a problem figuring out if, how much, and what kind of addiction rehab treatment your insurance policy will cover, our experts can verify it for you!',
        ),
        $atts
    );

    $output = '<section class="insurance_coverage_section">';
    $output .= '<div class="insurance_coverage_container">';
    $output .= '<div class="insurance_coverage_content">';
    $output .= '<div class="insurance_coverage_content_h2">';
    $output .= '<h2>' . $atts['headline_1'] . '</h2>';
    $output .= '<p>' . $atts['paragraph_1'] . '</p>';
    $output .= '</div>';
    $output .= '<div class="insurance_coverage_content_h3">';
    $output .= '<h3>' . $atts['headline_2'] . '</h3>';
    $output .= '<p>' . $atts['paragraph_2'] . '</p>';
    $output .= '</div>';
    $output .= '<div class="insurance_coverage_content_cta_btn">';
    $output .= '<a href="#verify-your-insurance">VERIFY INSURANCE</a>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div class="insurance_coverage_image hide_on_mobile">';
    $output .= '<h3>We Accept Most Major Insurances</h3>';
    $output .= '<img src="' . get_template_directory_uri() . "/images/insurance.jpg" . '" alt="">';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</section>';
    return $output;
}

add_shortcode('insurance_cost_shortcode', 'insurance_cost_shortcode');

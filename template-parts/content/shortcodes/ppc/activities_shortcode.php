<?php

function activities_shortcode($atts)
{
    $atts = shortcode_atts(
        array(
            'headline' => '',
            'subheadline' => '',
            'activities' => array(
                'activity' => ''
            )
        ),
        $atts
    );
    $no_whitespaces = preg_replace('/\s*,\s*/', ',', filter_var($atts['activities'], FILTER_SANITIZE_STRING));
    $activities = explode(',', $no_whitespaces);

    $output = '';
    $output .= '<section class="activities_shortcode_section">';
    $output .= '<div class="activities_shortcode_container">';
    $output .= '<h2>' . $atts['headline'] . '</h2>';
    $output .= '<h4>' . $atts['subheadline'] . '</h4>';
    $output .= '<div class="activities_shortcode_list_wrapper">';
    $output .= '<div class="activities_shortcode_list_container">';
    $output .= '<ul>';
    foreach ($activities as $k => $v) {
        $output .= '<li><img src="' . get_template_directory_uri() . '/images/icons/monarch_blue_circle_checkmark.png' . '" alt="">' . $v . '</li>';
    }
    $output .= '</ul>';
    $output .= '</div>';
    $output .= '<div class="activities_shortcode_list_image_container">';
    $output .= '<img src="' . get_field('activities_shortcode-image', 'option')['url'] . '" alt="">';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</section>';
    return $output;
}

add_shortcode('activities_shortcode', 'activities_shortcode');

<?php

function headline_with_paragraphs_shortcode($atts)
{
    $atts = shortcode_atts(
        array(
            'headline' => 'headline toast',
            'paragraph_1' => '',
            'paragraph_2' => ''
        ),
        $atts
    );

    $output = '<section class="headline_with_paragraphs_section">
    <div class="headline_with_paragraphs_container">';

    $output .= '<h2>' . $atts['headline'] . '</h2>';
    $output .= '<p>' . $atts['paragraph_1'] . '</p>';
    $output .= '<p>' . $atts['paragraph_2'] . '</p>';

    $output .= '</div></section>';

    return $output;
}

add_shortcode('headline_with_paragraphs_shortcode', 'headline_with_paragraphs_shortcode');

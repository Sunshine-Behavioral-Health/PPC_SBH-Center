<?php

function location_shortcode($atts)
{
    $atts = shortcode_atts(
        array(
            'headline' => '',
            'subheadline' => '',
        ),
        $atts
    );

    $output = '';
    $output .= '<section class="location_section">';
    $output .= '<div class="location_container">';
    $output .= '<div class="location_content">';
    $output .= '<div class="location_content_paragraph">';
    $output .= '<h2>' . $atts['headline'] . '</h2>';
    $output .= '<p>' . $atts['subheadline'] . '</p>';
    $output .= '</div>';
    $output .= '<img src="' . get_field("location_shortcode-map_image", 'option')['url'] . '" alt="">';
    $output .= '</div>';
    $output .= '<div class="location_image">';
    $output .= '<img src="' . get_field('location_shortcode-side_image', 'option')['url'] . '" alt="">';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</section>';

    return $output;
}

add_shortcode('location_shortcode', 'location_shortcode'); ?>


<!-- 

<section class="location_section">
    <div class="location_container">
        <div class="location_content">
            <div class="location_content_paragraph">
                <h2>Headline</h2>
                <p>SUBHEALINE</p>
            </div>
            <img src="<?php get_field("location_shortcode-map_image", 'option')['url'] ?>" alt="">
        </div>
        <div class="location_image">
            <img src="<?php get_field('location_shortcode-side_image', 'option')['url'] ?>" alt="">
        </div>
    </div>
</section>
 -->
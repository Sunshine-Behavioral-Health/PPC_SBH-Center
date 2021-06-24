<?php
function contact_form_hero($atts)
{
    $atts = shortcode_atts(
        array(
            'headline' => '',
            'subheadline' => '',
            'quote' => '',
            'bullet_points' => array(
                'point' => ''
            )
        ),
        $atts
    );

    $no_whitespaces = preg_replace('/\s*,\s*/', ',', filter_var($atts['bullet_points'], FILTER_SANITIZE_STRING));
    $bullet_points = explode(',', $no_whitespaces);

    $ctaFormShortcode = '[gravityform id="20" title="false" description="false"]';


    $output = '';
    $output .= '<section class="contact_form_hero_section ppc_hero_section" style="background-image: url(' . get_field('ppc_hero_image')['url'] . ')">';
    $output .= '<div class="ppc_hero_container">';
    $output .= '<div class="ppc_hero_wrapper">';
    $output .= '<div class="contact_form_hero_wrapper">';
    $output .= '<div class="contact_form_hero_content_wrapper">';
    $output .= '<div class="contact_form_hero_headlines">';
    $output .= '<h1>' . $atts['headline'] . '</h1>';
    $output .= '<p class="contact_form_hero_quote">' . $atts['quote'] . '</p>';
    $output .= '<h3>' . $atts['subheadline'] . '</h3>';
    $output .= '</div>';
    $output .= '<div class="contact_form_hero_list_container">';
    $output .= '<ul>';
    foreach ($bullet_points as $k => $v) {
        $output .= '<li><img src="' . get_template_directory_uri() . '/images/icons/circle_checkmark_icon_white.png' . '" alt="">' . $v . '</li>';
    }
    $output .= '</ul>';
    $output .= '</div>';
    $output .= '<div class="contact_form_hero_ctas_container ">';
    $output .= '<a target="_blank" href="tel:949-276-2886" class="invocaNumber hero_cta_btn" target="_blank">949-276-2886</a>';
    $output .= '<a class="hero_cta_btn" href="#verify-your-insurance">VERIFY INSURANCE</a>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div class="contact_form_hero_form_container">';
    $output .= '<div class="contact_form_hero_form_wrapper">';
    $output .= '<h3>Talk to an Addiction Expert Now!</h3>';
    $output .= do_shortcode($ctaFormShortcode);
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</section>';
    return $output;
}

add_shortcode('contact_form_hero', 'contact_form_hero');

<section class="activities_shortcode_section">
    <div class="activities_shortcode_container">
        <h2>HEADLINE</h2>
        <h4>Subheadline</h4>
        <div class="activities_shortcode_list_wrapper">
            <ul>
                <li><img src="<?php echo get_template_directory_uri() . '/images/icons/monarch_blue_circle_checkmark.png' ?>" alt="">ACTIVITY</li>
            </ul>
            <img src="<?php echo get_field('activities_image', 'option')['url'] ?>" alt="">
        </div>
    </div>
</section>


<?php

foreach ($bullet_points as $k => $v) {
    $output .= '<li><img src="' . get_template_directory_uri() . '/images/icons/circle_checkmark_icon_white.png' . '" alt="">' . $v . '</li>';
}

?>
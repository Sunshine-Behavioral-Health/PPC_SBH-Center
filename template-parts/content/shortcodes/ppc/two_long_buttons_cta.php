<?php
function two_long_buttons_cta()
{
    ob_start();
?>
    <section class="two_buttons_cta_section shortcode_section">
        <div class="two_buttons_cta_container">
            <div class="shortcode_two_buttons_cta shortcode_two_buttons_first_cta">
                <a href="tel:949-276-2886" class="invocaNumber">Talk with a treatment specialist at any time – Call 949-276-2886</a>
            </div>
            <div class="shortcode_two_buttons_cta shortcode_two_buttons_second_cta">
                <a class="" href="/insurance-verification/">Check your insurance coverage</a>
            </div>
        </div>
    </section>
<?php
    return ob_get_clean();
}

add_shortcode('two_long_buttons_cta', 'two_long_buttons_cta');

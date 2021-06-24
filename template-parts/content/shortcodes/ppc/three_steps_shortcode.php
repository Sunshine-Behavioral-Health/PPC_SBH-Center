<?php
function three_steps_shortcode()
{
    ob_start();
?>
    <section class="three_steps_section">
        <h2>Three Steps</h2>
        <h4>Getting started is very simple and it will just take a few minutes.</h4>
        <div class="three_steps_container">
            <div class="three_steps_single_step">
                <p class="three_steps_number number_brown">1</p>
                <h3>Insurance Verification</h3>
                <p class="three_steps_paragraph">Our skilled admissions team has experience with all types of insurance providers to get you the maximum benefits available.</p>
            </div>
            <div class="three_steps_single_step">
                <p class="three_steps_number number_green">2</p>
                <h3>Assessment</h3>

                <p class="three_steps_paragraph">Get a confidential phone assessment to determine if treatment is needed and, if so, which treatment options work best for your specific needs.</p>
            </div>
            <div class="three_steps_single_step">
                <p class="three_steps_number number_brown">3</p>
                <h3>Admissions</h3>

                <p class="three_steps_paragraph">In most cases, we can admit same-day and help arrange for transportation to and from our facility. </p>
            </div>
        </div>
    </section>
<?php
    return ob_get_clean();
}

add_shortcode('three_steps_shortcode', 'three_steps_shortcode');

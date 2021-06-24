<?php
function insurance_verification_form_shortcode()
{
    ob_start();
?>
    <section class="insurance_page_form_section insurance_verification_shortcode_section">
        <div class="insurance_page_form_container">
            <?php $insuranceVerificationGForm = '[gravityform id="' . get_field('insurance_verification_form_id', 'option') . '" title="false" description="false"]';
            echo do_shortcode($insuranceVerificationGForm); ?>
        </div>
    </section>
<?php
    return ob_get_clean();
}

add_shortcode('insurance_verification_form_shortcode', 'insurance_verification_form_shortcode');

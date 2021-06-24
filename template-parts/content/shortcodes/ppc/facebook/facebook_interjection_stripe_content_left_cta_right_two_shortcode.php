<section class="interjection_stripe_content_left_cta_right_one_section <?php if (is_page_template('facebook_page_template.php')) : ?> facebook_color_change <?php endif; ?>">
    <div class="interjection_stripe_content_left_cta_right_one_container">
        <div class="interjection_stripe_content_left_cta_right_one_content">
            <?php if (get_field('interjection_stripe_content_left_cta_right_one_headline')) : ?>
                <h2><?php echo get_field('interjection_stripe_content_left_cta_right_one_headline') ?></h2>
            <?php else : ?>
                <h2>You are not Alone</h2>
            <?php endif; ?>

            <?php if (get_field('interjection_stripe_content_left_cta_right_one_subheadline')) : ?>
                <h3><?php echo get_field("interjection_stripe_content_left_cta_right_one_subheadline") ?></h3>
            <?php else : ?>

                <h3>Our Experienced Staff will be there to help you during every step of your Recovery</h3>
            <?php endif; ?>
        </div>
        <div class="interjection_stripe_content_left_cta_right_one_cta">
            <?php if (get_field('interjection_stripe_content_left_cta_right_one_above_cta_text')) : ?>
                <h4><?php echo get_field('interjection_stripe_content_left_cta_right_one_above_cta_text') ?></h4>
            <?php else :  ?>
                <h4>Call Us Now!</h4>
            <?php endif; ?>
            <div class="interjrection_stripe_content_left_cta_right_cta_wrapper">
                <a href="tel:844-477-0262 " class="cta_left cta_box_shadows">(844) 477-0262</a>
            </div>
        </div>
    </div>
</section>
<section class="interjection_stripe_with_cta_two_section <?php if (is_page_template('facebook_page_template.php')) : ?> facebook_color_change <?php endif; ?>">
    <div class="interjection_stripe_with_cta_two_container <?php if (is_page_template('facebook_page_template.php')) : ?> interjection_stripe_with_cta_two_container_facebook <?php endif; ?> ">
        <?php if (get_field('interjection_stripe_with_cta_two_text')) : ?>
            <h2><?php echo get_field('interjection_stripe_with_cta_two_text') ?></h2>
        <?php else : ?>
            <h2>Talk to a Counselor Today</h2>
        <?php endif; ?>

        <?php if (get_field('interjection_stripe_with_cta_two_subtext')) : ?>
            <h3><?php echo get_field('interjection_stripe_with_cta_two_subtext') ?></h3>
        <?php else : ?>
            <h3>Discover all the Treatment Options we Have for you</h3>
        <?php endif; ?>
        <a href="tel:844-477-0262 " class="cta_box_shadows invocaNumber cta_left">(844) 477-0262</a>
    </div>
</section>
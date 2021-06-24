<section class="interjection_stripe_with_cta_three_section <?php if (is_page_template('facebook_page_template.php')) : ?> facebook_color_change <?php endif; ?>">
    <div class="interjection_stripe_with_cta_three_container <?php if (is_page_template('facebook_page_template.php')) : ?> interjection_stripe_with_cta_three_container_facebook <?php endif; ?>">
        <?php if (get_field('interjection_stripe_with_cta_three_text')) : ?>
            <h2><?php echo get_field('interjection_stripe_with_cta_three_text') ?></h2>
        <?php else : ?>
            <h2>Talk to a Counselor Today</h2>
        <?php endif; ?>

        <?php if (get_field('interjection_stripe_with_cta_three_subtext')) : ?>
            <h3><?php echo get_field('interjection_stripe_with_cta_three_subtext') ?></h3>
        <?php else : ?>
            <h3>Get started on your Road to Recovery. It just takes a Few Minutes!</h3>
        <?php endif; ?>
        <a href="tel:844-477-0262 " class="cta_box_shadows cta_left">(844) 477-0262</a>
    </div>
</section>
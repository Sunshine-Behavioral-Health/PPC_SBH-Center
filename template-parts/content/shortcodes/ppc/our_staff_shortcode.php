<?php
function our_staff_shortcode()
{
    ob_start();
?>
    <section class=our_staff_shortcode_section>
        <div class="staff_cards_container">
            <?php if (have_rows('our_staff_shortcode-ppc_staff_repeater', 'option')) :
                while (have_rows('our_staff_shortcode-ppc_staff_repeater', 'option')) : the_row(); ?>
                    <div class="staff_card">
                        <div class="staff_card_wrapper">
                            <img src="<?php echo get_sub_field('staff_image', 'option')['url'] ?>" alt="">
                            <p class="staff_name"><?php echo get_sub_field('staff_name', 'option'); ?></p>
                            <p class="staff_title">— <?php echo get_sub_field('staff_title', 'option'); ?> —</p>
                            <p class="staff_bio"><?php echo get_sub_field('staff_bio', 'option'); ?></p>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>
<?php
    return ob_get_clean();
}

add_shortcode('our_staff_shortcode', 'our_staff_shortcode');

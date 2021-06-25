<?php
function amenities_carousel()
{
    ob_start();
?>
    <section class="amenities_section">
        <div class="amenities_container">
            <div class="amenities_headlines">
                <h2>Amenities</h2>
                <p>Activities have a recovery component and many include meetings with speakers, guided meditation, or group discussion on gratitude. Our clients are always supervised during experiential learning activities because your safety and the safety of your loved ones is our top priority.</p>
            </div>
            <div class="glide carousel">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <?php if (have_rows('amenities_carousel-repeater', 'option')) :
                            while (have_rows('amenities_carousel-repeater', 'option')) : the_row(); ?>
                                <li class="glide__slide"><img src="<?php echo get_sub_field('image', 'option')['url'] ?>" alt=""></li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var sliders = document.querySelectorAll('.glide');
            for (var i = 0; i < sliders.length; i++) {
                var glide = new Glide(sliders[i], {
                    gap: 5,
                    perView: 3,
                    autoplay: 2500,
                    hoverpause: true,
                    keyboard: true,
                    breakpoints: {
                        756: {
                            perView: 1
                        }
                    }
                });
                glide.mount();
            }
        });
    </script>
<?php
    return ob_get_clean();
}

add_shortcode('amenities_carousel', 'amenities_carousel');

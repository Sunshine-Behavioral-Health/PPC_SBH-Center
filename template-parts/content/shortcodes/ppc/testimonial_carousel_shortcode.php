<?php
function testimonial_carousel_shortcode()
{
  ob_start();
?>

  <!-- 


  Need to rebuild using Glide.js. Currently uses bootstrap

 -->
  <section class="testimonials_section <?php if (is_page_template('facebook_page_template.php')) : ?> facebook_color_change <?php endif; ?>">
    <div class="testimonial_container">
      <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testimonial_wrapper">
              <div class="testimonial_image_container">
                <img src="<?php echo get_template_directory_uri() . '/images/testimonial/cody.jpg' ?>" alt="">
              </div>
              <div class="testimonial_content">
                <h3>Cody</h3>
                <p>I was completely defeated when I reached out to <?php echo get_field('site_name', 'option') ?>... I feared leaving my hometown but looking back it was the best thing I could have done. This program changed my life in ways I didn't know were possible.. like getting my family back and finding out who I am without drugs and learning to like that person. I now have 5 months clean/sober and it wouldn't of been possible without the team at <?php echo get_field('site_name', 'option') ?>.
                </p>
                <div class="testimonial_content_stars_container">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial_wrapper">
              <div class="testimonial_image_container">
                <img src="<?php echo get_template_directory_uri() . '/images/testimonial/miranda.jpg' ?>" alt="">
              </div>
              <div class="testimonial_content">
                <h3>Miranda</h3>
                <p>I had an amazing experience at <?php echo get_field('site_name', 'option') ?>! They helped me so much! That are all very caring and very helpful! They made me feel very comfortable! I would totally recommend this place to anyone fighting addiction or alcoholism! Everyone is absolutely amazing and it’s a beautiful place!!!</p>
                <div class="testimonial_content_stars_container">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial_wrapper">
              <div class="testimonial_image_container">
                <img src="<?php echo get_template_directory_uri() . '/images/testimonial/greg.jpg' ?>" alt="">
              </div>
              <div class="testimonial_content">
                <h3>Greg</h3>
                <p>After several failures through the years I was given a solid foundation and the opportunity to work through and let go of many things that were holding me back. I owe <?php echo get_field('site_name', 'option') ?> a debt of gratitude I can only pay back by remaining sober one day at a time for the rest of my life Thanks to all of you at <?php echo get_field('site_name', 'option') ?>
                </p>
                <div class="testimonial_content_stars_container">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                  <img src="<?php echo get_template_directory_uri() . '/images/icons/circle_star_icon.png' ?>" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
  return ob_get_clean();
}

add_shortcode('testimonial_carousel_shortcode', 'testimonial_carousel_shortcode');

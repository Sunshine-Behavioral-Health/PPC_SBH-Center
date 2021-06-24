    <?php
    $sitePlusIconUrl;
    $uploadDir = wp_upload_dir();
    $siteName = get_field('site_name', 'option');

    if ($siteName == "Chapters Capistrano") : $sitePlusIconUrl = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/plus_icon_chapters.png';
    elseif ($siteName == "Lincoln Recovery") : $sitePlusIconUrl = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/plus_icon_lincoln.png';
    elseif ($siteName == "Monarch Shores") : $sitePlusIconUrl = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/plus_icon_monarch.png';
    elseif ($siteName == "Mountain Springs Recovery") : $sitePlusIconUrl = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/plus_icon_mountain.png';
    elseif ($siteName == "Willow Springs Recovery") : $sitePlusIconUrl = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/plus_icon_willow.png';
    endif;

    ?>

    <script>
      jQuery(document).ready(function(e) {
        var t, a, n, o = e("<ol></ol>").addClass("toc");
        e("h2").each(function() {
          var r = e(this).text().replace(/[^a-zA-Z0-9 ]/g, "").replace(/\s/g, "-").toLowerCase();
          e(this).attr("id", r), t = e(this), a = t.text(), n = "#" + t.attr("id"), newLine = "<li><a href='" + n + "'>" + a + "</a></li>", o.append(newLine)
        }), document.querySelectorAll("h2").length > 0 && e(".page_content").prepend(o), o.find("a").on("click", function() {
          var t = e(this).attr("href");
          return e("html, body").animate({
            scrollTop: e(t).offset().top
          }, 500), !1
        }), e(".toc").prepend("<div class='toc_dropdown'><img src='<?php echo $sitePlusIconUrl; ?>'></div>"), e(".toc").prepend("<h5>Table of Contents</h5>")
      });
    </script>
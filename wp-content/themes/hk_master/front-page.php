<?php
/**
 * DEFAULT TEMPLATE
 *
 * This is the global default template. If WordPress can't find a more appropriate, specific template file,
 * it will use this one.
 */
use \NV\Theme\Utilities\Theme;

Theme::get_header();
Theme::output_file_marker(__FILE__);
?>

    <div class="frame-screen"></div>

    <div class="front-page">

        <div class="bg-svg"></div>

        <?php get_template_part("parts/home/blog") ?>

        <div class="menu">
            <div class="inner">

                <?php wp_nav_menu([
                    'theme_location' => 'primary'
                ]) ?>
                <div class="hide-for-medium">
                    <?php wp_nav_menu([
                        'theme_location' => 'footer'
                    ]) ?>
                </div>
                <div class="hide-for-medium hk-mobile-hide">
                    <p>Exit Menu</p>
                </div>
            </div>
        </div>

        <div class="title-block"></div>

        <div class="hide-for-medium">
            <div class="mobile-launch">
                <i class="icon-menu"></i>
                <p>menu</p>
            </div>
        </div>

    </div>
<?php
Theme::get_footer();
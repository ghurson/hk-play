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

    <div class="front-page">

        <div class="bg-svg"></div>

        <div class="menu">
            <div class="title-block"></div>

            <?php wp_nav_menu([
                'theme_location' => 'primary'
            ]) ?>

        </div>


        <?php GH\Display::footer() ?>

    </div>
<?php
Theme::get_footer();
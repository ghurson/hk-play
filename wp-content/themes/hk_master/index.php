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
<?php get_template_part("parts/interior/header") ?>
    <div id="container" class="row">
        <div id="content" class="medium-10 medium-centered columns">
            <?php Theme::loop('parts/article', 'parts/article-empty') ?>

        </div>
    </div>

    <div class="falling_graphic">
        <object data="<?php print HK_SVG ?>/falling.svg" type="image/svg+xml"></object>
    </div>

<?php GH\Display::footer() ?>
<?php
Theme::get_footer();
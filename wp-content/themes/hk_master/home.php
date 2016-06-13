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

        <div class="columns">
            <h2 class="blog_title">Inside Job Blog</h2>

            <div class="blog_content">
                <?php the_field("content", 21) ?>
            </div>
        </div>

        <div id="content" class="blog-container columns">

            <div class="small-up-1 medium-up-2">
                <?php Theme::loop('parts/excerpt', 'parts/excerpt-empty') ?>
            </div>
            <?php GH\Display::pagination() ?>

        </div>
    </div>

    <div class="falling_graphic">
        <object data="<?php print HK_SVG ?>/falling.svg" type="image/svg+xml"></object>
    </div>

<?php GH\Display::footer() ?>
<?php
Theme::get_footer();
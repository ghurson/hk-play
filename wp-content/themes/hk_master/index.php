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
        <div id="content" class="small-12 large-8 columns">
            <?php //Theme::archive_nav( array( 'id' => 'nav-top' ) ) ?>
            <?php wp_link_pages(); ?>

            <?php Theme::loop('parts/article', 'parts/article-empty') ?>

            <?php paginate_links(); ?>

            <?php get_template_part('parts/archive-nav') ?>
        </div>

        <div id="sidebar" class="small-12 large-4 columns">
            <p>sidebar here</p>
        </div>

    </div>
<?php GH\Display::footer() ?>
<?php
Theme::get_footer();
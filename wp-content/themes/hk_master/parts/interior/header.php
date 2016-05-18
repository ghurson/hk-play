<div class="hk_header row">

    <object data="<?php print HK_SVG ?>/title-no-byline.svg" type="" class="header_logo" data-url="<?php print site_url() ?>"></object>

    <?php wp_nav_menu([
        'theme_location' => 'primary',
        'menu_class' => 'hk_header_menu'
    ]) ?>
</div>
<div class="hk_header row">

    <object data="<?php print HK_SVG ?>/title-no-byline.svg" type="" class="header_logo"
            data-url="<?php print site_url() ?>"></object>

    <div class="show-for-medium hk-desktop-menu">
        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class' => 'hk_header_menu'
        ]) ?>
    </div>


    <div class="hide-for-medium">
        <p class="mobile-menu-launch"><i class="icon-menu"></i></p>
    </div>
</div>

<div class="hide-for-medium">
    <div class="mobile-menu-container">
    <?php wp_nav_menu([
        'theme_location' => 'primary',
        'menu_class' => 'hk_header_menu'
    ]) ?>
    </div>
</div>
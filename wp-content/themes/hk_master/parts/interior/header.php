<div class="hk_header row">

    <div class="header_logo">
        <a href="<?php print site_url() ?>">
            <object data="<?php print HK_SVG ?>/title-no-byline.svg"></object>
        </a>
    </div>

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
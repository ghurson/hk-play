<?php

namespace GH;

define(ROOT, '/hk/');

define(HK_SVG, ROOT . '/wp-content/themes/hk_master/assets/svg/');

class Display
{

    static function footer()
    {

        if (is_front_page()):
            get_template_part("parts/global/footer");
        else:
            get_template_part("parts/interior/footer");
        endif;

    }
}
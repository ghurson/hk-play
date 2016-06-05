<?php

namespace GH;

define(ROOT, get_site_url());

define(HK_SVG, ROOT . '/wp-content/themes/hk_master/assets/svg');
define(HK_FONT, ROOT . '/wp-content/themes/hk_master/assets/font');
define(HK_SWF, ROOT . '/wp-content/themes/hk_master/assets/swf');

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

    static function pagination($query = false)
    {

        if (!function_exists('wp_pagenavi')) return false;

        if ($query):
            wp_pagenavi(['query' => $query]);
        else:
            wp_pagenavi();
        endif;

    }

    static function guitar_licks($id){
        if($id != 25) return false;
        get_template_part("parts/guitar-licks");
    }

    static function videos($id){
        if($id != 23) return false;
        get_template_part("parts/videos");
    }

    static function get_logo(){

        $id = get_the_ID();

        $clean_pages = [17, 19, 92];

        $title = in_array($id, $clean_pages) ? 'title-clean' : 'title-kills';

        print $title;

    }

}

class Blog {
    static function get_posts($amount = 3){

        $query = new \WP_Query([
            'posts_per_page' => $amount
        ]);

        return $query->found_posts ? $query->posts : false;



    }
}

class Video {

    static function get_ID($video_url = false){

        if(!$video_url) return false;

        $dom = new \DOMDocument();
        $dom->loadHTML($video_url);
        $iframe = $dom->getElementsByTagName('iframe');
        $url = '';
        foreach($iframe as $tag) {
            $url = $tag->getAttribute('src');
        }
        $output = parse_url($url, PHP_URL_PATH);
        $pieces = array_filter(explode('/', $output));
        $id = end($pieces);

        return $id;

    }

}
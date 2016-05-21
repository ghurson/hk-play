// =====================================================================================================================
// PRIMARY THEME JAVASCRIPT FILE
//
// This is your public-facing, front-end Javascript. It compiles to assets/js/app.min.js in your theme directory.
//
// This is used to initialize your custom Javascript. If you would like to change how Foundation and it's plugins are
// initialized, you can. See http://foundation.zurb.com/docs/javascript.html for documentation.
// =====================================================================================================================

function init_jsddm() {
    var timeout = 500;
    var closetimer = 0;
    var ddmenuitem = 0;
    var speed = 250;

    function jsddm_open() {
        jsddm_canceltimer();
        jsddm_close();
        ddmenuitem = $(this).find('ul').stop().slideDown(speed);
    }

    function jsddm_close() {
        if (ddmenuitem) ddmenuitem.stop().slideUp(speed);
    }

    function jsddm_timer() {
        closetimer = window.setTimeout(jsddm_close, timeout);
    }

    function jsddm_canceltimer() {
        if (closetimer) {
            window.clearTimeout(closetimer);
            closetimer = null;
        }
    }

    $(document).ready(function () {

        $('.hk_desktop_menu .hk_header_menu > li').bind('mouseover', jsddm_open);
        $('.hk_desktop_menu .hk_header_menu > li').bind('mouseout', jsddm_timer);
        if($('body').hasClass("home")) return;
        $('#menu-main-menu > li').bind('mouseover', jsddm_open);
        $('#menu-main-menu > li').bind('mouseout', jsddm_timer);
    });

    document.onclick = jsddm_close;
}

function init_bg_tween() {

    TweenMax.to(".home .frame-screen", 2, {opacity: 0, 'delay': 1});

}

function init_url_click() {

    var obj = $("*[data-url]");

    obj.css("cursor", "pointer");

    obj.click(function () {
        console.log($(this).data("href"));
        window.location.href = $(this).data("url");
    })

}

function init_mobile_menu() {

    $(".mobile-menu-launch").click(function () {
        $(".hk_header").toggleClass("active");
        $(".mobile-menu-container .hk_header_menu").stop().slideToggle();
    })

}

function init_carousel(){

    var carousel = $(".home-blog .owl-carousel");

    if(!carousel.length) return false;

    carousel.owlCarousel({
        loop: true,
        center: true,
        items: 1
    });

}

function init_audio_player(){
    return false;
    soundManager.setup({
        url: '/wp-content/themes/hk_master/swf/soundmanager2.swf',
        onready: function() {
            var mySound = soundManager.createSound({
                id: 'aSound',
                url: 'http://104.130.5.185/hk/wp-content/uploads/2016/05/sample-hail-to-the-chief.mp3'
            });
            mySound.play();
        },
        ontimeout: function() {
            // Hrmm, SM2 could not start. Missing SWF? Flash blocked? Show an error, etc.?
        }
    });
}



init_jsddm();
init_bg_tween();
init_url_click();
init_mobile_menu();
init_carousel();
init_audio_player();

$(document).foundation();

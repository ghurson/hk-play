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
        if ($('body').hasClass("home")) return;
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

    if (!$("body").hasClass("home")) return;

    $(".mobile-launch").click(function () {
        $('.mobile-launch').stop().slideUp();
        $(".home .menu").stop().slideDown();
    });

    $(".hk-mobile-hide p").click(function () {
        $(".home .menu").stop().slideUp();
        $(".mobile-launch").stop().slideDown();
    })

}

function init_carousel() {

    var carousel = $(".home-blog .owl-carousel");

    if (!carousel.length) return false;

    carousel.owlCarousel({
        loop: true,
        center: false,
        autoplay: true,
        autoplayTimeout: 7500,
        margin: 30,
        responsive: {
            0: {
                items: 1,
                margin: 0
            },
            1500: {
                items: 2
            }
        }
    });

}

function init_video_player() {

    var player_objs = $(".hk_videos .video");

    if (!player_objs.length) return false;

    var players = [];

    player_objs.each(function () {
        var id = $(this).data("vid_id");

        var player = new YT.Player('vid_' + id, {
            height: '390',
            width: '640',
            videoId: id
        });
        players.push(player);
    });

    var video_top_slider = $(".video-slider").owlCarousel({
        loop: true,
        items: 1,
        touchDrag: false
    });

    var video_bottom_slider = $(".video-bottom-slider").owlCarousel({
        loop: true,
        center: true,
        margin: 15,
        responsive: {
            0: {
                items: 3
            },
            640: {
                items: 6
            }

        }
    });


    $(".bottom_poster").click(function () {
        var id = $('.video-slider .active .video').data("index");
        players[id].pauseVideo();
        video_top_slider.trigger("to.owl.carousel", $(this).data("index"));
        video_bottom_slider.trigger("to.owl.carousel", $(this).data("index"));
    })


}

// This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
    init_video_player();
}


init_jsddm();
init_bg_tween();
init_url_click();
init_mobile_menu();
init_carousel();


$(document).foundation();

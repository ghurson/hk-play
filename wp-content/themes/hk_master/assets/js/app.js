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
        $('.hk_header_menu > li').bind('mouseover', jsddm_open);
        $('.hk_header_menu > li').bind('mouseout', jsddm_timer);
        $('#menu-main-menu > li').bind('mouseover', jsddm_open);
        $('#menu-main-menu > li').bind('mouseout', jsddm_timer);
    });

    document.onclick = jsddm_close;
}

function init_bg_tween(){

    TweenMax.to(".home #frame", 2, {backgroundColor: "#4f1716", 'delay': 2});

}


function init_url_click(){

    var obj = $("*[data-url]");

    obj.addClass("testing");

    obj.css("cursor","pointer");

    obj.click(function(){
        console.log($(this).data("href"));
        window.location.href = $(this).data("url");
    })

}


init_jsddm();
init_bg_tween();
init_url_click();

$(document).foundation();

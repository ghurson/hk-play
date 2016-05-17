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

    function jsddm_open() {
        jsddm_canceltimer();
        jsddm_close();
        ddmenuitem = $(this).find('ul').css('visibility', 'visible');
    }

    function jsddm_close() {
        if (ddmenuitem) ddmenuitem.css('visibility', 'hidden');
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
    });

    document.onclick = jsddm_close;
}


$(function () {

    init_jsddm();

});

$(document).foundation();

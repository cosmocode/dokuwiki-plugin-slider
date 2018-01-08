/* DOKUWIKI:include_once jquery.bxslider.js */

jQuery(function(){
    jQuery('ul.plugin_slider').bxSlider({

        // general settings
        mode                : JSINFO['plugin_slider']['mode'],
        infiniteLoop        : JSINFO['plugin_slider']['infiniteLoop'],
        hideControlOnEnd    : JSINFO['plugin_slider']['hideControlOnEnd'],
        speed               : JSINFO['plugin_slider']['speed'],
        easing              : JSINFO['plugin_slider']['easing'],
        slideMargin         : JSINFO['plugin_slider']['slideMargin'],
        startSlide          : JSINFO['plugin_slider']['startSlide'],
        randomStart         : JSINFO['plugin_slider']['randomStart'],
        captions            : JSINFO['plugin_slider']['captions'],
        ticker              : JSINFO['plugin_slider']['ticker'],
        tickerHover         : JSINFO['plugin_slider']['tickerHover'],
        adaptiveHeight      : JSINFO['plugin_slider']['adaptiveHeight'],
        adaptiveHeightSpeed : JSINFO['plugin_slider']['adaptiveHeightSpeed'],
        video               : JSINFO['plugin_slider']['video'],
        useCSS              : JSINFO['plugin_slider']['useCSS'],
        preloadImages       : JSINFO['plugin_slider']['preloadImages'],
        responsive          : JSINFO['plugin_slider']['responsive'],

        // pager
        pager               : JSINFO['plugin_slider']['pager'],
        pagerType           : JSINFO['plugin_slider']['pagerType'],
        pagerShortSeparator : JSINFO['plugin_slider']['pagerShortSeparator'],

        // controls
        controls            : JSINFO['plugin_slider']['controls'],
        nextText            : JSINFO['plugin_slider']['nextText'],
        prevText            : JSINFO['plugin_slider']['prevText'],
        autoControls        : JSINFO['plugin_slider']['autoControls'],
        startText           : JSINFO['plugin_slider']['startText'],
        stopText            : JSINFO['plugin_slider']['stopText'],
        autoControlsCombine : JSINFO['plugin_slider']['autoControlsCombine'],

        // auto
        auto                : JSINFO['plugin_slider']['auto'],
        pause               : JSINFO['plugin_slider']['pause'],
        autoStart           : JSINFO['plugin_slider']['autoStart'],
        autoDirection       : JSINFO['plugin_slider']['autoDirection'],
        autoHover           : JSINFO['plugin_slider']['autoHover'],
        autoDelay           : JSINFO['plugin_slider']['autoDelay'],

        // carousel
        minSlides           : JSINFO['plugin_slider']['minSlides'],
        maxSlides           : JSINFO['plugin_slider']['maxSlides'],
        moveSlides          : JSINFO['plugin_slider']['moveSlides'],
        slideWidth          : JSINFO['plugin_slider']['slideWidth'],

        // touch
        touchEnabled         : JSINFO['plugin_slider']['touchEnabled'],
        swipeThreshold       : JSINFO['plugin_slider']['swipeThreshold'],
        oneToOneTouch        : JSINFO['plugin_slider']['oneToOneTouch'],
        preventDefaultSwipeX : JSINFO['plugin_slider']['preventDefaultSwipeX'],
        preventDefaultSwipeY : JSINFO['plugin_slider']['preventDefaultSwipeY']



    });
});

<?php
/**
 * english language file for slider plugin
 *
 * @author Andreas Gohr <gohr@cosmocode.de>
 * @author Michael Bohn <mjbohn@gmail.com>
 */


$lang['width'] = 'Width of loaded images. Images will be downloaded in this size and up or downscaled by the browser.';

// general settings
$lang['mode']                = 'Type of transition between slides';
$lang['infiniteLoop']        = 'If true, clicking "Next" while on the last slide will transition to the first slide and vice-versa';
$lang['hideControlOnEnd']    = 'If true, "Prev" and "Next" controls will receive a class disabled when slide is the first or the last
Note: Only used when infiniteLoop: false';
$lang['speed']               = 'Slide transition duration (in ms)';
$lang['easing']              = "The type of 'easing' to use during transitions. If using CSS transitions, include a value for the transition-timing-function property. If not using CSS transitions, you may include plugins/jquery.easing.1.3.js for many options.
See <a href='http://gsgd.co.uk/sandbox/jquery/easing/' target='_blank'>gsgd.co.uk/sandbox/jquery/easing/</a> for more info. options: if using CSS: 'linear', 'ease', 'ease-in', 'ease-out', 'ease-in-out', 'cubic-bezier(n,n,n,n)'. If not using CSS: 'swing', 'linear' ";
$lang['slideMargin']         = 'Margin between each slide';
$lang['startSlide']          = 'Starting slide index (zero-based)';
$lang['randomStart']         = 'Start slider on a random slide';
$lang['captions']            = 'Include image captions. Captions are derived from the image\'s title attribute';
$lang['ticker']              = 'Use slider in ticker mode (similar to a news ticker). Ticker-speed depends on transition duration. Set slider.speed to "slider.speed * number of pictures"  ';
$lang['tickerHover']         = 'Ticker will pause when mouse hovers over slider. Note: this functionality does NOT work if using CSS transitions!';
$lang['adaptiveHeight']      = 'Dynamically adjust slider height based on each slide\'s height';
$lang['adaptiveHeightSpeed'] = 'Slide height transition duration (in ms). Note: only used if adaptiveHeight: true';
$lang['video']               = 'If any slides contain video, set this to true. Also, include plugins/jquery.fitvids.js
See http://fitvidsjs.com/ for more info';
$lang['useCSS']              = 'If true, CSS transitions will be used for horizontal and vertical slide animations (this uses native hardware acceleration). If false, jQuery animate() will be used.';
$lang['preloadImages']       = "If 'all', preloads all images before starting the slider. If 'visible', preloads only images in the initially visible slides before starting the slider (tip: use 'visible' if all slides are identical dimensions)";
$lang['responsive']          = 'Enable or disable auto resize of the slider. Useful if you need to use fixed width sliders.';

// pager
$lang['pager']                 = 'If true, a pager will be added';
$lang['pagerType']             = 'If \'full\', a pager link will be generated for each slide. If \'short\', a x / y pager will be used (ex. 1 / 5)';
$lang['pagerShortSeparator']   = 'If pagerType: \'short\', pager will use this value as the separating character';

// controls
$lang['controls']            = 'If true, "Next" / "Prev" controls will be added';
$lang['nextText']            = 'Text to be used for the "Next" control';
$lang['prevText']            = 'Text to be used for the "Prev" control';
$lang['autoControls']        = 'If true, "Start" / "Stop" controls will be added';
$lang['startText']           = 'Text to be used for the "Start" control';
$lang['stopText']            = 'Text to be used for the "Stop" control';
$lang['autoControlsCombine'] = 'When slideshow is playing only "Stop" control is displayed and vice-versa';

// auto
$lang['auto']          = 'Slides will automatically transition';
$lang['pause']         = 'The amount of time (in ms) between each auto transition';
$lang['autoStart']     = 'Auto show starts playing on load. If false, slideshow will start when the "Start" control is clicked';
$lang['autoDirection'] = 'The direction of auto show slide transitions';
$lang['autoHover']     = 'Auto show will pause when mouse hovers over slider';
$lang['autoDelay']     = 'Time (in ms) auto show should wait before starting';

// carousel
$lang['minSlides']  = 'The minimum number of slides to be shown. Slides will be sized down if carousel becomes smaller than the original size.';
$lang['maxSlides']  = 'The maximum number of slides to be shown. Slides will be sized up if carousel becomes larger than the original size.';
$lang['moveSlides'] = 'The number of slides to move on transition. This value must be >= minSlides, and <= maxSlides. If zero (default), the number of fully-visible slides will be used.';
$lang['slideWidth'] = 'The width of each slide. This setting is required for all horizontal carousels!';

// touch
$lang['touchEnabled']         = 'If true, slider will allow touch swipe transitions';
$lang['swipeThreshold']       = 'Amount of pixels a touch swipe needs to exceed in order to execute a slide transition. Note: only used if touchEnabled: true';
$lang['oneToOneTouch']        = 'If true, non-fade slides follow the finger as it swipes';
$lang['preventDefaultSwipeX'] = 'If true, touch screen will not move along the x-axis as the finger swipes';
$lang['preventDefaultSwipeY'] = 'If true, touch screen will not move along the y-axis as the finger swipes';


//Setup VIM: ex: et ts=4 :

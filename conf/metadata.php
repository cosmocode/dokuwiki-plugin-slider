<?php
/**
 * Options for the slider plugin
 *
 * @author Andreas Gohr <gohr@cosmocode.de>
 * @author Michael Bohn <mjbohn@gmail.com>
 */


$meta['width'] = array('numeric', '_min' => 100);

// general settings
$meta['mode']                = array('multichoice', _choices => array('horizontal', 'vertical', 'fade'));
$meta['infiniteLoop']        = array('onoff');
$meta['hideControlOnEnd']    = array('onoff');
$meta['speed']               = array('numeric');
$meta['easing']              = array('string');
$meta['slideMargin']         = array('numeric');
$meta['startSlide']          = array('numeric');
$meta['randomStart']         = array('onoff');
$meta['captions']            = array('onoff');
$meta['ticker']              = array('onoff');
$meta['tickerHover']         = array('onoff');
$meta['adaptiveHeight']      = array('onoff');
$meta['adaptiveHeightSpeed'] = array('numeric');
$meta['video']               = array('onoff');
$meta['useCSS']              = array('onoff');
$meta['preloadImages']       = array('multichoice', _choices => array('all', 'visible'));
$meta['responsive']          = array('onoff');

// pager
$meta['pager']                = array('onoff');
$meta['pagerType']            = array('multichoice', _choices => array('full','short'));
$meta['pagerShortSeparator']  = array('string');

// controls
$meta['controls']            = array('onoff');
$meta['nextText']            = array('string');
$meta['prevText']            = array('string');
$meta['autoControls']        = array('onoff');
$meta['startText']           = array('string');
$meta['stopText']            = array('string');
$meta['autoControlsCombine'] = array('onoff');

// auto
$meta['auto']          = array('onoff');
$meta['pause']         = array('numeric');
$meta['autoStart']     = array('onoff');
$meta['autoDirection'] = array('string');
$meta['autoHover']     = array('onoff');
$meta['autoDelay']     = array('numeric');

// carousel
$meta['minSlides']  = array('numeric');
$meta['maxSlides']  = array('numeric');
$meta['moveSlides'] = array('numeric');
$meta['slideWidth'] = array('numeric');

// touch
$meta['touchEnabled']         = array('onoff');
$meta['swipeThreshold']       = array('numeric');
$meta['oneToOneTouch']        = array('onoff');
$meta['preventDefaultSwipeX'] = array('onoff');
$meta['preventDefaultSwipeY'] = array('onoff');



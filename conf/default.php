<?php
/**
 * Default settings for the slider plugin
 *
 * @author Andreas Gohr <gohr@cosmocode.de>
 * @author Michael Bohn <mjbohn@gmail.com>
 *
 * Option for BxSlider v4.1.1
 */

$conf['width']               = 800;

// general settings
$conf['mode']                = 'horizontal';
$conf['infiniteLoop']        = true;
$conf['hideControlOnEnd']    = false;
$conf['speed']               = 500;
$conf['easing']              = null;
$conf['slideMargin']         = 0;
$conf['startSlide']          = 0;
$conf['randomStart']         = false;
$conf['captions']            = false;
$conf['ticker']              = false;
$conf['tickerHover']         = false;
$conf['adaptiveHeight']      = false;
$conf['adaptiveHeightSpeed'] = 500;
$conf['video']               = false;
$conf['useCSS']              = true;
$conf['preloadImages']       = 'visible';
$conf['responsive']          = true;

// pager
$conf['pager']                = true;
$conf['pagerType']            = 'full';
$conf['pagerShortSeparator']  = '/';

// controls
$conf['controls']            =  true;
$conf['nextText']            =  'Next';
$conf['prevText']            =  'Prev';
$conf['autoControls']        =  false;
$conf['startText']           =  'Start';
$conf['stopText']            =  'Stop';
$conf['autoControlsCombine'] =  false;

// auto
$conf['auto']          = false;
$conf['pause']         = 4000;
$conf['autoStart']     = true;
$conf['autoDirection'] = 'next';
$conf['autoHover']     = false;
$conf['autoDelay']     = 0;

// carousel
$conf['minSlides']  = 1;
$conf['maxSlides']  = 1;
$conf['moveSlides'] = 0;
$conf['slideWidth'] = 0;

// touch
$conf['touchEnabled'] = true;
$conf['swipeThreshold'] = 50;
$conf['oneToOneTouch'] = true;
$conf['preventDefaultSwipeX'] = true;
$conf['preventDefaultSwipeY'] = false;

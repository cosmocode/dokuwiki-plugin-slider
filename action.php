<?php
/**
 * DokuWiki Plugin slider (Syntax Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Andreas Gohr <gohr@cosmocode.de>
 * @author Michael Bohn <mjbohn@gmail.com>
 */

if(!defined('DOKU_INC')) die();  // no Dokuwiki, no go

class action_plugin_slider extends DokuWiki_Action_Plugin
{
    /**
     * Register the handle function in the controller
     *
     * @param Doku_event_handler $controller The event controller
     */
    function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook('DOKUWIKI_STARTED', 'AFTER', $this, 'addconfig2js');
    }


    /**
     * @param $event
     * @param $params
     */
    function addconfig2js ($event, $params) {
        global $JSINFO;

        $JSINFO['plugin_slider'] = array(

            // general settings
            'mode'                => $this->getConf('mode'),
            'infiniteLoop'        => $this->getConf('infiniteLoop'),
            'hideControlOnEnd'    => $this->getConf('hideControlOnEnd'),
            'speed'               => $this->getConf('speed'),
            'easing'              => $this->getConf('easing'),
            'slideMargin'         => $this->getConf('slideMargin'),
            'startSlide'          => $this->getConf('startSlide'),
            'randomStart'         => $this->getConf('randomStart'),
            'captions'            => $this->getConf('captions'),
            'ticker'              => $this->getConf('ticker'),
            'tickerHover'         => $this->getConf('tickerHover'),
            'adaptiveHeight'      => $this->getConf('adaptiveHeight'),
            'adaptiveHeightSpeed' => $this->getConf('adaptiveHeightSpeed'),
            'video'               => $this->getConf('video'),
            'useCSS'              => $this->getConf('useCSS'),
            'preloadImages'       => $this->getConf('preloadImages'),
            'responsive'          => $this->getConf('responsive'),

            // pager
            'pager'               => $this->getConf('pager'),
            'pagerType'           => $this->getConf('pagerType'),
            'pagerShortSeparator' => $this->getConf('pagerShortSeparator'),

            // controls
            'controls'            => $this->getConf('controls'),
            'nextText'            => $this->getConf('nextText'),
            'prevText'            => $this->getConf('prevText'),
            'autoControls'        => $this->getConf('autoControls'),
            'startText'           => $this->getConf('startText'),
            'stopText'            => $this->getConf('stopText'),
            'autoControlsCombine' => $this->getConf('autoControlsCombine'),

            // auto
            'auto'          => $this->getConf('auto'),
            'pause'         => $this->getConf('pause'),
            'autoStart'     => $this->getConf('autoStart'),
            'autoDirection' => $this->getConf('autoDirection'),
            'autoHover'     => $this->getConf('autoHover'),
            'autoDelay'     => $this->getConf('autoDelay'),

            // carousel
            'minSlides'  => $this->getConf('minSlides'),
            'maxSlides'  => $this->getConf('maxSlides'),
            'moveSlides' => $this->getConf('moveSlides'),
            'slideWidth' => $this->getConf('slideWidth'),

            // touch
            'touchEnabled'         => $this->getConf('touchEnabled'),
            'swipeThreshold'       => $this->getConf('swipeThreshold'),
            'oneToOneTouch'        => $this->getConf('oneToOneTouch'),
            'preventDefaultSwipeX' => $this->getConf('preventDefaultSwipeX'),
            'preventDefaultSwipeY' => $this->getConf('preventDefaultSwipeY')

        );
    }
}
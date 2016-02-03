<?php
/**
 * DokuWiki Plugin slider (Syntax Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Andreas Gohr <gohr@cosmocode.de>
 */

// must be run within Dokuwiki
if (!defined('DOKU_INC')) die();

class syntax_plugin_slider extends DokuWiki_Syntax_Plugin {

    private $inslideopener = false;

    /**
     * @return string Syntax mode type
     */
    public function getType() {
        return 'formatting';
    }

    /**
     * @return array Things that may be inside the syntax
     */
    function getAllowedTypes() {
        return array('container', 'formatting', 'substition', 'protected', 'disabled', 'paragraphs');
    }

    /**
     * @return string Paragraph type
     */
    public function getPType() {
        return 'stack';
    }

    /**
     * @return int Sort order - Low numbers go before high numbers
     */
    public function getSort() {
        return 190;
    }

    /**
     * Connect lookup pattern to lexer.
     *
     * @param string $mode Parser mode
     */
    public function connectTo($mode) {
        $this->Lexer->addEntryPattern('<slider.*?>(?=.*?</slider>)',$mode,'plugin_slider');
    }

    public function postConnect() {
        $this->Lexer->addExitPattern('</slider>', 'plugin_slider');
    }

    /**
     * Handle matches of the slider syntax
     *
     * @param string $match The match of the syntax
     * @param int    $state The state of the handler
     * @param int    $pos The position in the document
     * @param Doku_Handler    $handler The handler
     * @return array Data for the renderer
     */
    public function handle($match, $state, $pos, Doku_Handler $handler){
        global $conf;
        $first = false;
        $img = '';

        // the enter state is the very first slide only
        if($state == DOKU_LEXER_ENTER){
            $first = true;
        }

        // handle intermediate slider calls just like new entry patterns
        if($state == DOKU_LEXER_UNMATCHED && substr($match, 0, 7) == '<slider'){
            $state = DOKU_LEXER_ENTER;
        }
        // handle unclosed slide opener, by getting the image url from the last call
        if($this->inslideopener && $state == DOKU_LEXER_UNMATCHED && substr($match, 0, 7) == '>'){
            $lastcall = array_pop($handler->calls);
            if(preg_match('/^https?:\/\//i', $lastcall[1][0])) $img = $lastcall[1][0];
            $state = DOKU_LEXER_ENTER;
            $this->inslideopener = false;
        }

        // handle states
        switch ($state) {
            case DOKU_LEXER_ENTER:
                if(substr($match, -1) != '>'){
                    // we have a slide opener, but it contained some other syntax (probably a link)
                    // happens because we parse our own syntax from LEXER_UNMATCHED calls
                    $this->inslideopener = true;
                    return false;
                }elseif(!$img){
                    $img = trim(substr($match, 7,-1));
                }
                return array($state, $img, $first);

            case DOKU_LEXER_UNMATCHED:
                // check if $match is a == header ==
                $headerMatch = preg_grep('/([ \t]*={2,}[^\n]+={2,}[ \t]*(?=))/msSi', array($match));
                if (empty($headerMatch)) {
                    $handler->_addCall('cdata', array($match), $pos);
                } else {
                    // if it's a == header ==, use the core header() renderer
                    // (copied from core header() in inc/parser/handler.php)
                    $title = trim($match);
                    $level = 7 - strspn($title,'=');
                    if($level < 1) $level = 1;
                    $title = trim($title,'=');
                    $title = trim($title);

                    $handler->_addCall('header',array($title,$level,$pos), $pos);
                    // close the section edit the header could open
                    if ($title && $level <= $conf['maxseclevel']) {
                        $handler->addPluginCall('wrap_closesection', array(), DOKU_LEXER_SPECIAL, $pos, '');
                    }
                }
                return false;

            case DOKU_LEXER_EXIT:
                return array($state, false, false);
        }
    }

    /**
     * Render xhtml output or metadata
     *
     * @param string         $mode      Renderer mode (supported modes: xhtml)
     * @param Doku_Renderer  $R  The renderer
     * @param array          $data      The data from the handler() function
     * @return bool If rendering was successful.
     */
    public function render($mode, Doku_Renderer $R, $data) {
        if($mode != 'xhtml') return false;
        list($state, $img, $first) = $data;

        if($state == DOKU_LEXER_ENTER){
            if($first){
                // open the list
                $R->doc .= '<div class="clearer"></div>';
                $R->doc .= '<ul class="plugin_slider">';
            }else{
                // close previous item
                $this->close_slide($R);
            }

            // new item
            $this->open_slide($R, $img);
        }elseif($state == DOKU_LEXER_EXIT){
            // close previous item
            $this->close_slide($R);

            // close list
            $R->doc .= '</ul>';
            $R->doc .= '<div class="clearer"></div>';
        }

        return true;
    }

    /**
     * Opens as slide and remounts the renderer document
     *
     * @param Doku_Renderer $R
     * @param string $img
     */
    private function open_slide($R, $img){
        // open the list item
        if($img){
            $R->doc .= '<li class="plugin_slider_hasimg">';
            $R->doc .= '<img src="'.ml($img, array('w'=>$this->getConf('width'))).'" class="plugin_slider_img" alt="" />';
        }else{
            $R->doc .= '<li class="plugin_slider_noimg">';
        }

        // remount the doc
        $R->keepdoc = $R->doc;
        $R->doc = '';
    }

    /**
     * Closes the previous slide and removes dangling paragraphs and empty content divs
     *
     * @param Doku_Renderer $R
     */
    private function close_slide($R){
        // clean up dangling paragraphs
        $R->doc = preg_replace('/<p>\s*$/','',$R->doc);
        $R->doc = preg_replace('/^\s*<\/p>\s*/','',$R->doc);
        $R->doc = trim($R->doc);

        // wrap content if any
        if($R->doc){
            $R->doc = '<div class="plugin_slider_content li">'.$R->doc.'</div>';
        }

        // mount doument back
        $R->doc = $R->keepdoc . $R->doc;
        unset($R->keepdoc);

        // close item
        $R->doc .= '</li>';
    }
}

// vim:ts=4:sw=4:et:

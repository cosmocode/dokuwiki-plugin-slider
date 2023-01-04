<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author Hella <hella.breitkopf@gmail.com>
 * @author Sven <Svenluecke48@gmx.de>
 */
$lang['width']                 = 'Breite der geladenen Bilder. Die Bilder werden in der angegebenen Größe bereitgestellt und vom Browser hoch- oder runterskaliert.';
$lang['mode']                  = 'Art des Übergangs zwischen den Folien';
$lang['infiniteLoop']          = 'Wenn eingeschaltet, wird beim Klicken auf "Weiter" auf der letzten Folie zur ersten Folie gewechselt und umgekehrt.';
$lang['hideControlOnEnd']      = 'Wenn eingeschaltet, werden die Schaltflächen für "Vorherige" und "Nächste" deaktiviert, wenn die ersten oder letzten Folie angezeigt wird. Hinweis: Wird nur verwendet, wenn die Option "infiniteLoop" ausgeschaltet ist';
$lang['speed']                 = 'Dauer des Übergangs';
$lang['easing']                = 'Welcher Typ von "easing" für die Übergänge verwendet werden soll. Wenn CSS-Übergänge verwendet werden, geben Sie einen Wert für die Eigenschaft transition-timing-function an. Wenn Sie keine CSS-Übergänge verwenden, können Sie plugins/jquery.easing.1.3.js für viele Optionen berücksichtigen.
Siehe <a href=\'http://gsgd.co.uk/sandbox/jquery/easing/\' target=\'_blank\'>gsgd.co.uk/sandbox/jquery/easing/</a> für weitere Informationen. Optionen bei der Verwendung von CSS: \'linear\', \'ease\', \'ease-in\', \'ease-out\', \'ease-in-out\', \'cubic-bezier(n,n,n,n)\'. Optionen ohne CSS: swing\', \'linear\'
';
$lang['slideMargin']           = 'Rand zwischen den Folien';
$lang['startSlide']            = 'Index der Start-Folie (fängt bei Null an)';
$lang['randomStart']           = 'Starte Slider auf zufälliger Folie';
$lang['captions']              = 'Verwende Bildunterschriften. Bildunterschriften werden aus dem Titelattribut des Bildes abgeleitet.';
$lang['ticker']                = 'Verwende Slider im Ticker-Modus (ähnlich zu News-Tickern). Die Ticker-Geschwindigkeit hängt von der Dauer der Folienübergänge ab. Setze slider.speed auf "slider.speed * Anzahl der Bilder"';
$lang['tickerHover']           = 'Der Ticker wird angehalten, wenn die Maus über die Folien bewegt wird. Hinweis: Diese Funktion funktioniert NICHT, wenn Sie CSS-Übergänge verwenden!';
$lang['adaptiveHeight']        = 'Dynamische Anpassung des Sliders, abhängig von der Höhe der einzelnen Folien';
$lang['adaptiveHeightSpeed']   = 'Dauer der Folien-Höhen-Anpassung (in ms). Hinweis: Wird nur verwendet, wenn adaptiveHeight eingeschaltet ist.';
$lang['video']                 = 'Wenn eine Folie ein Video enthält, diese Option einschalten. Bindet plugins/jquery.fitvids.js ein.

Siehe http://fitvidsjs.com/ für weitere Informationen';
$lang['useCSS']                = 'Wenn eingeschaltet, werden CSS-Übergänge für horizontale und vertikale Folienanimationen verwendet (benutzt native Hardware-Beschleunigung). Wenn ausgeschaltet, wird jQuery animate() verwendet.';
$lang['preloadImages']         = '\'all\': alle Bilder werden vorgeladen, bevor Slider gestartet wird. \'visible\': nur die Anfangs sichtbaren Bilder werden vorgeladen, bevor Slider gestartet wird (Tipp: verwenden sie \'visible\' wenn alle Folien die selben Abmessungen haben)';
$lang['responsive']            = 'aktiviere/deaktiviere die automatische Größenänderung von Slider. Nützlich wenn man eine fixe Breite verwendet.';

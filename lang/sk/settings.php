<?php

/**
 * @license    GPL 2 (https://www.gnu.org/licenses/gpl.html)
 *
 * @author Wizzard <wizzardsk@gmail.com>
 */
$lang['width']                 = 'Šírka načítavaných obrázkov. Obrázky sa stiahnu v tejto veľkosti a prehliadač ich zväčší alebo zmenší.';
$lang['mode']                  = 'Typ prechodu medzi slajdmi';
$lang['infiniteLoop']          = 'Ak je true, kliknutie na "Next" na poslednom slajde prejde na prvý slajd a naopak';
$lang['hideControlOnEnd']      = 'Ak je true, ovládacie prvky "Prev" a "Next" dostanú triedu disabled, keď je slajd prvý alebo posledný
Poznámka: Použité iba pri infiniteLoop: false';
$lang['speed']                 = 'Trvanie prechodu slajdu (v ms)';
$lang['easing']                = 'Typ \'easing\' použitý počas prechodov. Pri CSS prechodoch zadajte hodnotu pre vlastnosť transition-timing-function. Ak nepoužívate CSS prechody, môžete zahrnúť plugins/jquery.easing.1.3.js pre viac možností.
Viac info na <a href=\'http://gsgd.co.uk/sandbox/jquery/easing/\' target=\'_blank\'>gsgd.co.uk/sandbox/jquery/easing/</a>. Možnosti: pri CSS: \'linear\', \'ease\', \'ease-in\', \'ease-out\', \'ease-in-out\', \'cubic-bezier(n,n,n,n)\'. Bez CSS: \'swing\', \'linear\' ';
$lang['slideMargin']           = 'Odstup medzi jednotlivými slajdmi';
$lang['startSlide']            = 'Index počiatočného slajdu (od nuly)';
$lang['randomStart']           = 'Spustiť slider na náhodnom slajde';
$lang['captions']              = 'Zahrnúť popisky obrázkov. Popisky sa odvodzujú z atribútu title obrázka';
$lang['ticker']                = 'Použiť slider v ticker režime (podobné bežiacim správam). Rýchlosť tickera závisí od trvania prechodu. Nastavte slider.speed na "slider.speed * počet obrázkov"  ';
$lang['tickerHover']           = 'Ticker sa pozastaví, keď je myš nad sliderom. Poznámka: táto funkcionalita NEFUNGUJE pri CSS prechodoch!';
$lang['adaptiveHeight']        = 'Dynamicky prispôsobovať výšku slidera podľa výšky každého slajdu';
$lang['adaptiveHeightSpeed']   = 'Trvanie prechodu výšky slajdu (v ms). Poznámka: použité iba pri adaptiveHeight: true';
$lang['video']                 = 'Ak niektoré slajdy obsahujú video, nastavte na true. Zahrňte aj plugins/jquery.fitvids.js
Viac info na http://fitvidsjs.com/';
$lang['useCSS']                = 'Ak je true, na horizontálne a vertikálne animácie slajdov sa použijú CSS prechody (využíva natívnu hardvérovú akceleráciu). Ak je false, použije sa jQuery animate().';
$lang['preloadImages']         = 'Pri \'all\' sa pred spustením slidera prednačítajú všetky obrázky. Pri \'visible\' sa prednačítajú iba obrázky v úvodne viditeľných slajdoch (tip: použite \'visible\', ak majú všetky slajdy rovnaké rozmery)';
$lang['responsive']            = 'Zapnúť alebo vypnúť automatickú zmenu veľkosti slidera. Užitočné, ak potrebujete slidery s pevnou šírkou.';
$lang['pager']                 = 'Ak je true, pridá sa stránkovač';
$lang['pagerType']             = 'Pri \'full\' sa vygeneruje odkaz stránkovača pre každý slajd. Pri \'short\' sa použije stránkovač x / y (napr. 1 / 5)';
$lang['pagerShortSeparator']   = 'Pri pagerType: \'short\' použije stránkovač túto hodnotu ako oddeľovací znak';
$lang['controls']              = 'Ak je true, pridajú sa ovládacie prvky "Next" / "Prev"';
$lang['nextText']              = 'Text ovládacieho prvku "Next"';
$lang['prevText']              = 'Text ovládacieho prvku "Prev"';
$lang['autoControls']          = 'Ak je true, pridajú sa ovládacie prvky "Start" / "Stop"';
$lang['startText']             = 'Text ovládacieho prvku "Start"';
$lang['stopText']              = 'Text ovládacieho prvku "Stop"';
$lang['autoControlsCombine']   = 'Keď slideshow beží, zobrazuje sa iba ovládací prvok "Stop" a naopak';
$lang['auto']                  = 'Slajdy sa budú prepínať automaticky';
$lang['pause']                 = 'Čas (v ms) medzi automatickými prechodmi';
$lang['autoStart']             = 'Automatické prehrávanie sa spustí pri načítaní. Ak je false, slideshow sa spustí kliknutím na "Start"';
$lang['autoDirection']         = 'Smer automatických prechodov slajdov';
$lang['autoHover']             = 'Automatické prehrávanie sa pozastaví, keď je myš nad sliderom';
$lang['autoDelay']             = 'Čas (v ms), ktorý automatické prehrávanie počká pred spustením';
$lang['minSlides']             = 'Minimálny počet zobrazených slajdov. Slajdy sa zmenšia, ak sa karusel zmenší pod pôvodnú veľkosť.';
$lang['maxSlides']             = 'Maximálny počet zobrazených slajdov. Slajdy sa zväčšia, ak sa karusel zväčší nad pôvodnú veľkosť.';
$lang['moveSlides']            = 'Počet slajdov posunutých pri prechode. Hodnota musí byť >= minSlides a <= maxSlides. Pri nule (predvolené) sa použije počet plne viditeľných slajdov.';
$lang['slideWidth']            = 'Šírka každého slajdu. Toto nastavenie je povinné pre všetky horizontálne karusely!';
$lang['touchEnabled']          = 'Ak je true, slider umožní prechody dotykovým potiahnutím';
$lang['swipeThreshold']        = 'Počet pixelov, ktoré musí dotykové potiahnutie prekročiť, aby sa vykonal prechod slajdu. Poznámka: použité iba pri touchEnabled: true';
$lang['oneToOneTouch']         = 'Ak je true, nemiznúce slajdy nasledujú prst pri potiahnutí';
$lang['preventDefaultSwipeX']  = 'Ak je true, dotyková obrazovka sa nebude posúvať po osi x pri potiahnutí prstom';
$lang['preventDefaultSwipeY']  = 'Ak je true, dotyková obrazovka sa nebude posúvať po osi y pri potiahnutí prstom';

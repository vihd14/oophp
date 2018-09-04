<?php

namespace Anax\View;

/**
* Template file to render a view.
*/
$urlHome  = $app->url->create("");
$urlReport = $app->url->create("redovisning");
$urlAbout = $app->url->create("om");
$urlGuess = $app->url->create("gissa");
$urlDice = $app->url->create("dice");
$urlTest = $app->url->create("test");
$urlDebug = $app->url->create("debug");

$menu = array(
    'home'  => array('text'=>'Hem',  'url'=>$urlHome),
    'redovisning' => array('text'=>'Redovisningar', 'url'=>$urlReport),
    'gissa' => array('text'=>'Gissa numret', 'url'=>$urlGuess),
    'dice' => array('text'=>'Tärningsspel', 'url'=>$urlDice),
    'test' => array('text'=>'Test', 'url'=>$urlTest),
    'debug' => array('text'=>'Debug', 'url'=>$urlDebug),
    'om'  => array('text'=>'Om',  'url'=>$urlAbout),
);

class CNavigation
{
    public static function generateMenu($items, $class)
    {
        $html = "<nav class='$class'>\n";
        ?><a href="<?= url("") ?>"><img src="<?= asset("img/logo.png") ?>" alt="Logo"></a>

        <?php foreach ($items as $key => $item) {
            $basename = str_replace(".php", "", basename($_SERVER['REQUEST_URI']));
            $selected = ($basename == $key)
            ? 'selected'
            : null;
            $html .= "<a href='{$item['url']}' class='{$selected}'>{$item['text']}</a>\n";
        }
        $html .= "</nav>\n";
        return $html;
    }
}

echo CNavigation::generateMenu($menu, "navbar rm-default rm-desktop");

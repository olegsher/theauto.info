<?php
$dir    = './news';
// Sort in ascending order - this is default
$a = scandir($dir, 1);
arsort($a);
echo '<!doctype html>
<html lang="ru">
<head>
<title>Новости мира авто - Прокат аренда авто в Израиле +972-58-7710101</title>
<meta name="description" content="Новости мира авто - Прокат аренда авто в Израиле. Отделения проката в Бен Гурион, Тель Авив Ашдод Хайфа Эйлат Без предоплаты. Говорим по русски" /> ';
include("__header.html");
echo '
</head>
<body>
<div class="container">
<h1 class="display-4"  style="font-family: Times, serif; color:grey; text-transform: uppercase; color: white; text-shadow: 1px 1px 2px #000000; font-size: 2em;">Новости мира автомобилей</h1>';
include("__menu.html");

foreach(arsort($a) as $key => $value)
{
//     echo '<br>' . $value;
$path = 'news/' . $value;
$newname = preg_replace('/-/', ' ', $value);
$newname = preg_replace('/.php/', ' ', $newname);

    
    echo '<a rel="nofollow" href="' . $path . '" title="' . "Новости мира автомобилей на портале TheAuto.info" . '" >' . $newname . '</a><br>';
    echo "\n";
    // echo '<a rel="nofollow" href="$path" title="Новости мира автомобилей на портале TheAuto.info" > . $value . </a> <br />';
    // rsort($value);
    // print_r(array_reverse($a));
    
}
echo '</div></body></html>';


?>
<?php
$dir    = './news';


function scan_dir($dir) {
    $ignored = array('.', '..', '.xml');
    
    $files = array();
    foreach (scandir($dir) as $file) {
        if (in_array($file, $ignored)) continue;
        $files[$file] = filemtime($dir . '/' . $file);
    }
    
    arsort($files);
    $files = array_keys($files);
    
    return ($files) ? $files : false;
}


// Sort in ascending order - this is default
// $a = scan_dir($dir);

echo '
<!doctype html>
<html lang="ru">
<head>
<title>Новости мира авто - Прокат аренда авто в Израиле +972-58-7710101</title>
<meta name="description" content="Новости мира авто - Прокат аренда авто в Израиле. Отделения проката в Бен Гурион, Тель Авив Ашдод Хайфа Эйлат Без предоплаты. Говорим по русски" /> ';
include("../_header_include.html");
echo '
</head>
<body>';
include("_menu.html");
echo '<hr />
<div class="main main-raised">
  <div class="container">
    <div class="section text-left">
      <h1>Новости мира автомобилей</h1>'; 



foreach(scan_dir($dir) as $key => $value)
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
echo '</div></div>
  </div>
</div>';
include("__footer.html");
include("../_footer_include.html");
echo '</body></html>';


?>
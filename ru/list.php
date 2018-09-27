<?php
$dir    = './news';
// Sort in ascending order - this is default
$a = scandir($dir);
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
<h1 class="display-4"  style="font-family: Times, serif; color:grey; text-transform: uppercase; color: white; text-shadow: 1px 1px 2px #000000; font-size: 2em;">Новости мира автомобилей</h1>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow"> 
      <h5 class="my-0 mr-md-auto font-weight-normal">Vastama +972 58 7710101</h5> 
       <nav class="my-2 my-md-0 mr-md-3"> 
       	<a class="p-2 text-dark" href="index.php" title="прокат аренда авто в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">Главная</a> 
         <a class="p-2 text-dark" href="Europcar_Albar_Vastama_branches.php" title="Отделения проката аренды автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">Отделения проката</a> 
         <a class="p-2 text-dark" href="RentalConditions.php" title="Условия проката аренды автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">Условия аренды</a>
          
       </nav> 
       <a class="btn btn-outline-primary" href="http://www.theauto.info/" title="To English site">English</a> 
     </div>
';
foreach($a as $key => $value)
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
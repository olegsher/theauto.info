<?php
$dir    = './news';
// Sort in ascending order - this is default
$a = scandir($dir);
echo '<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="yandex-verification" content="f11475564b48ca1f" />
<meta name=\'wmail-verification\' content=\'a9138f370e313f0907f0d27ff4975904\' />
<meta name="msvalidate.01" content="DFFC9D141B04223AD2603B9AD5606773" />

<link rel="icon" href="http://www.theauto.info/favicon.ico">

<meta property="fb:app_id" content="1322511981092474" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="ru" />
<meta property="og:url" content="http://www.theauto.info/ru/" />
<meta property="og:image" content="http://www.theauto.info/img/car_key.jpeg"/>
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="640" />
<meta property="og:image:height" content="426" />
<meta property="og:title" content="+972-58-7710101 Аренда авто в Израиле. Отделения проката в Бен Гурион, Тель Авив, Эйлат, Иерусалим и др. Без предоплаты. Говорим по русски" />
<meta property="og:description" content="+972-58-7710101 Аренда авто в Израиле. Лучшие цены на аренду авто в Израиле. Отделения проката в Бен Гурион, Тель Авив, Эйлат, Иерусалим и др. Без предоплаты. Говорим по русски"/>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css>
<!-- Custom styles for this template -->
<link href="../pricing.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h1 class="display-4"  style="font-family: Times, serif; color:grey; text-transform: uppercase; color: white; text-shadow: 1px 1px 2px #000000; font-size: 2em;">Новости мира автомобилей</h1>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow"> 
      <h5 class="my-0 mr-md-auto font-weight-normal">Vastama Ltd - Ваш агент в Израиле</h5> 
       <nav class="my-2 my-md-0 mr-md-3"> 
       	<a class="p-2 text-dark" href="/ru/" title="прокат аренда авто в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">Главная</a> 
         <a class="p-2 text-dark" href="Europcar_Albar_Vastama_branches.php" title="Отделения проката аренды автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">Отделения проката</a> 
         <a class="p-2 text-dark" href="RentalConditions.php" title="Условия проката аренды автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">Условия аренды</a>
          
       </nav> 
       <a class="btn btn-outline-primary" href="/" title="To english site">English</a> 
     </div>
';
foreach($a as $key => $value)
{
//     echo '<br>' . $value;
$path = 'news/' . $value;
    
    echo ' <a href="' . $path . ' "title="' . 
    "Новости мира автомобилей на портале TheAuto.info" . '" >' . $value . '</a> <br />';
    print_r($value);
    
}
echo '</div></body></html>';


?>
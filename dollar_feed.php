
<div style="width:248px;height:auto;border:1px solid #2D6AB4;text-align:center;font-size:16px;font-family:sans-serif,Arial,Helvetica;border-top-right-radius:5px; border-top-left-radius:5px;background-color:#FFFFFF;">
<div style="width:100%; height:24px;padding:5px 0px 0px 0px;background-color:#2D6AB4;font-weight:bold;">
<a rel="nofollow" style="color:#FFFFFF;text-decoration:none;" href="http://www.fxexchangerate.com/">Currency Converter</a>
</div>
<script type="text/javascript" src="http://w.fxexchangerate.com/converter.php?fm=RUB&ft=ILS&lg=ru&am=1&ty=1"></script>
</div>


<?php



$rss = new DOMDocument();
$rss->load('http://usd.fxexchangerate.com/eur');
$feed = array();
foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array(
        'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
        'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
        'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
        'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
        
    );
    array_push($feed, $item);
}
$limit = 255;
for ($x = 0; $x < $limit; $x ++) {
    $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    $link = $feed[$x]['link'];
    $description = $feed[$x]['desc'];
    $date = date('l F d, Y', strtotime($feed[$x]['date']));
    
    // echo '<p><strong><a href="' . $link . ' " title="' . $title . '" target="_blank">' . $title . '</a></strong><br />';
    // echo '<small><em>Posted on '.$date.'</em></small></p>';
    //     echo '<p><strong>' . $title . '</strong> <br /> ';
   
    echo '<div class="container">' . $description . '</div>';
}


// Заголовок с кодировкой
// header('Content-Type: text/html; charset=UTF-8');

// Интересующий нас XML-файл
$xml_file = 'https://yandex.com/weather/moscow/month';

// Количество попыток получить и обработать этот файл
$number_of_attempts = 0;

do
{
    // Выводим номер попытки
    echo 'Attempt = ', $number_of_attempts, '<br>';
    
    // Осуществляем попытку получить и обработать XML-файл
    $xml = simplexml_load_file($xml_file);
    
    usleep(10);
}
while (!$xml && ++$number_of_attempts <= 10); // Делаем пока не загрузили или пока количество попыток не будет превышать 50

// Итак, если XML-файл не обработан - пишем об этом
if (!$xml)
{
    exit('Could not load XML<br>');
}

// Иначе: Получаем температуру
$temp = $xml->fact->temperature;

// Форматируем её как нам нужно
if ($temp > 0) {
    $temp = '+' . $temp;
}

// И выводим
echo '<strong>Погода: ', $temp, ' °C</strong>';


?>

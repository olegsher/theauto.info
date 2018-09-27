<?php
$rss = new DOMDocument();
$rss->load('http://news.yandex.ru/auto.rss');
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
$limit = 10;

for ($x = 0; $x < $limit; $x ++) {
    $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    $link = $feed[$x]['link'];
    $description = $feed[$x]['desc'];
    $date = date('l F d, Y', strtotime($feed[$x]['date']));
    $date1= date('Y-F-d', strtotime($feed[$x]['date']));
    $newname = preg_replace('/\s+/', '-', $title);
    $file_x = "news/$date1-$newname.php";
    
    echo $date1 . ' <strong>' . $title . '</strong><br>';
    echo $description . ' <a href="' . $file_x . ' "title="' . "'$title' . - Новости мира автомобилей на портале TheAuto.info" .' " target="_self">' . "читать далее" . '</a> <br />';
    
    // $file_x = "news/$date1 $title.html";
    
    if (file_exists($file_x)) {
        // echo "The file $file_x exists";
    } else {
        $myfile = fopen($file_x, "w") or die("Unable to open file!");
    // };

    // $myfile = fopen("news/$title.html", "w") or die("Unable to open file!"); 
       
    
    
    
    
    
    $leaders = '
<div class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h3 class="lead">Аренда авто без предоплаты | Бесплатная консультация и помощь по бронированию автомобиля в Израиле на русском языке | Безлимитный километраж при заказе 3-29 дней</h3>
      <p class="lead">Напишите нам на <a style="font-family: Times, serif; color:red">WhatsApp/Viber +972-58-771-0101</a> и наш менеджер вернется к вам с лучшим предложением</p>
    </div>

<div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Hyundai Tucson <small style="color: grey; font-size: 0.8em;">или подобные</small> (Авт. 5 мест)</h4>
          </div>
          <div class="card-body">
            <h5 class="card-title pricing-card-title">$42 <small class="text-muted">\день</small></h5>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Категория проката: J (SFBR)</li>
              <li>Безлимитный километраж при заказе 3-29 дней</li>
              <li><img class="img-responsive" src="../../img/hyundai_tucson.jpg" alt="Прокат аренда авто Hyundai Tucson в Израиле. Прокат аренда авто в Израиле. Лучшие цены на аренду авто в Израиле. Отделения проката в Бен Гурион, Тель Авив, Эйлат, Иерусалим, Нетания и др. Без предоплаты. Говорим по русски" width="200"/> </li>
                <li>
               <form action="../mail_send.php" method="post">
                    <div class="form-inline">
                     <div class="col-auto">
                     <input type="text" class="form-control"  required name="name" placeholder="ваше имя">
                     </div>
                     <div class="col-auto">
                     <input type="tel" class="form-control"  required name="phone" placeholder="телефон\whatsapp\viber включая код страны города">
                     </div>               
                     <input type="hidden" name="car-select" value="Категория проката: J (SFBR), Hyundai Tucson или подобные">
                    </div>
                    <input type="submit" name="submit" value="Отправить">
                </form>
</li> 
            </ul>
<!--             <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button> -->
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">VW Golf <small style="color: grey; font-size: 0.8em;">или подобные</small></h4>
          </div>
          <div class="card-body">
            <h5 class="card-title pricing-card-title">$18 <small class="text-muted">\день</small></h5>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Категория проката: I (SCAR)</li>
              <li>Безлимитный километраж при заказе 3-29 дней</li>
<li><img class="img-responsive" src="../../img/VW-golf.jpg" alt="Прокат аренда авто VW Golf в Израиле. Прокат аренда авто в Израиле. Лучшие цены на аренду авто в Израиле. Отделения проката в Бен Гурион, Тель Авив, Эйлат, Иерусалим, Нетания и др. Без предоплаты. Говорим по русски" width="200"/> </li>
<li>
               <form action="../mail_send.php" method="post">
                    <div class="form-inline">
                     <div class="col-auto">
                     <input type="text" class="form-control"  required name="name" placeholder="ваше имя">
                     </div>
                     <div class="col-auto">
                     <input type="tel" class="form-control"  required name="phone" placeholder="телефон\whatsapp\viber включая код страны города">
                     </div>               
                     <input type="hidden" name="car-select" value="Категория проката: I (SCAR), VW Golf или подобные">
                    </div>
                    <input type="submit" name="submit" value="Отправить">
                </form>
</li> 
            </ul>
<!--             <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button> -->
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">VW Jetta <small style="color: grey; font-size: 0.8em;">или подобные</small></h4>
          </div>
          <div class="card-body">
            <h5 class="card-title pricing-card-title">$24 <small class="text-muted">\день</small></h5>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Категория проката: H (SDAR)</li>
              <li>Безлимитный километраж при заказе 3-29 дней</li>
<li><img class="img-responsive" src="https://rent.albar.co.il/CarImages/Rent/CarCategories/80t.jpg" alt="Прокат аренда авто VW Jetta в Израиле. Прокат аренда авто в Израиле. Лучшие цены на аренду авто в Израиле. Отделения проката в Бен Гурион, Тель Авив, Эйлат, Иерусалим, Нетания и др. Без предоплаты. Говорим по русски" /> </li>
<li>
               <form action="../mail_send.php" method="post">
                    <div class="form-inline">
                     <div class="col-auto">
                     <input type="text" class="form-control"  required name="name" placeholder="ваше имя">
                     </div>
                     <div class="col-auto">
                     <input type="tel" class="form-control"  required name="phone" placeholder="телефон\whatsapp\viber включая код страны города">
                     </div>               
                     <input type="hidden" name="car-select" value="Категория проката: H (SDAR), VW Jetta или подобные">
                    </div>
                    <input type="submit" name="submit" value="Отправить">
                </form>
</li> 
            </ul>
<!--             <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button> -->
          </div>          
        </div>        
      </div>

</div>
';
    

    $body = '    
    <div class="container">
    <img src="../../img/car_banner.png" alt="banner"> 
    <h1 class="display-4"  style="font-family: Times, serif; color:grey; text-transform: uppercase; color: white; text-shadow: 1px 1px 2px #000000; font-size: 2em;">' . $title . '</h1>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow"> 
      <h5 class="my-0 mr-md-auto font-weight-normal">Vastama Ltd - Ваш агент в Израиле</h5> 
       <nav class="my-2 my-md-0 mr-md-3"> 
       	<a class="p-2 text-dark" href="http://www.theauto.info/ru/" title="прокат аренда авто в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">Главная</a> 
         <a class="p-2 text-dark" href="http://www.theauto.info/ru/Europcar_Albar_Vastama_branches.php" title="Отделения проката аренды автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">Отделения проката</a> 
         <a class="p-2 text-dark" href="http://www.theauto.info/ru/RentalConditions.php" title="Условия проката аренды автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">Условия аренды</a>
          
       </nav> 
       <a class="btn btn-outline-primary" href="http://www.theauto.info/" title="To english site">English</a> 
     </div>
';
    
    
    
    
    fwrite($myfile, "<?php \n ?>\n <!doctype html>\n<html lang=\"ru\">\n<head>\n");
    fwrite($myfile, "<title>$title</title>\n");
    fwrite($myfile, "<meta name=\"description\" content=\"$title - Прокат аренда авто в Израиле. Отделения проката в Бен Гурион, Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот и др. Без предоплаты. Говорим по русски\">\n ");
    fwrite($myfile, "<?php \n include('../__header.html'); \n ?>");
    fwrite($myfile, "\n</head>\n<body>\n<div class=\"container\">\n");
    fwrite($myfile, "<?php \n include('../../seo.html'); \n ?>");
    fwrite($myfile, "<?php \n include('../__menu.html'); \n ?>");
    
    $txt = '<p><strong>' . $title . '</strong> <a rel="nofollow" href="' . $link . ' " 
        title="' . "Новости мира автомобилей на портале TheAuto.info" . '" target="_blank">' . "полная статья" . '</a> <br />' . $description . '</div>';
    fwrite($myfile, "<strong>$title</strong><br>");
    fwrite($myfile, $description);
    fwrite($myfile, "<br><a rel=\"nofollow\" href=\"$link\" title=\"Новости мира автомобилей на портале TheAuto.info\" target=\"_blank\">полная статья на Yandex</a>");
    
    
    
    
    fwrite($myfile, $leaders);
    
    fwrite($myfile, "<br>
Обязательное страхование (CDW/LDW & TP)<br>
Данный вид страховки является обязательным и покрывают ущерб причиненный автомобилю за исключением франшизы(т.е личного участия), стоимость данной страховки зависит от категории автомобиля. 
<a rel=\"follow\" href=\"http://www.rentalcarsisrael.com/ru/insurance.php\" title=\"Страховки аренда прокат автомобиля в Израиле rentalcarsisrael.com\" target=\"_blank\">полная статья на http://www.rentalcarsisrael.com</a>");
    
    fwrite($myfile, "<br>
Дополнительная страховка (Super CDW)<br>
не обязательная и снижает ответственность арендатора до Нуля в случае ущерба автомобилю (т.е отменяет франшизу). 
Приобрести данный вид страхования возможно только в дополнение к базовому полису(CDW/LDW & TP). 
<a rel=\"follow\" href=\"http://www.rentalcarsisrael.com/ru/insurance.php\" title=\"Страховки аренда прокат автомобиля в Израиле rentalcarsisrael.com\" target=\"_blank\">полная статья на http://www.rentalcarsisrael.com</a>");
    
    
    
    
    fwrite($myfile,"\n<small class=\"d-block mb-3 text-muted\">&copy; Vastama Ltd, 2014-2018</small>");
    fwrite($myfile, "\n</div>\n</body>\n</html>\n");
    fclose($myfile);
    };
    
}

?>

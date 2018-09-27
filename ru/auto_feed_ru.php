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
    $date1= date('Y-m-d', strtotime($feed[$x]['date']));
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
    
    
    
    
//     fwrite($myfile, "<?php echo '
        
//         <div class=\"card-deck mb-3 text-center\"> ';       
        
        
//         if (($handle = fopen("../albar_25.12.2017.csv", "r")) !== FALSE) {
            
//             while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//                 $num = count($data);
                
//                 $low_s = array(0);
//                 $ratingValue = rand(4,5);
//                 $reviewCount = rand(100,200);
//                 $sale = rand(21,30);
                
//                 foreach ($low_s as $c) {
//                     echo '
                        
//         <script type="application/ld+json"> {
//         "@context": "http://schema.org",
//         "@type":"Car",
//         "image": "http://www.theauto.info/img/CarCategories/'. $data[0].'.jpg",
//         "url": "http://www.theauto.info/ru/index.php#'. $data[0].'",
//         "name": "'. $data[4].' или подобный",
//         "acrissCode":"'. $data[1].'",
//         "seatingCapacity": "'. $data[3]. '",
//         "additionalProperty":{
//         "@type":"PropertyValue",
//         "name":"air conditioning"
//         },
//         "offers":{
//         "@type":"Offer",
//         "offeredBy": {
//         "@type": "AutoRental",
//         "name":"Vastama - Europcar rental company",
//         "image": "http://www.theauto.info/img/europcar.png",
//         "address": "Terminal 3, Airport Ben Gurion, Israel",
//         "priceRange": "$$$",
//         "telephone": "+972-58-7710101",
//         "paymentAccepted":"Visa, Master Card, Amex",
//         "openingHours": [
//         "Su-Sa 09:00-18:00"],
//         "aggregateRating":{
//         "@type":"AggregateRating",
//         "ratingValue":"'. $ratingValue .'",
//         "reviewCount":"'. $reviewCount .'"}
//         },
//         "priceSpecification": {
//         "@type": "UnitPriceSpecification",
//         "price": "'. $data[5]. '",
//         "priceCurrency": "USD",
//         "valueAddedTaxIncluded": "false",
//         "validFrom": "'. date('F Y') .'",
//         "validThrough": "Dec 19, 2019",
//         "referenceQuantity": {
//         "@type": "QuantitativeValue",
//         "value": "1",
//         "unitCode": "DAY"
//         }
// }}}}</script>
            
            
            
            
// <div class="card mb-4 box-shadow"><div class="card-header"><h4 id="'. $data[0].'"class="my-0 font-weight-normal">'. $data[4].' или подобный от <span class="badge badge-success">'. $data[11].'</span><small class="text-muted"> USD/день</small></h4></div>
//           <div class="card-body">
//             <ul class="list-unstyled mt-3 mb-4">
//               <li class="text-left">Категория: '. $data[0].' | Сидений: '. $data[3].'</li>
//               <li class="text-left">Увеличенный километраж при заказе 1-2 дней(250км в день уже включены в цену)</li>
//             <hr />
//               <li class="text-left">Безлимитный километраж при заказе 3-29 дней</li>
//               <hr />
//               <li class="text-left"><img style="float:left" class="img-responsive" src="../img/'. $sale .'.png" alt="" width="64"  /> При заказе 30+ дней от <span class="badge badge-danger">'. $data[13].'</span>USD в месяц(в цену включены обязательные страховки и 150км\день)</li>
//               <li><img class="img-fluid" src="../img/CarCategories/'. $data[0].'.jpg" alt="аренда авто '. $data[4].' или подобный в Израиле" /> </li>
//               <li><br>
//                     <img style="float:left" class="img-responsive" src="../img/'. $ratingValue .'.png" alt="Рэйтинг. Аренда авто '. $data[4].' или подобный в Израиле"  />
//                   <img style="float:left" class="img-responsive" src="../img/star.png" alt="Рэйтинг. Аренда авто '. $data[4].' или подобный в Израиле"  />
//              из '. $reviewCount .' на '. date('Y-m-d H:i:s') .'</li>
//             <li>
//                     </li>
//              <li>
//                 <hr />Оставьте данные и наш менеджер свяжется с вами
//                <form action="mail_send.php" method="post" id="request-form">
//                     <div class="form-inline">
//                      <div class="col-auto">
                 
//                      <input type="text" class="form-control" required  name="name" placeholder="Ваше Имя">
//                      </div>
//                      <div class="col-auto">
//                      <input type="tel" class="form-control" required  name="phone" placeholder="включая код страны\города">
//                         <br>Тел/WhatsApp/Viber/Почта
//                      </div>
//                      <input type="hidden" name="car-select" value="Car Category: '. $data[0].', '. $data[4].' или подобный">
//                     </div>
//                     <input type="submit" name="submit" value="Send">
//                 </form>
// </li>
//             </ul>
// <!--             <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button> -->
                         
                         
//       </div></div>';
//                 }
                
//             }
//             fclose($handle);
//         }
//         ?>
    
//  </div>        
// * Аренда (1-2 дня)  -  включает 250км в день и НЕ ВКЛЮЧАЕТ обязательные страховки и НДС
// <br>* Аренда (3-29 дней) и понедельная - безлимитный километраж и НЕ ВКЛЮЧАЕТ обязательные страховки и НДС
// <br>* Сумма помесячной аренды(30+ дней) -  включает обязательные страховки и 150км в день  
// <br>* Все цены указанны на сайте в : USD $  <hr />"
        
        
        
        
//         );
    
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

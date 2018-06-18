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
    $file_x = "news/$date1 $title.html";
    
    echo $date1 . ' <strong>' . $title . '</strong><br>';
    echo $description . ' <a href="' . $file_x . ' "title="' . "'$title' . - Новости мира автомобилей на портале TheAuto.info" .' " target="_self">' . "читать далее" . '</a> <br />';
    
    // $file_x = "news/$date1 $title.html";
    
    if (file_exists($file_x)) {
        // echo "The file $file_x exists";
    } else {
        $myfile = fopen($file_x, "w") or die("Unable to open file!");
    // };

    // $myfile = fopen("news/$title.html", "w") or die("Unable to open file!"); 
    $header = '
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
<link href="../pricing.css" rel="stylesheet">';
    
    
    
    $seo = '
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WSN6CF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49050113 = new Ya.Metrika({
                    id:49050113,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49050113" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3032803", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=3032803;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->



<script type="application/ld+json"> { 
"@context" : "http://schema.org",
"@type" : "TravelAgency", 
"name":"Vastama Ltd",
"url":"http://www.theAuto.info",
"email":"admin@vastama.com",
"telephone":"972587710101",
"image": "http://www.theauto.info/img/car_key.jpeg",
"openingHours": [ 
"Su-Sa 09:00-18:00"], 
"aggregateRating":{
"@type":"AggregateRating",
"ratingValue":"5",
"reviewCount":"5"},
"priceRange":"2",
"paymentAccepted":"Visa, Master Card, Amex"
} </script>
';
    
    
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
       	<a class="p-2 text-dark" href="/ru/" title="прокат аренда авто в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">Главная</a> 
         <a class="p-2 text-dark" href="Europcar_Albar_Vastama_branches.php" title="Отделения проката аренды автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">Отделения проката</a> 
         <a class="p-2 text-dark" href="RentalConditions.php" title="Условия проката аренды автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">Условия аренды</a>
          
       </nav> 
       <a class="btn btn-outline-primary" href="/" title="To english site">English</a> 
     </div>
';
    fwrite($myfile, "<!doctype html>\n<html lang=\"ru\">\n<head>\n");
    fwrite($myfile, "<title>$title</title>\n");
    fwrite($myfile, "<meta name=\"description\" content=\"$title - Прокат аренда авто в Израиле. Отделения проката в Бен Гурион, Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот и др. Без предоплаты. Говорим по русски\">\n ");
    fwrite($myfile, $header);
    fwrite($myfile, "\n</head>\n<body>\n");
    fwrite($myfile, $seo);
    fwrite($myfile, $body);
    $txt = '<p><strong>' . $title . '</strong> <a rel="nofollow" href="' . $link . ' " 
        title="' . "Новости мира автомобилей на портале TheAuto.info" . '" target="_blank">' . "полная статья" . '</a> <br />' . $description . '</div>';
    fwrite($myfile, "<strong>$title</strong><br>");
    fwrite($myfile, $description);
    fwrite($myfile, "<br><a rel=\"nofollow\" href=\"$link\" title=\"Новости мира автомобилей на портале TheAuto.info\" target=\"_blank\">полная статья на Yandex</a>");
    fwrite($myfile, $leaders);
    
    
    fwrite($myfile,"\n<div class=\"container\">\n<small class=\"d-block mb-3 text-muted\">&copy; Vastama Ltd, 2014-2018</small>\n</div>");
    fwrite($myfile, "\n</body>\n</html>\n");
    fclose($myfile);
    };
    
}

?>

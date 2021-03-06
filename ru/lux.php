<?php
?>
<!doctype html>
<html lang="ru">
<head>
<title>Прокат аренда автомобилей Люкс в Израиле +972-58-7710101</title>
<meta name="description" content="Прокат аренда автомобилей Люкс в Израиле. BMW 318i, VW Passat, Nissan Maxima, Audi A6, Ford Edge или подобные. Без предоплаты. Говорим по русски">

<?php include("../_header_include.html"); ?>
<link href="../pricing.css" rel="stylesheet">
</head>

<body>
 
<?php include("../seo.html"); ?>
<?php include("_menu.html"); ?>
<!-- <div class="container">  -->
 

<div class="main main-raised">
  <div class="container">
    <div class="section text-left">
 <?php include("__carousel.html"); ?> 

<div class="jumbotron">
  <h1>Vastama - агенство по аренде прокату автомобилей в Израиле</h1>      
  <p>
  <img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Бронирование автомобиля в Израиле по лучшей онлайн цене	(до 40% экономии при сравнении с заказом в отделении компании)
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Аренда авто без предоплаты (оплата производится при возврате автомобиля и можно наличными)
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Бесплатная консультация и помощь по бронированию автомобиля в Израиле на русском языке 
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Безлимитный километраж при заказе 3-29 дней
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Отделения по аренде прокату автомобилей во всех крупных городах Израиля
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Огромные скидки при бронировании автомобиля на 30+ дней
  <hr /><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Напишите нам на <a style="font-family: Times, serif; color:red">WhatsApp/Viber +972-58-771-0101</a> и наш менеджер вернется к вам с лучшим предложением</p>
</div>
    
    
    <div class="container"> 

    <h2 id="cars" style="color: white; text-shadow: 1px 1px 2px #000000; font-family: Times, serif; text-align: left; font-size: 1.5em; text-transform: uppercase;">Эти люкс машины есть у нас в прокате</h2>
      <div class="card-deck mb-3 text-center">
        
          
          <?php 
    if (($handle = fopen("../albar_25.12.2017.csv", "r")) !== FALSE) {       
        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);                       
            
            $low_s = array(0);
            $ratingValue = rand(4,5);
            $reviewCount = rand(100,200);
            
            
            
            foreach ($low_s as $c) {
                if($data[0] != "K" && $data[0] != "R" && $data[0] != "P" && $data[0] != "W" && $data[0] != "O") {
                    $value = "&nbsp;";
                }else{
            echo '
<script type="application/ld+json"> { 
        "@context": "http://schema.org",    
        "@type":"Car",
        "image": "http://www.theauto.info/img/CarCategories/'. $data[0].'.jpg",
        "url": "http://www.theauto.info/ru/lux.php#'. $data[0].'",
        "name": "'. $data[4].' или подобный",
        "acrissCode":"'. $data[1].'",
        "seatingCapacity": "'. $data[3]. '",
        "additionalProperty":{
        "@type":"PropertyValue",
        "name":"air conditioning"
        },
        "offers":{
        "@type":"Offer",
        "offeredBy": {
        "@type": "AutoRental",
        "name":"Vastama - Europcar rental company",
        "image": "http://www.theauto.info/img/europcar.png",
        "address": "Terminal 3, Airport Ben Gurion, Israel",
        "priceRange": "$$$",
        "telephone": "+972-58-7710101",
        "paymentAccepted":"Visa, Master Card, Amex",
        "openingHours": [ 
        "Su-Sa 09:00-18:00"], 
        "aggregateRating":{
        "@type":"AggregateRating",
        "ratingValue":"'. rand ( 3 , 5 ) .'",
        "reviewCount":"'. rand ( 10 , 50 ) .'"}
        },
        "priceSpecification": {
        "@type": "UnitPriceSpecification",
        "price": "'. $data[5]. '",
        "priceCurrency": "USD",
        "valueAddedTaxIncluded": "false",
        "validFrom": "'. date('F Y') .'",
        "validThrough": "Dec 19, 2019",
        "referenceQuantity": {
        "@type": "QuantitativeValue",
        "value": "1",
        "unitCode": "DAY"
        }
}}}}</script>




<div class="card mb-4 box-shadow"><div class="card-header"><h4 id="'. $data[0].'"class="my-0 font-weight-normal">'. $data[4].' или подобный от <span class="badge badge-success">'. $data[11].'</span><small class="text-muted"> USD/день</small></h4></div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-left">Категория: '. $data[0].' | Сидений: '. $data[3].'</li>
              <li class="text-left">Безлимитный километраж при заказе 3-29 дней</li>
              <li class="text-left">При заказе 30+ дней от <span class="badge badge-danger">'. $data[13].'</span>USD</li>
              <li><img class="img-fluid" src="../img/CarCategories/'. $data[0].'.jpg" alt="аренда авто '. $data[4].' в Израиле" /> </li>
              
                <li><br>
                    <img style="float:left" class="img-responsive" src="../img/'. $ratingValue .'.png" alt="Рэйтинг. Аренда авто '. $data[4].' или подобный в Израиле"  />
                  <img style="float:left" class="img-responsive" src="../img/star.png" alt="Рэйтинг. Аренда авто '. $data[4].' или подобный в Израиле"  />  
             из '. $reviewCount .' на '. date('Y-m-d H:i:s') .'</li>

            <li>
                <hr />Оставьте данные и наш менеджер свяжется с вами
               <form action="mail_send.php" method="post" id="request-form">
                    <div class="form-inline">
                     <div class="col-auto">
                     
                     <input type="text" class="form-control" required  name="name" placeholder="Ваше Имя">
                     </div>
                     <div class="col-auto">
                     <input type="tel" class="form-control" required  name="phone" placeholder="включая код страны\города">
                        <br>Тел/WhatsApp/Viber/Почта
                     </div>               
                     <input type="hidden" name="car-select" value="Car Category: '. $data[0].', '. $data[4].' или подобный">
                    </div>
                    <input type="submit" name="submit" value="Send">
                </form>
</li> 
            </ul>
<!--             <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button> -->
         
              
      </div></div>';      
                }}
            
        }
        fclose($handle);
    }
    ?>
 </div>        
    
<br>Минимальный возраст водителя для аренды BMW 318i, VW Passat, Nissan Maxima, Audi A6, Ford Edge или подобного люкс автомобиля в Израиле составляет 28 лет + водительский стаж минимум 5 года <a href="RentalConditions.php" title="Условия проката аренды автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">ознакомиться с условия аренды</a>
<br>Если вы незнакомы с дорогами Израиля и спецификой вождения в нашей стране то мы рекомендуем вам также приобрести полису по отмене личного участия в случае повреждения машины или угона. 
Напишите нам на WhatsApp/Viber +972-58-7710101 и наш менеджер вернется к вам и подробно расскажет о типах и условиях страховок и покрытий
<br>Депозит который будет закрыт на вашей кредитной карте на время аренды BMW 318i, VW Passat, Nissan Maxima, Audi A6, Ford Edge или подобного люкс автомобиля расчитывается по формуле: сумма аренды(как написано в ваучере) + сумма франшизы(личного участия) + 200$.(окончательная сумма депозита подсчитывается в <a href="Europcar_Albar_Vastama_branches.php" title="Отделения проката аренды автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">отделении</a> при получении автомобиля)
<br><span class="badge badge-danger">Отмена заказа Lux автомобилей</span> за 48 часов до получения. Иначе будет оплата в размере одного дня аренды.
<hr /><span class="badge badge-primary">Способы оплаты:</span>

<br>Для оформления контракта арендатор должен иметь при себе зарегистрированную на его имя кредитную карту. 
<br>Мы принимаем кредитные карты: Visa, MasterCard, Amex, Diners
<hr />

 
    <h2 id="price_list" style="color: white; text-shadow: 1px 1px 2px #000000; font-family: Times, serif; text-align: left; font-size: 1.5em; text-transform: uppercase;">Наши цены:</h2>
    
    <hr /><strong>Аренда автомобиля в Израиле  - Расценки <span class="badge badge-primary">Низкого</span> Сезона</strong>($USD): 
    <br>Апрель 10 - Июль 14 2018; Август 26 - Декабрь 19 2018; Январь 6 - Апрель 13 2019; Апрель 29 - Июль 14 2019; Август 26 - Декабрь 19 2019;
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Кат</th>
        <th>Авто</th>
        <th>Дневная<br>(1-6)</th>
        <th>Недельная</th>
        <th>Д.день<br>(8+)</th>
        <th>Месячная<br>(30+)</th>
        <th>CDW</th>
        <th>TP</th>
        <th>3PLC</th>
        <th>Л.Участие</th>
        <th>Доп.<br>KM</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    if (($handle = fopen("../albar_25.12.2017.csv", "r")) !== FALSE) {       
        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                       
                       
            $low_s = array(0);
            
            foreach ($low_s as $c) {
                if($data[0] != "K" && $data[0] != "R" && $data[0] != "P" && $data[0] != "W" && $data[0] != "O") {
                    $value = "&nbsp;";
                }else{

                echo '<tr>
                <td>'. $data[0]. '<br>'. $data[1]. '</td>
                <td><a href="#'. $data[0]. '" ><strong>'. $data[4].' или подобный</strong></a><br>Сидений '. $data[3]. '</td>
                <td>'. $data[5]. '</td>
                <td>'. $data[9]. '</td>
                <td>'. $data[11]. '</td>
                <td>'. $data[13]. '</td>
                <td>'. $data[15]. '</td>
                <td>'. $data[16]. '</td>
                <td>'. $data[17]. '</td>
                <td>'. $data[23]. '</td>
                <td>'. $data[18]. '</td>
                </tr>';
                }}

        }   
        fclose($handle);
    }
    ?>
        </tbody>
  </table>


<hr /><strong>Аренда автомобиля в Израиле  - Расценки <span class="badge badge-danger">Высокого</span> Сезона</strong>($USD): 
<br>Декабрь 20 2018 - Январь 5 2019; Апрель 14 - 28 2019; Июль 15 - Август 25 2019;
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Кат</th>
        <th>Авто</th>
        <th>Дневная<br>(1-6)</th>
        <th>Недельная</th>
        <th>Д.день<br>(8+)</th>
        <th>Месячная<br>(30+)</th>
        <th>CDW</th>
        <th>TP</th>
        <th>3PLC</th>
        <th>Л.Участие</th>
        <th>Доп.<br>KM</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    if (($handle = fopen("../albar_25.12.2017.csv", "r")) !== FALSE) {       
        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);                       
            
            $low_s = array(0);
            
            foreach ($low_s as $c) {
               
                if($data[0] != "K" && $data[0] != "R" && $data[0] != "P" && $data[0] != "W" && $data[0] != "O") {
                      $value = "&nbsp;";
                  }else{
                echo '<tr>
                <td>'. $data[0]. '<br>'. $data[1]. '</td>
                <td><a href="#'. $data[0]. '"><strong>'. $data[4].' или подобный</strong></a><br>Сидений '. $data[3]. '</td>
                <td>'. $data[6]. '</td>
                <td>'. $data[10]. '</td>
                <td>'. $data[12]. '</td>
                <td>'. $data[14]. '</td>
                <td>'. $data[15]. '</td>
                <td>'. $data[16]. '</td>
                <td>'. $data[17]. '</td>
                <td>'. $data[23]. '</td>
                <td>'. $data[18]. '</td>
                </tr>';
                  } }

        }   
        fclose($handle);
    }
    ?>
        </tbody>
  </table>
<br>Низкий Сезон: Апрель 10 - Июль 14 2018; Август 26 - Декабрь 19 2018; Январь 6 - Апрель 13 2019; Апрель 29 - Июль 14 2019; Август 26 - Декабрь 19 2019;
<br>Высокий Сезон: Декабрь 20 2018 - Январь 5 2019; Апрель 14 - 28 2019; Июль 15 - Август 25 2019;

<br>Дневная аренда (1-2 дня)  -  включает 250км в день
<br>Дневная аренда (3-29) и понедельная - безлимитный километраж 
<br>Месячная (30+ дней) -  включает 150км в день  
<br>Все цены указанны на сайте в : USD $
<br>Цены действительны до: Dec 19, 2019
<p class="text-left">* Указанные на сайте <span class="badge badge-success">цены значительно ниже официальных расценок</span> на сайте\отделениях компании и соответствуют прейскуранту дилера компаний EuropCar/Albar(май 2018) 
<br>* Указанные на сайте цены <span class="badge badge-danger">НЕ ВКЛЮЧАЮТ</span> обязательные страховки 
<br>* Указанные на сайте цены <span class="badge badge-danger">НЕ ВКЛЮЧАЮТ НДС</span> (от НДС освобождены лица имеющие в пасторте визу В2\В3 - обязательно предоставить при получении машины)
     
      
    </div>    
<?php include("__footer.html"); ?>
<?php include("../_footer_include.html"); ?>
  </body>
  </html>
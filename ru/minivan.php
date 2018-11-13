<?php
?>
<!doctype html>
<html lang="ru">
<head>
<?php include("../_header_include.html"); ?>
<title>Прокат аренда минивэна в Израиле +972-58-7710101</title>
<meta name="description" content="Прокат аренда минивэна в Израиле. Отделения проката в Бен Гурион, Тель Авив Иерусалим Хайфа Эйлат.. Без предоплаты. Говорим по русски">
<meta name="author" content="Vastama ltd" >
</head>

<body>
<?php include("../seo.html"); ?>
<?php include("_menu.html"); ?>

<hr />
<div class="main main-raised">
  <div class="container">
 
  <?php include("__carousel.html"); ?>
    <div class="section text-left">
      <h1>Прокат аренда минивэнов в Израиле</h1> 
<br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Бронирование автомобиля в Израиле по лучшей онлайн цене" width="20" height="20" /> Бронирование автомобиля в Израиле по лучшей онлайн цене	(до 40% экономии при сравнении с заказом в отделении компании)
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Аренда авто без предоплаты" width="20" height="20" /> Аренда авто без предоплаты (оплата производится при возврате автомобиля и можно наличными)
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Бесплатная консультация и помощь" width="20" height="20" /> Бесплатная консультация и помощь по бронированию автомобиля в Израиле на русском языке 
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Безлимитный километраж при заказе 3-29 дней" width="20" height="20" /> Безлимитный километраж при заказе 3-29 дней
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Отделения по аренде прокату автомобилей во всех крупных городах Израиля" width="20" height="20" /> Отделения по аренде прокату автомобилей во всех крупных городах Израиля
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Огромные скидки при бронировании автомобиля на 30+ дней" width="20" height="20" /> Огромные скидки при бронировании автомобиля на 30+ дней
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="WhatsApp/Viber +972-58-771-0101" width="20" height="20" /> Напишите нам на <a style="font-family: Times, serif; color:red">WhatsApp/Viber +972-58-771-0101</a> и наш менеджер вернется к вам с лучшим предложением
	</div>
	<hr />
      
      
      
      <div class="card-columns text-center">
        
          
          <?php 
    if (($handle = fopen("../albar_25.12.2017.csv", "r")) !== FALSE) {       
        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);                       
            
            $low_s = array(0);
            $ratingValue = rand(4,5);
            $reviewCount = rand(100,200);
            $sale = rand(21,30);
            if( $sale != 21 )
                $sale = 22;
                
                
            foreach ($low_s as $c) {
                if($data[3] <= 5) {
                    $value = "&nbsp;";
                }else{
            echo ' <script type="application/ld+json"> { 
        "@context": "http://schema.org",    
        "@type":"Car",
        "image": "http://www.theauto.info/img/CarCategories/'. $data[0].'.jpg",
        "url": "http://www.theauto.info/ru/minivan.php#'. $data[0].'",
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
              <li class="text-left"><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Увеличенный километраж при заказе 1-2 дней. Аренда авто '. $data[4].' или подобный в Израиле" width="20" height="20" />Увеличенный километраж при заказе 1-2 дней(250км в день уже включены в цену)</li>                
              <li class="text-left"><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Безлимитный километраж при заказе 3-29 дней. Аренда авто '. $data[4].' или подобный в Израиле" width="20" height="20" />Безлимитный километраж при заказе 3-29 дней</li>              
              <li class="text-left"><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="заказ 30+ дней. Аренда авто '. $data[4].' или подобный в Израиле" width="20" height="20" /><img style="float:left" class="img-responsive" src="../img/'. $sale .'.png" alt="Лучшая цена"   /> При заказе 30+ дней от <span class="badge badge-danger">'. $data[13].'</span>USD в месяц(в цену включены обязательные страховки и 150км\день)</li>
              <li><img class="img-fluid" src="../img/CarCategories/'. $data[0].'.jpg" alt="аренда авто '. $data[4].' или подобный в Израиле" /> </li>
              <li><br>
                    <img style="float:left" class="img-responsive" src="../img/'. $ratingValue .'.png" alt="Рэйтинг. Аренда авто '. $data[4].' или подобный в Израиле"  />
                  <img style="float:left" class="img-responsive" src="../img/star.png" alt="Рэйтинг. Аренда авто '. $data[4].' или подобный в Израиле"  />  
             из '. $reviewCount .' на '. date('Y-m-d H:i:s') .'</li>           
             
              <li class="text-left">
                <hr />Форма обратной связи:
               <form action="mail_send.php" method="post" id="request-form">
                    <div class="form-group">
                     <div class="col-auto">                     
                     <input type="text" class="form-control" required  name="name" placeholder="Ваше Имя">
                     </div>
                     <div class="col-auto">
                     <input type="tel" class="form-control" required  name="phone" placeholder="Тел +(код страны-города)ххх-хххх">
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="whatsapp" value="whatsapp"> WhatsApp &nbsp;&nbsp;
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="viber" value="viber"> Viber 
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    </div>
                     <div class="col-auto">
                     <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required id="email" placeholder="Ваша почта">                        
                     </div>               
                     <input type="hidden" name="car-select" value="Car Category: '. $data[0].', '. $data[4].' или подобный">
                    </div>
                    <div class="col-auto"> 
                    <input type="number"  required name="captcha"  min="' . date(Y) .'" max="' . date(Y) .'"  placeholder="ввеите год">
                     </div>
                     
                    <div class="col-auto">
                    <input type="submit" name="submit" value="Отправить">
                    </div>
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
    
<br>Минимальный возраст водителя для аренды минивэна в Израиле составляет 25 лет + водительский стаж минимум 2 года <a href="RentalConditions.php" title="Условия проката аренды автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">ознакомиться с условия аренды</a>
<br>Если вы незнакомы с дорогами Израиля и спецификой вождения в нашей стране то мы рекомендуем вам также приобрести полису по отмене личного участия в случае повреждения машины или угона. 
Напишите нам на WhatsApp/Viber +972-58-7710101 и наш менеджер вернется к вам и подробно расскажет о типах и условиях страховок и покрытий
<br>Депозит который будет закрыт на вашей кредитной карте на время аренды минивэна расчитывается по формуле: сумма аренды(как написано в ваучере) + сумма франшизы(личного участия) + 200$.(окончательная сумма депозита подсчитывается в <a href="Europcar_Albar_Vastama_branches.php" title="Отделения проката аренды автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот">отделении</a> при получении минивэна)
<br><span class="badge badge-danger">Отмена заказа 7-8-9 местных автомобилей</span> за 48 часов до получения. Иначе будет оплата в размере одного дня аренды.
<hr /><span class="badge badge-primary">Способы оплаты:</span>

<br>Для оформления контракта арендатор должен иметь при себе зарегистрированную на его имя кредитную карту. 
<br>Мы принимаем кредитные карты: Visa, MasterCard, Amex, Diners
<hr />

 
 
  </div>  
</div>
 

<?php include("__footer.html"); ?>
<?php include("../_bottom_include.html"); ?>
  </body>
  </html>
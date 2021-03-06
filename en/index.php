<?php
$title = "Car Rental in Israel";
$company = "Vastama Ltd, Reg number 515052702, Phone +972-58-771-0101";
?>
<!doctype html>
<html lang="en">
<head>
<?php include("../_header_include.html"); ?>

<?php echo '<title>'. $title .'</title> 
<meta name="description" content="' . $title . '">
<meta name="author" content="'. $company .'">' ;?>




<link rel="icon" href="http://www.theauto.info/favicon.ico">
<link rel="alternate" hreflang="ru" href="http://www.theauto.info/ru/" />
<meta property="fb:app_id" content="1322511981092474" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="en" />
<meta property="og:url" content="http://www.theauto.info" />
<meta property="og:image" content="http://www.theauto.info/img/car_key.jpeg"/>
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="640" />
<meta property="og:image:height" content="426" />
<meta property="og:title" content="Minivans and Luxury cars for rent in Israel, economy and compact classes for book online" />
<meta property="og:description" content="car rental israel,car hire israel,cheap car rental israel,car rental israel cheap,hire car israel,car hire israel compare,luxury car rental israel"/>


<title>Car Rental in Israel</title>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5WSN6CF');</script>
<!-- End Google Tag Manager -->




</head>

<body>
<?php include("../seo.html"); ?>
<?php include("_menu.html"); ?>


<hr />
<div class="main main-raised">
  <div class="container">
  <?php include("__carousel.html"); ?>
    <div class="section text-left">
  <h2 class="title">Прокат аренда автомобилей Люкс в Израиле</h2> 
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Бронирование автомобиля в Израиле по лучшей онлайн цене	(до 40% экономии при сравнении с заказом в отделении компании)
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Аренда авто без предоплаты (оплата производится при возврате автомобиля и можно наличными)
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Бесплатная консультация и помощь по бронированию автомобиля в Израиле на русском языке 
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Безлимитный километраж при заказе 3-29 дней
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Отделения по аренде прокату автомобилей во всех крупных городах Израиля
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Огромные скидки при бронировании автомобиля на 30+ дней
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Напишите нам на <a style="font-family: Times, serif; color:red">WhatsApp/Viber +972-58-771-0101</a> и наш менеджер вернется к вам с лучшим предложением
	</div>
	<hr /> 
   

 <div class="card-columns text-center">
        
          
          <?php 
    if (($handle = fopen("../albar_25.12.2017.csv", "r")) !== FALSE) {       
        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//             $num = count($data);                       
            
            $low_s = array(0);
            $ratingValue = rand(4,5);
            $reviewCount = rand(100,200);
            $sale = rand(21,30);
            if( $sale != 21 )
                $sale = 22;
            
            foreach ($low_s as $c) {
            echo '

<script type="application/ld+json"> { 
        "@context": "http://schema.org",    
        "@type":"Car",
        "image": "http://www.theauto.info/img/CarCategories/'. $data[0].'.jpg",
        "url": "http://www.theauto.info/index.php#'. $data[0].'",
        "name": "'. $data[4].' or similar",
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
        "ratingValue":"'. $ratingValue .'",
        "reviewCount":"'. $reviewCount .'"}
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





<div class="card mb-4 box-shadow"><div class="card-header"><h4 id="'. $data[0].'"class="my-0 font-weight-normal">'. $data[4].' <br><small class="text-muted">or similar starting <span class="badge badge-success">'. $data[11].'</span> USD/день</small></h4></div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-left">Category: '. $data[0].' | Seats: '. $data[3].'</li>
              <li class="text-left">Увеличенный километраж при заказе 1-2 дней(250км в день уже включены в цену)</li>
            <hr />
              <li class="text-left">Unlimited mileage for 3-29 days rent</li>
              <hr />
              <li class="text-left"><img style="float:left" class="img-responsive" src="../img/'. $sale .'.png" alt="Лучшая цена" /> При заказе 30+ дней от <span class="badge badge-danger">'. $data[13].'</span>USD в месяц(в цену включены обязательные страховки и 150км\день)</li>
              <li><img class="img-fluid" src="../img/CarCategories/'. $data[0].'.jpg" alt="аренда авто '. $data[4].' or similar in Israel" /> </li>
              <li><br>
                    <img style="float:left" class="img-responsive" src="../img/'. $ratingValue .'.png" alt="Рэйтинг. Аренда авто '. $data[4].' or similar in Israel"  />
                  <img style="float:left" class="img-responsive" src="../img/star.png" alt="Рэйтинг. Аренда авто '. $data[4].' or similar in Israel"  />  
             из '. $reviewCount .' на '. date('Y-m-d H:i:s') .'</li> 
            <li>                    </li>          
             <li class="text-left">
                <hr />Форма обратной связи:
               <form action="mail_send.php" method="post" id="request-form">
                    <div class="form-group">
                     <div class="col-auto">                     
                     <input type="text" class="form-control" required  name="name" placeholder="Name">
                     </div>
                     <div class="col-auto">
                     <input type="tel" class="form-control" required  name="phone" placeholder="Phone +(country code)ххх-хххх">
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="whatsapp" id="whatsapp" value="whatsapp"> WhatsApp &nbsp;&nbsp;
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="viber" id="viber" value="viber"> Viber 
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    </div>
                     <div class="col-auto">
                     <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required id="email" placeholder="email">                        
                     </div>               
                     <input type="hidden" name="car-select" value="Car Category: '. $data[0].', '. $data[4].' or similar in Israel">
                    </div>
                    <div class="col-auto">
                    <input type="submit" name="submit" value="Send">
                    </div>
                </form>
</li> 
            </ul>
<!--             <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button> -->
         
              
      </div></div>';      
            }
            
        }
        fclose($handle);
    }
    ?>
    
    </div>  
    Car models are for guidance only and similar car models may be supplied. 
    






</div> 
</div>
    
    
<?php include("../__footer.html"); ?>
<?php include("../_bottom_include.html"); ?>
</body>
</html>

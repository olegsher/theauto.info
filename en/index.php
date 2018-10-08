<?php
$title = "Car Rental in Israel";
?>
<!doctype html>
<html lang="en">
<head>
<?php include("../_header_include.html"); ?>
<?php echo '<title>'. $title .'</title>'; ?>

<meta name="description" content="Car Rental in Israel">
<meta name="author" content="">

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
   

<div class="section text-left">
  <h2 class="title">Прокат аренда автомобилей Люкс в Израиле</h2> 
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Бронирование автомобиля в Израиле по лучшей онлайн цене	(до 40% экономии при сравнении с заказом в отделении компании)
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Аренда авто без предоплаты (оплата производится при возврате автомобиля и можно наличными)
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Бесплатная консультация и помощь по бронированию автомобиля в Израиле на русском языке 
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Безлимитный километраж при заказе 3-29 дней
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Отделения по аренде прокату автомобилей во всех крупных городах Израиля
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Огромные скидки при бронировании автомобиля на 30+ дней
  <br><img style="float:left" class="img-responsive" src="http://www.theauto.info/img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Напишите нам на <a style="font-family: Times, serif; color:red">WhatsApp/Viber +972-58-771-0101</a> и наш менеджер вернется к вам с лучшим предложением
	<hr /> 
   

 <div class="card-columns text-center">
        
          
          <?php 
    if (($handle = fopen("../albar_25.12.2017.csv", "r")) !== FALSE) {       
        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//             $num = count($data);                       
            
             $low_s = array(0);
             $ratingValue = rand(4,5);
             $reviewCount = rand(100,200);
            
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





<div class="card mb-4 box-shadow"><div class="card-header"><h4 id="'. $data[0].'"class="my-0 font-weight-normal">'. $data[4].' or similar<small class="text-muted"><br> starting <span class="badge badge-success">'. $data[11].'</span> USD/day</small></h4></div>
          <div class="card-body">

            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-left">Car Category: '. $data[0].' | Seats: '. $data[3].'</li>
              <li class="text-left">Unlimited mileage with 3-29 days</li>
              <li class="text-left">Monthly price starting <span class="badge badge-danger">'. $data[13].'</span>USD</li>
              <li><img class="img-fluid" src="http://www.theauto.info/img/CarCategories/'. $data[0].'.jpg" alt="rent '. $data[4].' or similar in Israel" /> </li>
<li><br>
                  <img style="float:left" class="img-responsive" src="http://www.theauto.info/img/star.png" alt="rent '. $data[4].' or similar in Israel"  /> 
                  <img style="float:left" class="img-responsive" src="http://www.theauto.info/img/star.png" alt="rent '. $data[4].' or similar in Israel"  /> 
                  <img style="float:left" class="img-responsive" src="http://www.theauto.info/img/star.png" alt="rent '. $data[4].' or similar in Israel"  />  
                  <img style="float:left" class="img-responsive" src="http://www.theauto.info/img/star.png" alt="rent '. $data[4].' or similar in Israel"  /> 
                  <img style="float:left" class="img-responsive" src="http://www.theauto.info/img/star.png" alt="rent '. $data[4].' or similar in Israel"  /> 
             from '. $reviewCount .' <br>to '. date('Y-m-d H:i:s') .'</li>
              <li>
            <hr />
               <form action="mail_send.php" method="post" id="request-form">
                    <div class="form-inline">
                     <div class="col-auto">
                     <input type="text" class="form-control" required  name="name" placeholder="name">
                     </div>
                     <div class="col-auto">
                     <input type="tel" class="form-control" required  name="phone" placeholder="phone include country code">
                     </div>               
                     <input type="hidden" name="car-select" value="Car Category: '. $data[0].', '. $data[4].' or similar">
                    </div>
                    <input type="submit" name="submit" value="Send">
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
    Car models are for guidance only and similar car models may be supplied. 
        </div>        
     



   
    <h2 id="price_list" style="text-align: left; font-size: 1.5em; text-transform: uppercase;">Price List:</h2>
    
    <hr /><strong>Car Rental Israel  - Low Season Price List</strong>($USD): 
    <br>Apr 10 - Jul 14 2018; Aug 26 - Dec 19 2018; Jan 6 - Apr 13 2019; Apr 29 - Jul 14 2019; Aug 26 - Dec 19 2019;
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Cat</th>
        <th>Car</th>
        <th>Daily<br>(1-6)</th>
        <th>Weekly</th>
        <th>Ex.Day<br>(8+)</th>
        <th>Monthly<br>(30+)</th>
        <th>CDW</th>
        <th>TP</th>
        <th>3PLC</th>
        <th>Excess</th>
        <th>Extra<br>KM</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    if (($handle = fopen("../albar_25.12.2017.csv", "r")) !== FALSE) {       
        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);                       
            
            $low_s = array(0);
            
            foreach ($low_s as $c) {
                //echo $data[$c] . "<br />\n";
//                 if(empty($data[$c])) {
//                     $value = "&nbsp;";
//                 }else{
//                     $value = $data[$c];

                echo '<tr>
                <td>'. $data[0]. '<br>'. $data[1]. '</td>
                <td><a href="#'. $data[0]. '" ><strong>'. $data[4].' or similar</strong></a><br>Seats '. $data[3]. '</td>
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
           }

        }   
        fclose($handle);
    }
    ?>
        </tbody>
  </table>


<hr /><strong>Car Rental Israel  - High Season Price List</strong>($USD): 
<br>Dec 20 2018 - Jan 5 2019; Apr 14 - 28 2019; Jul 15 - Aug 25 2019;
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Cat</th>
        <th>Car</th>
        <th>Daily<br>(1-6)</th>
        <th>Weekly</th>
        <th>Ex.Day<br>(8+)</th>
        <th>Monthly<br>(30+)</th>
        <th>CDW</th>
        <th>TP</th>
        <th>3PLC</th>
        <th>Excess</th>
        <th>Extra<br>KM</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    if (($handle = fopen("../albar_25.12.2017.csv", "r")) !== FALSE) {       
        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);                       
            
            $low_s = array(0);
            
            foreach ($low_s as $c) {
                //echo $data[$c] . "<br />\n";
//                 if(empty($data[$c])) {
//                     $value = "&nbsp;";
//                 }else{
//                     $value = $data[$c];

                echo '<tr>
                <td>'. $data[0]. '<br>'. $data[1]. '</td>
                <td><a href="#'. $data[0]. '"><strong>'. $data[4].' or similar</strong></a><br>Seats '. $data[3]. '</td>
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
           }

        }   
        fclose($handle);
    }
    ?>
        </tbody>
  </table>
<br>Low Season:  Aug 26 - Dec 19 2018; Jan 6 - Apr 13 2019; Apr 29 - Jul 14 2019; Aug 26 - Dec 19 2019;
<br>High Season: Dec 20 2018 - Jan 5 2019; Apr 14 - 28 2019; Jul 15 - Aug 25 2019;

<br>Daily(1-2) rental -  Include 250 km per day
<br>Daily (3-6) and weekly - Unlimited km 
<br>Monthly (30+) -  Include 150 km per day  
<br>Currency: USD $
<br>Valid: Dec 19, 2019
<br>Rates include the BASIC RENTAL ONLY & EXCLUDE Protection Coverage's (Monthly rentals include the Protection Coverage's CDW, TP & 3PLC).

<hr />
<h2 id="rent_cond" style="color: white; text-shadow: 1px 1px 2px #000000; font-family: Times, serif; text-align: left; font-size: 1.5em; text-transform: uppercase;">Rental Conditions:</h2>

<br>VAT: Israeli passport holders are subject to pay VAT by law including dual citizenship passport holders.
<br>Only tourists with B2 or B3 visa class permits are waived. 
<br>Important: The Visa Permit must be presented at the rental desk for VAT to be waived. 
<br>Airport Fee: One time charge of $39.00 will apply for Pickup or Return of vehicle at the Ben Gurion Airport location. 

<hr />One Way Rentals: FREE within all locations, except for one way To or From the Eilat location as follows: 
<br>1-2 Day Rentals: $200.00 
<br>3 Days and over: FREE 

<hr />Loss Damage Waiver & Theft Protection (CDW/LDW & TP) cover damages caused to the vehicle, except the minimum Excess Charges based on car group. 
<br>An Excess Charge of $500.00-$1,000.00 will apply in case of damage according to vehicle type. CDW/LDW does not cover damage caused to the Tires, Windscreen, Rooftop and underbody damage to the vehicle that will be charged accordingly. 
<br>Super CDW is optional and will reduce the renter’s responsibility to Zero in case of damage to the vehicle. Can be purchased only in conjunction with CDW/LDW & TP. SCDW does not cover damage caused to the Tires, Windscreen and Rooftop. 
<br>Super TP is optional and will reduce the renter’s responsibility to Zero in case of theft of the rental vehicle. Can be purchased only in conjunction with CDW/LDW & TP. 
<br>Liability Coverage (3PLC)- Mandatory for customers that decline CDW/LDW & TP, provided these are covered by the credit card company. Required to cover items not covered by the credit card 
company as blowout’s, tire/trim damage, underbody damage and vandalism caused not as a result of vehicle collision and third party damage. 
<br>CDW/LDW & TP can be declined only if renter has sufficient coverage by a US issued World Master Card or Canadian issued Gold/Platinum Visa/Master Card or Visa Premier. 
<br>Written proof of the credit card company must be provided to confirm valid damage and theft coverage's apply for car rentals in Israel. 
<br>Maximum security guarantee is up to the full value of the vehicle if CDW/LDW & TP (Damage & Theft coverage's) are declined. 
<br>Valid for rentals of maximum 28 consecutive days.

<hr />Delivery & Collection is available on request and requires confirmation. 
<br>Up to 15 KM from Pickup location: $15.00 
<br>Up to 30 KM from Pickup location: $25.00 
<br>Up to 50 KM and over from Pickup location: $40.00 

<hr />Car models are for guidance only and similar car models may be supplied. 
<br>Minimum charge per rental day is 24 hours.
<br>Late returns of 1 hour and over will be charged at 1/3 of the daily rate. 3 hours and over will be calculated as one extra day.
<br>Use of vehicle will be at full responsibility of renter as shown on rental agreement. Every additional driver must be registered on the rental agreement as well. Crossing and exiting Israel borders and/or the Palestinian Authority Territories with the rental vehicle is strictly forbidden. 
<br>Fuel: Supplied with a full tank and recommended to return full. An additional refueling service fee of 30% will apply for vehicles returned with missing fuel. 
<br>Early return of vehicle prior to the original return date will be charged according to the relevant rental period rate (Daily, Weekly, Monthly, Etc). 
<br>Parking tickets, Traffic violations & Toll roads: An additional service fee of ILS 50.00 will apply for unpaid tickets ticket violations and toll road fees.  

<hr />Free Sell applies for the following car groups: B(EBMR), Q(EBAR), C(ECAR), D(CCAR), E(CDAR, F(IDAR), I(SDAR), IW(CWAR), H(FDAR), M(PDAR). All other car groups require specific confirmation.
<br>Cancellations must be sent by 24 hours prior to Pickup Time. Cancellations for 7-8-9 seat vehicles must be sent 48 hours prior to Pickup. 1 day charge will apply for No Shows. 

<hr />Minimum Rental Age & Requirements: A valid Drivers License & Passport must be presented at pickup location. Minimum age of driver is 21 based on car group and requirements as shown below: 
<br>Groups B(MBMR), Q(EBAR), C(EDAR), D(CBAR), E(CCAR): Minimum age required is 21 (Additional fee applies) + Drivers License valid for at least one year. 
<br>Groups F(IDAR), FX(DBAR), I(SCAR), IW(CWAR), H(SDAR), M(PDAR), MH(PCAR), J(SFBR), T(CPMR): Minimum age required is 21 (Additional fee applies) + Drivers License valid for at least one year.
<br>Groups K(UDAR), R(FCAR), O(LFBR), U(IVAR), V(SVAR), V8(FVAR), Y(FVMR), Z(LVAR): Minimum age is 25 + Drivers License valid for at least one year. 
<br>Groups P(LDAR), W(LCBR): Minimum age required is 28 + Drivers License valid for at least five years. 

<hr />Underage Driver: An additional fee of $12.00 per day (Applies for drivers 21-23 years of age). 
<br>Additional Driver: $4.00 per day. 
<br>CSI Child Seat for Infant: $5.00 per day (0-12 months). 
<br>CSB Child Seat for Baby: $5.00 per day (1-3 years). 
<br>CST Child Seat for Toddler: $5.00 per day (4-7 years). 
<br>CBS Child Booster Seat: $5.00 per day (8 years and above).
<br>Smartphone - Navigation System/GPS: $15.00 per day - Includes Free Smartphone, Unlimited local & international phone calls, Unlimited Data & Wifi Hotspot! 
<br>Mini iPad - Navigation System/GPS: $18.00 per day - Includes Unlimited Data, VOIP Calls & Wifi Hotspot! 
<br>Roadsafe Assistance: $4.00 per day (maximum charge $100.00). 
<br>Express assistance for the following services: Keys locked in the car, lost or broken, Flat tire assistance, Out of fuel or Battery failure? We'll send assistance to get your vehicle started quickly. 

<hr />Payment Methods: Major credit cards are accepted to cover rental costs and additional charges: Visa, MasterCard, Amex, Diners. 
<br>Credit Card must be on renter's name. 








</div> 
</div>
    
    
<?php include("../__footer.html"); ?>
<?php include("../_bottom_include.html"); ?>
</body>
</html>
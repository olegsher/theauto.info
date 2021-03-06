<?php
$title = "Car Rental in Israel";
$company = "Vastama Ltd, Reg number 515052702, Phone +972-58-771-0101";
?>
<!doctype html>
<html lang="en">
<head>
<?php include("_header_include.html"); ?>

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


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5WSN6CF');</script>
<!-- End Google Tag Manager -->


</head>

<body>
<?php include("seo.html"); ?>
<hr />
<div class="main main-raised">
  <div class="container">
  <?php include("__carousel.html"); ?>
    <div class="section text-left">
  

<div class="navbar navbar-expand-md mb-4" role="navigation">
<div class="container">	
    <a class="navbar-brand" href="/">Car Rental in Israel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="#price_list">Price List</a></li>
            <li class="nav-item"><a class="nav-link" href="#rent_cond">Rental Conditions</a></li>
             <li class="nav-item"><a class="nav-link" href="/ru/">RUSSIAN</a></li>
<!--             <li class="nav-item"><a class="nav-link" href="#people_carriers">People Carriers</a></li> -->
<!--             <li class="nav-item"><a class="nav-link" href="#standard">Standard</a></li> -->
<!--             <li class="nav-item"><a class="nav-link" href="Europcar_Albar_Vastama_branches.php">Отделения</a></li> -->
<!--             <li class="nav-item"><a class="nav-link" href="pricelist.php">Расценки</a></li> -->
<!--             <li class="nav-item"><a class="nav-link" href="about.php">О компании</a></li> -->
<!--             <li class="nav-item"><a class="nav-link" href="list.php">Новости</a></li> -->
<!--             <li class="nav-item"><a class="nav-link" href="#"></a></li> -->
        </ul>        
    </div> 
     <a class="btn btn-outline-primary" href="/ru/" title="Go to Russian section">Русский</a>  
    </div>
</div>



<!--      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">  -->
<!--       <h5 class="my-0 mr-md-auto font-weight-normal">Vastama Ltd - your Car Rental agent in Israel</h5>  -->
<!--        <nav class="my-2 my-md-0 mr-md-3">  -->
<!--          <a class="p-2 text-dark" href="#price_list">Price List</a>  -->
<!--          <a class="p-2 text-dark" href="#rent_cond">Rental Conditions</a>  -->
<!--          <a class="p-2 text-dark" href="#people_carriers">People Carriers</a>  -->
<!--          <a class="p-2 text-dark" href="#standard">Standard</a>  -->
<!--        </nav>  -->
<!--        <a class="btn btn-outline-primary" href="/ru/" title="Go to Russian section">Русский</a>  -->
<!--      </div>  -->

 


  <h1>Vastama - car rental agent in Israel</h1>
  <br><img style="float:left" class="img-responsive" src="img/checkmark.png" alt="No credit card fees" width="20" height="20" /> No credit card fees
  <br><img style="float:left" class="img-responsive" src="img/checkmark.png" alt="No amendment fees" width="20" height="20" /> No amendment fees
  <br><img style="float:left" class="img-responsive" src="img/checkmark.png" alt="Unlimited mileage with 3-29 days orders" width="20" height="20" /> Unlimited mileage with 3-29 days orders 
  
        
<!--   <p>No credit card fees  -->
<!--   <br>No amendment fees -->
<!--   <br>Unlimited mileage with 3-29 days orders -->
<br><img style="float:left" class="img-responsive" src="img/checkmark.png" alt="Contact us" width="20" height="20" />Contact us by <a style="font-family: Times, serif; color:red">WhatsApp/Viber +972-58-771-0101</a> and our representative will back to you with best offer 
	</div>
	<hr />
       <div class="card-columns text-center">
          
          
          <?php 
    if (($handle = fopen("albar_25.12.2017.csv", "r")) !== FALSE) {       
        
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





<div class="card mb-4 box-shadow"><div class="card-header"><h4 id="'. $data[0].'"class="my-0 font-weight-normal">'. $data[4].' or similar<small class="text-muted"> <br>starting <span class="badge badge-success">'. $data[11].'</span> <small class="text-muted"> USD/day</small></small></h4></div>
          <div class="card-body">

            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-left">Car Category: '. $data[0].' | Seats: '. $data[3].'</li>
              <li class="text-left">Unlimited mileage with 3-29 days</li>
              <li class="text-left">Monthly price starting <span class="badge badge-danger">'. $data[13].'</span>USD</li>
              <li><img class="img-fluid" src="img/CarCategories/'. $data[0].'.jpg" alt="rent '. $data[4].' or similar in Israel" /> </li>

<li><br>
                    <img style="float:left" class="img-responsive" src="img/'. $ratingValue .'.png" alt="Рэйтинг. Аренда авто '. $data[4].' or similar in Israel"  />
                  <img style="float:left" class="img-responsive" src="img/star.png" alt="Рэйтинг. Аренда авто '. $data[4].' or similar in Israel"  />  
             from '. $reviewCount .' votes to '. date('Y-m-d H:i:s') .'</li> 
            <li>                    </li>
                          <li class="text-left">
                <hr />Fill the form:
               <form action="mail_send_en.php" method="post" id="request-form">
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
              
     



   
    <h2 id="price_list" style="color: white; text-shadow: 1px 1px 2px #000000; font-family: Times, serif; text-align: left; font-size: 1.5em; text-transform: uppercase;">Price List:</h2>
    
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
    if (($handle = fopen("albar_25.12.2017.csv", "r")) !== FALSE) {       
        
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
    if (($handle = fopen("albar_25.12.2017.csv", "r")) !== FALSE) {       
        
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!--     <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
<!--     <script src="../../../../assets/js/vendor/popper.min.js"></script> -->
<!--     <script src="../../../../dist/js/bootstrap.min.js"></script> -->
<!--     <script src="../../../../assets/js/vendor/holder.min.js"></script> -->
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
</body>
</html>

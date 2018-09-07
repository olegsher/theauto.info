<?php
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Car Rental in Israel">
<meta name="author" content="">
<meta name="yandex-verification" content="f11475564b48ca1f" />
<meta name='wmail-verification' content='a9138f370e313f0907f0d27ff4975904' />
<meta name="msvalidate.01" content="DFFC9D141B04223AD2603B9AD5606773" />
<link rel="icon" href="http://www.theauto.info/favicon.ico">

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
<!--  <link href="css/styles-red.css" rel="stylesheet"> -->
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- Custom styles for this template -->
<link href="pricing.css" rel="stylesheet">

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
<div class="container">
  

     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow"> 
      <h5 class="my-0 mr-md-auto font-weight-normal">Vastama Ltd - your Car Rental agent in Israel</h5> 
<!--        <nav class="my-2 my-md-0 mr-md-3">  -->
<!--          <a class="p-2 text-dark" href="#leaders">Leaders</a>  -->
<!--          <a class="p-2 text-dark" href="#premium">Premium</a>  -->
<!--          <a class="p-2 text-dark" href="#people_carriers">People Carriers</a>  -->
<!--          <a class="p-2 text-dark" href="#standard">Standard</a>  -->
<!--        </nav>  -->
       <a class="btn btn-outline-primary" href="/ru/" title="Go to Russian section">Русский</a> 
     </div> 

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4"  style="font-family: Times, serif; color:grey; text-transform: uppercase; color: white; text-shadow: 1px 1px 2px #000000; font-size: 2em;">Car Rental in Israel</h1><hr />
      <p class="lead">No credit card fees | No amendment fees | Unlimited mileage with 3-29 days orders</p>
      <p class="lead">Contact us by <a style="font-family: Times, serif; color:red">WhatsApp/Viber +972-58-771-0101</a> and our representative will back to you with best offer</p>
    </div>
    
    
   
    
    
<h2 id="cars" style="color: white; text-shadow: 1px 1px 2px #000000; font-family: Times, serif; text-align: left; font-size: 1.5em; text-transform: uppercase;">Our car fleet</h2>
      <div class="card-deck mb-3 text-center">
        
          
          <?php 
    if (($handle = fopen("albar_25.12.2017.csv", "r")) !== FALSE) {       
        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);                       
            
            $low_s = array(0);
            
            foreach ($low_s as $c) {
            echo '<div class="card mb-4 box-shadow"><div class="card-header"><h4 class="my-0 font-weight-normal">'. $data[4].'</h4></div>
          <div class="card-body">
            <h5 class="card-title pricing-card-title">Starting '. $data[11].'<small class="text-muted"> USD/day</small></h5>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Car Category: '. $data[0].'  Seats: '. $data[3].'</li>
              <li>Unlimited mileage with 3-29 days</li>
              <li>Monthly price starting '. $data[13].'USD</li>
              <li><img class="img-fluid" src="img/CarCategories/'. $data[0].'.jpg" alt="rent '. $data[4].' in Israel" /> </li>
              <li>
               <form action="mail_send.php" method="post">
                    <div class="form-inline">
                     <div class="col-auto">
                     <input type="text" class="form-control" required  name="name" placeholder="name">
                     </div>
                     <div class="col-auto">
                     <input type="tel" class="form-control" required  name="phone" placeholder="phone include country code">
                     </div>               
                     <input type="hidden" name="car-select" value="Car Category: '. $data[0].', '. $data[4].'">
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
        </div>        
     



    <div class="container">
    
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
                <td><strong>'. $data[4].'</strong><br>Seats '. $data[3]. '</td>
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
                <td><strong>'. $data[4].'</strong><br>Seats '. $data[3]. '</td>
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

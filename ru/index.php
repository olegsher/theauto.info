<?php
?>
<!doctype html>
<html lang="ru">
<head>
<title>Прокат аренда авто в Израиле +972-58-7710101</title>
<meta name="description" content="Прокат аренда авто в Израиле. Отделения проката в Бен Гурион, Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот и др. Без предоплаты. Говорим по русски">


<?php include("__header.html"); ?>

</head>

<body>

 
<?php include("../seo.html"); ?>

<div class="container">

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
<!--     <li data-target="#demo" data-slide-to="1"></li> -->
<!--     <li data-target="#demo" data-slide-to="2"></li>  -->
<!--     <li data-target="#demo" data-slide-to="3"></li> -->
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="../img/slider/logo_ru.png" >       
    </div>
    
    
<!--     <div class="carousel-item"> -->
<!--       <img class="img-fluid" src="img/slider/bmw.jpg"> -->
      
<!--     </div> -->
  
  </div>
  
  <!-- Left and right controls -->
<!--   <a class="carousel-control-prev" href="#demo" data-slide="prev"> -->
<!--     <span class="carousel-control-prev-icon"></span> -->
<!--   </a> -->
<!--   <a class="carousel-control-next" href="#demo" data-slide="next"> -->
<!--     <span class="carousel-control-next-icon"></span> -->
<!--   </a> -->
</div>  



<?php include("__menu.html"); ?>


<div class="jumbotron">
  <h1>Vastama - агенство по аренде прокату автомобилей в Израиле</h1>      
  <p>Аренда авто без предоплаты | Бесплатная консультация и помощь по бронированию автомобиля в Израиле на русском языке | Безлимитный километраж при заказе 3-29 дней</p>
</div>

<!--     <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center"> -->
<!--       <h1 class="display-4"  style="font-family: Times, serif; color:grey; text-transform: uppercase; color: white; text-shadow: 1px 1px 2px #000000; font-size: 2em;">Прокат аренда авто в Израиле</h1>-->
<!--       <h3 class="lead">Аренда авто без предоплаты | Бесплатная консультация и помощь по бронированию автомобиля в Израиле на русском языке | Безлимитный километраж при заказе 3-29 дней</h3> -->
 <!--     <p class="lead">Напишите нам на <a style="font-family: Times, serif; color:red">WhatsApp/Viber +972-58-771-0101</a> и наш менеджер вернется к вам с лучшим предложением</p>-->
 <!--  </div> -->
    
    
    
    <h2 id="cars" style="color: white; text-shadow: 1px 1px 2px #000000; font-family: Times, serif; text-align: left; font-size: 1.5em; text-transform: uppercase;">Наш автопарк</h2>
      <div class="card-deck mb-3 text-center">
        
          
          <?php 
    if (($handle = fopen("../albar_25.12.2017.csv", "r")) !== FALSE) {       
        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);                       
            
            $low_s = array(0);
            
            foreach ($low_s as $c) {
            echo '<div class="card mb-4 box-shadow"><div class="card-header"><h4 id="'. $data[0].'"class="my-0 font-weight-normal">'. $data[4].' от <span class="badge badge-success">'. $data[11].'</span><small class="text-muted"> USD/день</small></h4></div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-left">Категория: '. $data[0].' | Сидений: '. $data[3].'</li>
              <li class="text-left">Безлимитный километраж при заказе 3-29 дней</li>
              <li class="text-left">При заказе 30+ дней от <span class="badge badge-danger">'. $data[13].'</span>USD</li>
              <li><img class="img-fluid" src="../img/CarCategories/'. $data[0].'.jpg" alt="аренда авто '. $data[4].' в Израиле" /> </li>
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
                <td><a href="#'. $data[0]. '" ><strong>'. $data[4].'</strong></a><br>Сидений '. $data[3]. '</td>
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
                //echo $data[$c] . "<br />\n";
//                 if(empty($data[$c])) {
//                     $value = "&nbsp;";
//                 }else{
//                     $value = $data[$c];

                echo '<tr>
                <td>'. $data[0]. '<br>'. $data[1]. '</td>
                <td><a href="#'. $data[0]. '"><strong>'. $data[4].'</strong></a><br>Сидений '. $data[3]. '</td>
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
    
    
    
    
       
    
          
      
      
        




<h2 style="color: white; text-shadow: 1px 1px 2px #000000; font-family: Times, serif; text-align: left; font-size: 1.5em; text-transform: uppercase;">Отделения проката аренды автомобилей в Израиле</h2>


<?php include("__branches.html"); ?>


    <hr/>
    <p class="text-left">* Указанные цены соответствуют прейскуранту дилера компаний EuropCar/Albar(май 2018) для обычного сезона и значительно отличаются от расценок на сайте\отделении компании
    <br>* Указанные цены НЕ ВКЛЮЧАЮТ обязательные страховки 
    <br>* Указанные цены НЕ включают НДС (от НДС освобождены только туристы имеющие в пасторте визу В2\В3 - обязательно предоставить при получении машины) 
    <br>* Часы работы отделений - Аэропорт Бен Гурион 24\7, остальные отделения 8-18, пятница 8-13
    <br>* Компания Vastama Ltd официально зарегистрированное (регистрационный номер 515052702) в 2014 году в Израиле. Предприятие является официальным агентом ведущей компании по аренде прокату автомобилей в Израиле Albar 
    <br>* Минимальный возраст водителя 21 год. Водитель 21-23 года - дополнительная оплата "молодой водитель"
    <br>* Модели автомобилей представлены исключительно для примера и при выдаче компания имеет право предоставить автомобиль того же класса, но другой марки.

<!--<h2 style="color: white; text-shadow: 1px 1px 2px #000000; font-family: Times, serif; text-align: left; font-size: 1.5em; text-transform: uppercase;">Новости мира автомобилей</h2> 
    <hr />   -->
<!--   //      <?php include("auto_feed_ru.php"); ?>  -->


<footer class="pt-4 my-md-5 pt-md-5 border-top">
<div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; Vastama Ltd, 2014-2018</small>
          </div>
          <div class="col-6 col-md">
<!--             <h5>Features</h5> -->
            <ul class="list-unstyled text-small">
<!--               <li><a class="text-muted" href="#">Cool stuff</a></li> -->
<!--               <li><a class="text-muted" href="#">Random feature</a></li> -->
<!--               <li><a class="text-muted" href="#">Team feature</a></li> -->
<!--               <li><a class="text-muted" href="#">Stuff for developers</a></li> -->
<!--               <li><a class="text-muted" href="#">Another one</a></li> -->
<!--               <li><a class="text-muted" href="#">Last time</a></li> -->
            </ul>
          </div>
          <div class="col-6 col-md">
<!--             <h5>Resources</h5> -->
            <ul class="list-unstyled text-small">
<!--               <li><a class="text-muted" href="#">Resource</a></li> -->
<!--               <li><a class="text-muted" href="#">Resource name</a></li> -->
<!--               <li><a class="text-muted" href="#">Another resource</a></li> -->
<!--               <li><a class="text-muted" href="#">Final resource</a></li> -->
            </ul>
          </div>
          <div class="col-6 col-md">
<!--             <h5>About</h5> -->
            <ul class="list-unstyled text-small">
<!--               <li><a class="text-muted" href="#">Team</a></li> -->
<!--               <li><a class="text-muted" href="#">Locations</a></li> -->
<!--               <li><a class="text-muted" href="#">Privacy</a></li> -->
<!--               <li><a class="text-muted" href="#">Terms</a></li> -->
            </ul>
          </div>
        </div>


      </footer>
      
        
        
      
    </div>
    
    
    <?php include("../__counters.html"); ?>


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

<?php
?>
<!doctype html>
<html lang="ru">
<head>
<title>Прокат аренда авто в Израиле +972-58-7710101</title>
<meta name="description" content="Прокат аренда авто в Израиле. Отделения проката в Бен Гурион, Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот и др. Без предоплаты. Говорим по русски">


<?php include("__header.html"); ?>
<style>
/* body { */
/*   padding-top: 70px; */
/* } */
.btn-grey{
    background-color:#D8D8D8;
	color:#FFF;
}
.rating-block{
	background-color:#FAFAFA;
	border:1px solid #EFEFEF;
	padding:15px 15px 20px 15px;
	border-radius:3px;
}
.bold{
	font-weight:700;
}
.padding-bottom-7{
	padding-bottom:7px;
}

.review-block{
	background-color:#FAFAFA;
	border:1px solid #EFEFEF;
	padding:15px;
	border-radius:3px;
	margin-bottom:15px;
}
.review-block-name{
	font-size:12px;
	margin:10px 0;
}
.review-block-date{
	font-size:12px;
}
.review-block-rate{
	font-size:13px;
	margin-bottom:15px;
}
.review-block-title{
	font-size:15px;
	font-weight:700;
	margin-bottom:10px;
}
.review-block-description{
	font-size:13px;
}
</style>
</head>

<body>

 
<?php include("../seo.html"); ?>

<div class="container">


<?php include("__carousel.html"); ?>
<?php include("__menu.html"); ?>


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

<!--     <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center"> -->
<!--       <h1 class="display-4"  style="font-family: Times, serif; color:grey; text-transform: uppercase; color: white; text-shadow: 1px 1px 2px #000000; font-size: 2em;">Прокат аренда авто в Израиле</h1>-->
<!--       <h3 class="lead">Аренда авто без предоплаты | Бесплатная консультация и помощь по бронированию автомобиля в Израиле на русском языке | Безлимитный километраж при заказе 3-29 дней</h3> -->
 <!--     <p class="lead">Напишите нам на <a style="font-family: Times, serif; color:red">WhatsApp/Viber +972-58-771-0101</a> и наш менеджер вернется к вам с лучшим предложением</p>-->
 <!--  </div> -->
    
    
    
   
      <div class="card-deck mb-3 text-center">
        
          
          <?php 
    if (($handle = fopen("../albar_25.12.2017.csv", "r")) !== FALSE) {       
        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);                       
            
            $low_s = array(0);
            $ratingValue = rand(4,5);
            $reviewCount = rand(100,200);
            $sale = rand(21,30);
            
            foreach ($low_s as $c) {
            echo '

<script type="application/ld+json"> { 
        "@context": "http://schema.org",    
        "@type":"Car",
        "image": "http://www.theauto.info/img/CarCategories/'. $data[0].'.jpg",
        "url": "http://www.theauto.info/ru/index.php#'. $data[0].'",
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




<div class="card mb-4 box-shadow"><div class="card-header"><h4 id="'. $data[0].'"class="my-0 font-weight-normal">'. $data[4].' или подобный от <span class="badge badge-success">'. $data[11].'</span><small class="text-muted"> USD/день</small></h4></div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-left">Категория: '. $data[0].' | Сидений: '. $data[3].'</li>
              <li class="text-left">Увеличенный километраж при заказе 1-2 дней(250км в день уже включены в цену)</li>
            <hr />
              <li class="text-left">Безлимитный километраж при заказе 3-29 дней</li>
              <hr />
              <li class="text-left"><img style="float:left" class="img-responsive" src="../img/'. $sale .'.png" alt="" width="64"  /> При заказе 30+ дней от <span class="badge badge-danger">'. $data[13].'</span>USD в месяц(в цену включены обязательные страховки и 150км\день)</li>
              <li><img class="img-fluid" src="../img/CarCategories/'. $data[0].'.jpg" alt="аренда авто '. $data[4].' или подобный в Израиле" /> </li>
              <li><br>
                    <img style="float:left" class="img-responsive" src="../img/'. $ratingValue .'.png" alt="Рэйтинг. Аренда авто '. $data[4].' или подобный в Израиле"  />
                  <img style="float:left" class="img-responsive" src="../img/star.png" alt="Рэйтинг. Аренда авто '. $data[4].' или подобный в Израиле"  />  
             из '. $reviewCount .' на '. date('Y-m-d H:i:s') .'</li> 
            <li>
                    </li>          
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
            }
            
        }
        fclose($handle);
    }
    ?>
    
 </div>        
* Аренда (1-2 дня)  -  включает 250км в день и НЕ ВКЛЮЧАЕТ обязательные страховки и НДС
<br>* Аренда (3-29 дней) и понедельная - безлимитный километраж и НЕ ВКЛЮЧАЕТ обязательные страховки и НДС
<br>* Сумма помесячной аренды(30+ дней) -  включает обязательные страховки и 150км в день  
<br>* Все цены указанны на сайте в : USD $  <hr />


 
<div class="jumbotron">
  <h2>Аренда автомобиля в Израиле 
  <br>Расценки <span class="badge badge-primary">Низкого</span> Сезона</strong>($USD):</h2>      
  <p>Апрель 10 - Июль 14 2018; Август 26 - Декабрь 19 2018; Январь 6 - Апрель 13 2019; Апрель 29 - Июль 14 2019; Август 26 - Декабрь 19 2019; </p>
</div>    
<!--     <hr /><strong>Аренда автомобиля в Израиле  - Расценки <span class="badge badge-primary">Низкого</span> Сезона</strong>($USD):  -->
<!--     <br>Апрель 10 - Июль 14 2018; Август 26 - Декабрь 19 2018; Январь 6 - Апрель 13 2019; Апрель 29 - Июль 14 2019; Август 26 - Декабрь 19 2019; -->
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Кат</th>
        <th>Автомобиль</th>
        <th>Дневная<br>(1-6)</th>
        <th>Недельная</th>
        <th>Д.день<br>(8+)</th>
        <th>Месячная<br>(30+)</th>
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
                <td><a href="#'. $data[0]. '" ><strong>'. $data[4].' или подобный</strong></a><br>Сидений '. $data[3]. '</td>
                <td>'. $data[5]. '</td>
                <td>'. $data[9]. '</td>
                <td>'. $data[11]. '</td>
                <td>'. $data[13]. '</td>
              
                <td>'. $data[18]. '</td>
                </tr>';
           }

        }   
        fclose($handle);
    }
    ?>
        </tbody>
  </table>
 * Аренда (1-2 дня)  -  включает 250км в день и НЕ ВКЛЮЧАЕТ обязательные страховки и НДС
<br>* Аренда (3-29 дней) и понедельная - безлимитный километраж и НЕ ВКЛЮЧАЕТ обязательные страховки и НДС
<br>* Сумма помесячной аренды(30+ дней) -  включает обязательные страховки и 150км в день  
<br>* Все цены указанны на сайте в : USD $ <hr />
  
  
  
  
  

<div class="jumbotron">
  <h2>Аренда автомобиля в Израиле 
  <br>Расценки <span class="badge badge-danger">Высокого</span> Сезона</strong>($USD):</h2>      
  <p>Декабрь 20 2018 - Январь 5 2019; Апрель 14 - 28 2019; Июль 15 - Август 25 2019; </p>
</div>
<!-- <hr /><strong>Аренда автомобиля в Израиле  - 
<br>Расценки <span class="badge badge-danger">Высокого</span> Сезона</strong>($USD):  -->
<!-- <br>Декабрь 20 2018 - Январь 5 2019; Апрель 14 - 28 2019; Июль 15 - Август 25 2019; -->
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Кат</th>
        <th>Автомобиль</th>
        <th>Дневная<br>(1-6)</th>
        <th>Недельная</th>
        <th>Д.день<br>(8+)</th>
        <th>Месячная<br>(30+)</th>
        
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
                <td><a href="#'. $data[0]. '"><strong>'. $data[4].' или подобный</strong></a><br>Сидений '. $data[3]. '</td>
                <td>'. $data[6]. '</td>
                <td>'. $data[10]. '</td>
                <td>'. $data[12]. '</td>
                <td>'. $data[14]. '</td>
                
                <td>'. $data[18]. '</td>
                </tr>';
           }

        }   
        fclose($handle);
    }
    ?>
        </tbody>
  </table>
  * Аренда (1-2 дня)  -  включает 250км в день и НЕ ВКЛЮЧАЕТ обязательные страховки и НДС
<br>* Аренда (3-29 дней) и понедельная - безлимитный километраж и НЕ ВКЛЮЧАЕТ обязательные страховки и НДС
<br>* Сумма помесячной аренды(30+ дней) -  включает обязательные страховки и 150км в день  
<br>* Все цены указанны на сайте в : USD $<hr />
  
  <div class="jumbotron">
  <h2>Обязательные страховки и отмена личного участия</h2>      
  <p>Обязательные страховки (CDW/LDW & TP) покрывают ущерб причиненный автомобилю при аварии или угоне и ограничивают личное участие арендатора до суммы франшизы которая зависит от категории автомобиля.
  <hr /><span class="badge badge-danger">Франшиза</span>
Личная ответственность при повреждении или угоне автомобиля. Сумма франшизы зависит от категории автомобиля $475 — $960. Может быть уменьшена до нуля при приобретении дополнительных полисов Super CDW и/или Super TP
 <hr /><span class="badge badge-danger">Дополнительная страховка (Super CDW)</span>

не обязательная и снижает ответственность арендатора до Нуля в случае ущерба автомобилю (т.е отменяет франшизу).
Приобрести данный вид страхования возможно только в дополнение к базовому полису(CDW/LDW & TP).
<br>* Данный вид страхования не покрывает повреждения, нанесенные шинам, колесам, стеклам, крыше, а так же ходовой части автомобиля. Арендатор обязан выплатить полную сумму ущерба, нанесенного этим частям автомобиля. 
<hr /><span class="badge badge-danger">Дополнительная страховка (Super TP)</span>
не обязательная и снижает ответственность арендатора до Нуля в случае угона арендованнго автомобиля (т.е отменяет франшизу).
Приобрести данный вид страхования возможно только в дополнение к базовому полису (CDW/LDW & TP).

<hr /><span class="badge badge-danger">Кто не обязан брать эти страховки?</span>
<br>Только кредитные компании США Master Card World или Канады Gold/Platinum Visa/Master Card или Visa Premier могут быть использованы для отказа от полиса CDW/LDW & TP. В случае отказа от полиса CDW & TP ответственность арендатора возрастает до полной стоимости автомобиля.

<br>Страхование 3-его лица (3PLC — Limited Coverage) обязательно для клиентов, отказавшихся от полиса CDW/LDW & TP и имеют покрытие от кредитной компании.
Для приобретения данного полиса, арендатор обязан иметь при себе годную кредитную карту, например World Master Card из США или Канадскую Gold/Platinum Visa/Master Card либо Visa Premier с письменным подтверждением о покрытии кредитной компанией страховки на аренду авто в Израиле.
<br>Страхование 3-его (3PLC — Limited Coverage) лица является обязательным в Израиле в том случае, когда полис CDW/LDW & TP был отклонен или при необходимости покрытия ущерба, который не покрыт кредитной компании, например ущерб шинам\колесам не вследствие кражи, вандализма либо не является результатом столкновения автомобиля или ущерба нанесенного третьей стороной.
<br>Полис CDW/LDW & TP должен быть приобретен в случае, когда покрытие от кредитной компании не распространяется на аренду авто в Израиле.


<hr /><span class="badge badge-danger">Почему цены на сайте не включают обязательные страховки?</span>
<br>Многие наши клиенты имеют кредитные карты от World Master Card из США или Канадскую Gold/Platinum Visa/Master Card либо Visa Premier с письменным подтверждением о покрытии кредитной компанией страховки на аренду авто в Израиле, поэтому на сайте цены на аренду не включают обязательные страховки. Покрытие кредитных компаний действует только на краткосрочные аренды т.е до 30 дней.


</p>
</div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Кат</th>
        <th>Автомобиль</th>
        
        <th>CDW</th>
        <th>TP</th>
        <th>3PLC</th>
        <th>Франшиза</th>
        <th>Super CDW</th>
        <th>Super TP</th>
        
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
                <td>'. $data[0]. '</td>
                <td><a href="#'. $data[0]. '" ><strong>'. $data[4].' или подобный</strong></a></td>

                <td>'. $data[15]. '</td>
                <td>'. $data[16]. '</td>
                <td>'. $data[17]. '</td>
                <td>'. $data[23]. '</td>
                <td>'. $data[19]. '</td>
                <td>'. $data[21]. '</td>
                </tr>';
           }

        }   
        fclose($handle);
    }
    ?>
        </tbody>
  </table>
  
  
  
  
  
<br>Аренда (1-2 дня)  -  включает 250км в день и НЕ ВКЛЮЧАЕТ обязательные страховки и НДС
<br>Аренда (3-29 дней) и понедельная - безлимитный километраж и НЕ ВКЛЮЧАЕТ обязательные страховки и НДС
<br>Сумма помесячной аренды(30+ дней) -  включает обязательные страховки и 150км в день  
<br>Все цены указанны на сайте в : USD $
<br>Цены действительны до: Dec 19, 2019
<p class="text-left">* Указанные на сайте <span class="badge badge-success">цены значительно ниже официальных расценок</span> на сайте\отделениях компании и соответствуют прейскуранту дилера компаний EuropCar/Albar(май 2018) 
<br>* Указанные на сайте цены <span class="badge badge-danger">НЕ ВКЛЮЧАЮТ</span> обязательные страховки 
<br>* Указанные на сайте цены <span class="badge badge-danger">НЕ ВКЛЮЧАЮТ НДС</span> (от НДС освобождены лица имеющие в пасторте визу В2\В3 - обязательно предоставить при получении машины)
<br>* Модели автомобилей представлены исключительно для примера и при выдаче компания имеет право предоставить автомобиль того же класса, но другой марки.
<br>* Минимальный возраст водителя 21 год.
<br>* Часы работы отделений - Аэропорт Бен Гурион 24\7, остальные отделения 8-18, пятница 8-13 (Йом Кипур - все отделения закрыты)
       
    
    
    
       
    
          
      
      
        




<h2 style="color: white; text-shadow: 1px 1px 2px #000000; font-family: Times, serif; text-align: left; font-size: 1.5em; text-transform: uppercase;">Отделения проката аренды автомобилей в Израиле</h2>


<?php include("__branches.html"); ?>


    <hr/>
    <p class="text-left">
   
    <br>* Компания Vastama Ltd официально зарегистрированное (регистрационный номер 515052702) в 2014 году в Израиле. Предприятие является официальным агентом ведущей компании по аренде прокату автомобилей в Израиле Albar 
   
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

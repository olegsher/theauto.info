<?php
?>
<!doctype html>
<html lang="ru">
<head>
<?php include("../_header_include.html"); ?>
<?php
echo '<title>Прокат аренда автомобилей в Израиле - расценки на '. date('Y M') .'</title>
<meta name="description" content="Прокат авто в Израиле. Отделения проката в Бен Гурион, Тель Авив Иерусалим Хайфа Эйлат. Говорим по русски. Расценки на '. date('Y M') .'"> ';
?>
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
      <h1>Наши расценки</h1> 
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Бронирование автомобиля в Израиле по лучшей онлайн цене" width="20" height="20" /> Бронирование автомобиля в Израиле по лучшей онлайн цене	(до 40% экономии при сравнении с заказом в отделении компании)
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Аренда авто без предоплаты" width="20" height="20" /> Аренда авто без предоплаты (оплата производится при возврате автомобиля и можно наличными)
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Бесплатная консультация и помощь" width="20" height="20" /> Бесплатная консультация и помощь по бронированию автомобиля в Израиле на русском языке 
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Безлимитный километраж при заказе 3-29 дней" width="20" height="20" /> Безлимитный километраж при заказе 3-29 дней
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Отделения по аренде прокату автомобилей во всех крупных городах Израиля" width="20" height="20" /> Отделения по аренде прокату автомобилей во всех крупных городах Израиля
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Огромные скидки при бронировании автомобиля на 30+ дней" width="20" height="20" /> Огромные скидки при бронировании автомобиля на 30+ дней
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="WhatsApp/Viber +972-58-771-0101" width="20" height="20" /> Напишите нам на <a style="font-family: Times, serif; color:red">WhatsApp/Viber +972-58-771-0101</a> и наш менеджер вернется к вам с лучшим предложением
</div>
	<hr />
	
<!-- 	<div class="jumbotron"> -->
  <h2 id="Low_c">Аренда автомобиля в Израиле - pасценки <span style="color:blue">низкого</span> cезона($USD):</h2>      
  <p>Апрель 10 - Июль 14 2018; Август 26 - Декабрь 19 2018; Январь 6 - Апрель 13 2019; Апрель 29 - Июль 14 2019; Август 26 - Декабрь 19 2019; </p>
<!-- </div>     -->
   <table class="table table-bordered">
    <thead>
      <tr>
        <th>Кат</th>
        <th>Автомобиль</th>
        <th>Дневная<br>(1-6)</th>
        <th>Недельная</th>
        <th>Д.день<br>(8+)</th>
        <th>Долгосрочная<br>(30+)</th>
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
                <td><a href="/ru/#'. $data[0]. '" ><strong>'. $data[4].' или подобный</strong></a><br>Сидений '. $data[3]. '</td>
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
<br>* Сумма долгосрочной аренды(30+ дней) -  включает обязательные страховки и 150км в день  
<br>* Все цены указанны на сайте в : USD $ <hr />
  
  
  
  
  

  <h2 id="High_c">Аренда автомобиля в Израиле - расценки <span style="color:red">высокого</span> сезона($USD):</h2>      
  <p>Декабрь 20 2018 - Январь 5 2019; Апрель 14 - 28 2019; Июль 15 - Август 25 2019; </p>

<table class="table table-bordered">
    <thead>
      <tr>
        <th>Кат</th>
        <th>Автомобиль</th>
        <th>Дневная<br>(1-6)</th>
        <th>Недельная</th>
        <th>Д.день<br>(8+)</th>
        <th>Долгосрочная<br>(30+)</th>
        
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
                <td><a href="/ru/#'. $data[0]. '"><strong>'. $data[4].' или подобный</strong></a><br>Сидений '. $data[3]. '</td>
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
<br>* Сумма долгосрочной аренды(30+ дней) -  включает обязательные страховки и 150км в день  
<br>* Все цены указанны на сайте в : USD $<hr />



<h2 id="Low_c">Страховки и покрытия(CDW\TP\3PLC), отмена личного участия(Super CDW\TP), франшиза($USD):</h2>
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
                <td><a href="/ru/#'. $data[0]. '" ><strong>'. $data[4].' или подобный</strong></a></td>

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
 </div>  
</div>

</div>  
</div>





<?php include("__footer.html"); ?>
<?php include("../_bottom_include.html"); ?>
</body>
</html>
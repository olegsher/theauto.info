<?php
?>
<!doctype html>
<html lang="ru">
<head>
<?php include("../_header_include.html"); ?>
<title>Прокат аренда автомобиля по всему миру +972-58-7710101</title>
<meta name="description" content="Прокат аренда автомобиля по всему миру. Говорим по русски">
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
      <h2 class="title">Прокат аренда автомобиля по всему миру</h2> 
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Бронирование автомобиля по всему миру по лучшей онлайн цене	(до 40% экономии при сравнении с заказом в отделении компании)
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Бесплатная консультация и помощь по бронированию автомобиля на русском языке 
  <br><img style="float:left" class="img-responsive" src="../img/checkmark.png" alt="Консультация и помощь по бронированию автомобиля в Израиле на русском языке" width="20" height="20" /> Напишите нам на <a style="font-family: Times, serif; color:red">WhatsApp/Viber +972-58-771-0101</a> или заполните форму ниже и наш менеджер вернется к вам с лучшим предложением
	</div>
	
 
 Форма обратной связи:
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
                     <input type="hidden" name="car-select" value="world">
                    </div>
                    <div class="col-auto">
                    <input type="submit" name="submit" value="Отправить">
                    </div>
                </form>     

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
<?php 
if(isset($_POST['submit'])){
    $to = "rentcargroup@privateisrael.com"; // this is your Email address 
    $reqemail = "rentcargroup@privateisrael.com";
    $from = $_POST['email']; // this is the sender's Email address
    

    $first_name = $_POST['name'];
    $phone = $_POST['phone'];  
    $car_select = $_POST['car-select'];

    $headers = "From: " . strip_tags($reqemail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    
    
    $subject = $_POST['name'] . " " . $_POST['phone'] . " " . $_POST['email'] . " " . $_POST['car-select'] . " " . "theAuto.info";    
            $message = '<html lang="ru"><body>';
            $message .= '<hr />';
            $message .= 'Аренда прокат автомобиля в Израиле http://www.theAuto.info +972-58-7710101';
            $message .= '<hr />';
$message .= '<img src="http://www.rentalcarsisrael.com/images/europcar.jpg" alt="Бронирование автомобиля в Израиле +972-58-7710101" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Car Category:</strong> </td><td>" . strip_tags($_POST['car-select']) . "</td></tr>";
$message .= "</table>";
$message .= "<hr/> Уважаемый\ая  ". strip_tags($_POST['name']) ." вы получили это сообщение потому что заполнили заявку на аренду автомобиля в Израиле на сайте http://www.theAuto.info 
<br>Наш сотрудник вернется к Вам в рабочие часы (8-15 по Израильскому времени). 
<br>В случае если Вы хотите чтобы мы связались с Вами в кратчайший срок то напишите сообщение на WhatsApp\Viber +972-58-7710101";
$message .= "</body></html>";


     mail($to,$subject,$message,$headers);
    
    $subject2 = "Аренда прокат автомобиля в Израиле http://www.theAuto.info +972-58-7710101";
    $headers2 = "From: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "Reply-To: ". strip_tags($reqemail) . "\r\n";
    $headers .= "CC: office@vastama.com\r\n";
//    $headers2 = "Return-path: " . strip_tags($reqemail) . "\r\n";
    $headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-Type: text/html; charset=utf-8\r\n";
    // $message2 = "test";
   mail($from,$subject2,$message,$headers2); // sends a copy of the message to the sender  
   header('Location: http://www.theauto.info/ru/');
    }
?>
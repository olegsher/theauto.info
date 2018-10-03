<?php       
   $title = "Экскурсии по Израилю";           

echo '
<!doctype html>
<html lang="ru">
<head>';
include("../../_header_include.html");
echo '
<title>'. $title .'</title>
<meta name="description" content="'. $title .'">
<meta name="author" content="Vastama ltd" >';
include("../../__google_ta.html"); 
echo '</head>\n<body>';

include("../_menu.html"); 
echo '
<hr />
<div class="main main-raised">
  <div class="container">
    <div class="section text-left">
      <h2 class="title">'. $title .'</h2>
<div class="card-columns text-center">
<div class="card bg-dark text-white">
  <img class="card-img" src="https://atlantistravel.co.il/images/excursion/thumb_icon279_5b4351a93acea.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>
<div class="card bg-dark text-white">
  <img class="card-img" src="https://atlantistravel.co.il/images/excursion/thumb_icon279_5b4351a93acea.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>
 </div>      
    </div>
  </div>
</div>';

include("../__footer.html");
include("../../_bottom_include.html");
echo '
</body>
</html>';
?>
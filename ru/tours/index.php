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

<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">I a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text"> a broader card with text below as a natural lead-in to extra content. This content is a little longer.This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
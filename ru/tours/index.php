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

<div class="card bg-dark text-white">
  <img class="card-img" src="https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Card title</h4>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
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
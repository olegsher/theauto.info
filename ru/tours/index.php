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
echo '</head>

<body>';
include("../_menu.html"); 
echo '
<hr />
<div class="main main-raised">
  <div class="container">
    <div class="section text-left">
      <h2 class="title">'. $title .'</h2>';
       include("");
       echo '
    </div>
  </div>
</div>';

include("../__footer.html");
include("../../_bottom_include.html");
echo '
</body>
</html>';
?>
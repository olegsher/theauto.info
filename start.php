<?php
    $title = "Start page";
?>
<!doctype html>
<html lang="en">
<head>
<?php include("_header_include.html"); ?>
<?php echo '<title>'. $title .'</title>'; ?>
<meta name="description" content="'. $title .'">
<meta name="author" content="Vastama ltd" >
</head>

<body>
<div class="main main-raised">
  <div class="container">
    <div class="section text-left">
      <?php echo '<h2 class="title">'. $title .'</h2>'; ?>
       <input type="button" class="btn btn-info" value="EN" onclick="location.href = 'http://www.theauto.info/en';"><br>
       <input type="button" class="btn btn-info" value="RU" onclick="location.href = 'http://www.theauto.info/ru';">
       
      
    </div>
  </div>
</div>

<?php include("__footer.html"); ?>
<?php include("_bottom_include.html"); ?>
</body>
</html>
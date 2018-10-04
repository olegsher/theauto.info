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
       <input type="button" class="btn btn-primary btn-lg" value="EN" onclick="location.href = 'http://www.theauto.info/en';">
       <input type="button" class="btn btn-primary btn-lg" value="RU" onclick="location.href = 'http://www.theauto.info/ru';">
       <hr />
       <a href="http://www.theauto.info/en" class="btn btn-primary btn-lg " role="button" aria-disabled="false">EN</a>
       <a href="http://www.theauto.info/ru" class="btn btn-primary btn-lg " role="button" aria-disabled="true">RU</a>
       
      
    </div>
  </div>
</div>

<?php include("__footer.html"); ?>
<?php include("_bottom_include.html"); ?>
</body>
</html>
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
    <div class="d-flex justify-content-center align-items-center" >
      <h2 class="title">        
       <a href="http://www.theauto.info/en" class="btn btn-info btn-round btn-lg " role="button" aria-disabled="false">English</a>       		
       <a href="http://www.theauto.info/ru" class="btn btn-info btn-round btn-lg " role="button" aria-disabled="false">Русский</a>  
       </h2> 
    </div>
  </div>
</div>


<?php include("__footer.html"); ?>
<?php include("_bottom_include.html"); ?>
</body>
</html>
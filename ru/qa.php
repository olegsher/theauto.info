<?php
?>
<!doctype html>
<html lang="ru">
<head>
<?php include("../_header_include.html"); ?>
<title>Вопросы и ответы по аренде автомобиля в Израиле</title>
<meta name="description" content="Вопросы и ответы по аренде автомобиля в Израиле">
<meta name="author" content="Vastama ltd" >
</head>

<body>


<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
    <a class="navbar-brand" href="#">Vastama - Аренда авто в Израиле</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Автомобили</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown2">
                    <li class="dropdown-item" href="http://www.theauto.info/ru/lux.php"><a>Люкс</a></li>
                    <li class="dropdown-item" href="http://www.theauto.info/ru/minivan.php"><a>Минивэны</a></li>                   
                </ul>
            </li>
        </ul>        
    </div>
</div>

<hr />
<div class="main main-raised">
  <div class="container">
    <div class="section text-left">
      <h2 class="title">Your main section here</h2>
      <?php include("__qa.html"); ?>
    </div>
  </div>
</div>

<footer class="footer footer-default" >
  <div class="container">
    <nav class="float-left">
      <ul>
        <li>
          <a href="http://www.theauto.info/ru">
              Vastama ltd
          </a>
        </li>
      </ul>
    </nav>
    <div class="copyright float-right">
        &copy;
        <script>
            document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com/" target="blank">Creative Tim</a> for a better web.
    </div>
  </div>
</footer>





<?php include("../_bottom_include.html"); ?>
</body>
</html>

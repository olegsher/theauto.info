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



<nav class="navbar fixed-top navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Fixed top</a>
  </div>
</nav>

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

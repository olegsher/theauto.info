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




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
    <a class="navbar-brand" href="#">Bootstrap 4 NavBar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://fontenele.github.io/bootstrap-navbar-dropdowns/" target="_blank">Github</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li class="dropdown-item" href="#"><a>Action 1</a></li>
                    <li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>Action 1.1</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown1-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1.1</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown1-1-1">
                                    <li class="dropdown-item" href="#"><a>Action 1.1.1</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown2">
                    <li class="dropdown-item" href="#"><a>Action 2 A</a></li>
                    <li class="dropdown-item" href="#"><a>Action 2 B</a></li>
                    <li class="dropdown-item" href="#"><a>Action 2 C</a></li>
                    <li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                            <li class="dropdown-item" href="#"><a>Action 2.1 A</a></li>
                            <li class="dropdown-item" href="#"><a>Action 2.1 B</a></li>
                            <li class="dropdown-item" href="#"><a>Action 2.1 C</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.1</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                    <li class="dropdown-item" href="#"><a>Action 2.1.1 A</a></li>
                                    <li class="dropdown-item" href="#"><a>Action 2.1.1 B</a></li>
                                    <li class="dropdown-item" href="#"><a>Action 2.1.1 C</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.2</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1-2">
                                    <li class="dropdown-item" href="#"><a>Action 2.1.2 A</a></li>
                                    <li class="dropdown-item" href="#"><a>Action 2.1.2 B</a></li>
                                    <li class="dropdown-item" href="#"><a>Action 2.1.2 C</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</div>

<main role="main" class="container">
    <div class="jumbotron text-center">
        <h1>Bootstrap 4 NavBar</h1>
        <p class="lead text-info">NavBar with too many childs.</p>
    </div>
</main>
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

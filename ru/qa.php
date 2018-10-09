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
<?php include("_menu.html"); ?>

<hr />
<div class="main main-raised">
  <div class="container">
    <div class="section text-left">
      <h2 class="title">Вопросы и ответы по аренде автомобиля в Израиле</h2>
      <?php include("__qa.html"); ?>
    </div>
  </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<?php include("__footer.html"); ?>
<?php include("../_bottom_include.html"); ?>
</body>
</html>

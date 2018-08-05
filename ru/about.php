<?php
?>
<!doctype html>
<html lang="ru">
<head>
<title>Компания Vastama ltd. Прокат аренда автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат</title>
<meta name="description" content="Компания Vastama ltd. Прокат аренда автомобилей в Израиле, Аэропорт Бен Гурион Иерусалим Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот. Без предоплаты. Говорим по русски">
<meta name="author" content="">

<?php include("__header.html"); ?>

</head>

<body>
<?php include("../seo.html"); ?>
<div class="container">
<?php include("__menu.html"); ?>

<h1 id="standard" style="color: white; text-shadow: 1px 1px 2px #000000; font-family: Times, serif; text-align: left; font-size: 1.5em; text-transform: uppercase;">Компания Vastama ltd. Прокат аренда автомобилей в Израиле</h1>
<?php include("__about.html"); ?>
<table>\n\n";
<?php
$f = fopen("../pricelist/albar.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . |</td>";
        }
        echo "</tr>\n";
}
fclose($f);
?>
</table>>

</div>
</body>
</html>

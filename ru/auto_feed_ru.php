<?php
$rss = new DOMDocument();
$rss->load('http://news.yandex.ru/auto.rss');
$feed = array();
foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array(
        'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
        'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
        'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
        'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
    
    );
    array_push($feed, $item);
}
$limit = 10;

for ($x = 0; $x < $limit; $x ++) {
    $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    $link = $feed[$x]['link'];
    $description = $feed[$x]['desc'];
    $date = date('l F d, Y', strtotime($feed[$x]['date']));
    $date1= date('Y-m-d', strtotime($feed[$x]['date']));
    $newname = preg_replace('/\s+/', '-', $title);
    $file_x = "news/$date1-$newname.php";
    
    echo $date1 . ' <strong>' . $title . '</strong><br>';
    echo $description . ' <a href="' . $file_x . ' "title="' . "'$title' . - Новости мира автомобилей на портале TheAuto.info" .' " target="_self">' . "читать далее" . '</a> <br />';
    
    // $file_x = "news/$date1 $title.html";
    
    if (file_exists($file_x)) {
        // echo "The file $file_x exists";
    } else {
        $myfile = fopen($file_x, "w") or die("Unable to open file!");
    // };

    // $myfile = fopen("news/$title.html", "w") or die("Unable to open file!"); 
       
    
    fwrite($myfile, "<?php \n ?>\n <!doctype html>\n<html lang=\"ru\">\n<head>\n");
    fwrite($myfile, "<title>$title</title>\n");
    fwrite($myfile, "<meta name=\"description\" content=\"$title - Прокат аренда авто в Израиле. Отделения проката в Бен Гурион, Тель Авив Ашдод Хайфа Эйлат Герцлия Нетания Ришон ЛеЦион Реховот и др. Без предоплаты. Говорим по русски\">\n ");
    fwrite($myfile, "<?php \n include('../__header.html'); \n ?>");
    fwrite($myfile, "\n</head>\n<body>\n<div class=\"container\">\n");
    fwrite($myfile, "<?php \n include('../../seo.html'); \n ?>");
    fwrite($myfile, "<?php \n include('../__menu.html'); \n ?>");
    
    $txt = '<p><strong>' . $title . '</strong> <a rel="nofollow" href="' . $link . ' " 
        title="' . "Новости мира автомобилей на портале TheAuto.info" . '" target="_blank">' . "полная статья" . '</a> <br />' . $description . '</div>';
    fwrite($myfile, "<strong>$title</strong><br>");
    fwrite($myfile, $description);
    fwrite($myfile, "<br><a rel=\"nofollow\" href=\"$link\" title=\"Новости мира автомобилей на портале TheAuto.info\" target=\"_blank\">полная статья на Yandex</a>");
        
    
    fwrite($myfile,"\n<small class=\"d-block mb-3 text-muted\">&copy; Vastama Ltd, 2014-2018</small>");
    fwrite($myfile, "\n</div>\n</body>\n</html>\n");
    fclose($myfile);
    };
    
}

?>

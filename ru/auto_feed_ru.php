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
    
    $myfile = fopen("news/$title.html", "w") or die("Unable to open file!"); 
    $header = '<!doctype html><html lang="ru"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"></head><body>';
    fwrite($myfile, $header);
    $txt = '<p><strong>' . $title . '</strong> <a rel="nofollow" href="' . $link . ' " 
        title="' . "Новости мира автомобилей на портале TheAuto.info" . '" target="_blank">' . "полная статья" . '</a> <br />' . $description . '</body></html>';
    fwrite($myfile, $txt);    
    fclose($myfile);
    include("news/$title.html");
    
}

?>

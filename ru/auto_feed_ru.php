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
$limit = 5;
for ($x = 0; $x < $limit; $x ++) {
    $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    $link = $feed[$x]['link'];
    $description = $feed[$x]['desc'];
    $date = date('l F d, Y', strtotime($feed[$x]['date']));
    
    // echo '<p><strong><a href="' . $link . ' " title="' . $title . '" target="_blank">' . $title . '</a></strong><br />';
    // echo '<small><em>Posted on '.$date.'</em></small></p>';
    echo '<p><strong>' . $title . '</strong> <a rel="nofollow" href="' . $link . ' " title="' . "Новости мира автомобилей на портале TheAuto.info" . '" target="_blank">' . "полная статья" . '</a> <br /> ';
    echo '' . $description . '';
}

$file = 'news/abc.html';
$current .= "John Smith\n";
// Write the contents back to the file
file_put_contents($file, $current);

?>

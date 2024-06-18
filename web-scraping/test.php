<?php
include('simple_html_dom.php');

$url = array(
    "https://id.wikipedia.org/wiki/Presiden_Indonesia",
    "https://id.wikipedia.org/wiki/Presiden_Afrika_Selatan",
    "https://id.wikipedia.org/wiki/Presiden_Albania",
    "https://id.wikipedia.org/wiki/Presiden_Amerika_Serikat",
);

foreach ($url as $result) {
    $html = file_get_html($result);
    $element = $html->find('table.infobox img', 0);

    if ($element) {
        $img_url = 'https:' . $element->src;
        echo "Gambar ditemukan: $img_url\n\n";
    } else {
        echo "Gambar tidak ditemukan\n\n";
    }
}
?>

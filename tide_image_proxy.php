<?php
if (!isset($_GET['img'])) {
    http_response_code(400);
    exit('Missing img parameter');
}

$imgUrl = $_GET['img'];

if (strpos($imgUrl, 'http://www.mirc.jha.or.jp/') !== 0) {
    http_response_code(403);
    exit('Forbidden');
}

header('Content-Type: image/png');
readfile($imgUrl);

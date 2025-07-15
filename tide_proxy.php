<?php
$area = $_GET['area'] ?? 'osaka';
$target = "http://www.mirc.jha.or.jp/cgi-bin/w/w-tcp?AREA=" . urlencode($area);
header('Content-Type: text/html; charset=Shift_JIS');
echo file_get_contents($target);
?>
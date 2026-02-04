<?php
$text = isset($_GET['text']) ? $_GET['text'] : 'Текст не передан';
$filename = 'downloaded_text.txt';
header('Content-Type: text/plain; charset=UTF-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . strlen($text));
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
echo $text;
exit;
?>

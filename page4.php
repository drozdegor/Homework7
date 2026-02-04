<?php
session_start();
$openCount = isset($_SESSION['open_count']) ? $_SESSION['open_count'] : 0;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница 4</title>
</head>
<body>
    <h1>Страница 4</h1>
    <p>Страница 3 была открыта <strong><?php echo $openCount; ?></strong> раз.</p>
    <p><a href="index.php">Вернуться к списку страниц</a></p>
</body>
</html>

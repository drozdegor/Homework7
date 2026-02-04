<?php
session_start();
if (!isset($_SESSION['open_count'])) {
    $_SESSION['open_count'] = 0;
}
$_SESSION['open_count']++;
if ($_SESSION['open_count'] % 3 === 0) {
    header('Location: page4.php');
    exit; 
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница 3</title>
</head>
<body>
    <h1>Страница 3</h1>
    <p>
        Эта страница была открыта <strong><?php echo $_SESSION['open_count']; ?></strong> раз.
    </p>
    <p>
        При следующем открытии № <?php echo $_SESSION['open_count'] + 1; ?> 
        количество станет кратно 3 — будет выполнен редирект на страницу 4.
    </p>
    <p><a href="index.php">Вернуться к списку страниц</a></p>
</body>
</html>

<?php
 declare(strict_types=1);

 session_start();

 // Подключаем код для сохранения информации о странице в сессии
 include 'savepage.inc.php';
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <title>Страница 2</title>
 </head>
 <body>

  <h1>Страница 2</h1>

  <?php
   include 'menu.inc.php';

   // Подключаем код для вывода информации обо всех посещённых страницах
   include 'visited.inc.php';
  ?>

 </body>
</html>

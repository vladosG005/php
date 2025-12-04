<?php
 declare(strict_types=1);

 $visitcount = 1;
 $lastvisit = date('d.m.Y в h:i:s.');

 if (!empty($_COOKIE)) {
     $visitcount = htmlspecialchars(trim($_COOKIE['visitcount']));
     $lastvisit = htmlspecialchars(trim($_COOKIE['lastvisit']));
 }
 
 setcookie('visitcount', (string) ($visitcount + 1), time() + 60 * 60 * 24);
 setcookie('lastvisit', (string) date('d.m.Y в h:i:s.'), time() + 60 * 60 * 24);
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Последний визит</title>
 </head>
 <body>

  <h1>Последний визит</h1>

  <?php
   echo '<pre>';

   echo 'Это ваше ', $visitcount, '-е посещение этой страницы.', PHP_EOL;
   if ($visitcount > 1) {
       echo 'Последний раз вы здесь были ', $lastvisit, PHP_EOL;
   }

   echo '</pre>';
  ?>

 </body>
</html>

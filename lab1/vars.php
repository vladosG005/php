<?php
 $name = 'Владислав';
 $age = 20;
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Переменные и вывод</title>
 </head>
 <body>
  <h1>Переменные и вывод</h1>
  <?php
   echo '<pre>';
   echo "Меня зовут {$name}", PHP_EOL;
   echo "Мне {$age} лет", PHP_EOL;
   echo gettype($name), PHP_EOL;
   echo gettype($age), PHP_EOL;
   unset($name, $age);
   echo '</pre>';
  ?> 
 </body>
</html>

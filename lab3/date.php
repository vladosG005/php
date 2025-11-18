<<<<<<< HEAD
<?php
 declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Использование функций даты и времени</title>
 </head>
 <body>

  <h1>Использование функций даты и времени</h1>
  <?php
   echo '<pre>';
   
   $now = time();
   echo 'С начала эпохи UNIX прошло аж ', $now, ' секунд!', PHP_EOL;
   
   $birthday = mktime(0, 0, 0, 7, 26, time() - mktime(0, 0, 0, 7, 26) > 0 ?
   getdate()['year'] + 1 : getdate()['year']);
   echo 'Дата ближайшего дня рождения: ', date('d.m.Y', $birthday), PHP_EOL;
 
   $hour = getdate()['hours'];
   
   if (6 <= $hour && $hour < 12) {
       $welcome = 'Доброе утро';
   }
   elseif (12 <= $hour && $hour < 18) {
       $welcome = 'Добрый день';
   }
   elseif (18 <= $hour && $hour < 23) {
       $welcome = 'Добрый вечер';
   }
   else {
       $welcome = 'Доброй ночи';
   }
   
   echo $welcome, PHP_EOL;
   
   setlocale(LC_ALL, 'ru_RU.UTF-8');
   
   echo 'Сегодня ', datefmt_format(datefmt_create(null, IntlDateFormatter::FULL, IntlDateFormatter::FULL,
   null, null, 'd MMMM yyyy года, EEEE HH:mm:ss'), time()), PHP_EOL;
   
   $tillBirthday = getdate($birthday - time());

   echo 'До моего дня рождения осталось ', $tillBirthday['yday'],
   ($tillBirthday['yday'] % 100 / 10 == 1) ?
   (match($tillBirthday['yday'] % 10) {1 => ' день, ', 2, 3, 4 => ' дня, ',
   default => ' дней, ', }) : ' дней, ', $tillBirthday['hours'],
   match($tillBirthday['hours']) {1, 21 => ' час, ',
   2, 3, 4, 22, 23 => ' часа, ', default => ' часов, ',},
   $tillBirthday['minutes'], match($tillBirthday['minutes'])
   {1, 21, 31, 41, 51 => ' минута ',
   2, 3, 4, 22, 23, 24, 32, 33, 34, 42, 43, 44, 52, 53, 54 => ' минуты ',
   default => ' минут '}, 'и ', $tillBirthday['seconds'],
   match($tillBirthday['seconds']) {1, 21, 31, 41, 51 => ' секунда.',
   2, 3, 4, 22, 23, 24, 32, 33, 34, 42, 43, 44, 52, 53, 54 => ' секунды.',
   default => ' секунд.'}, PHP_EOL;

   echo '</pre>';
  ?>

 </body>
</html>
=======
<?php
 declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Использование функций даты и времени</title>
 </head>
 <body>
  <h1>Использование функций даты и времени</h1>
  <?php
   echo '<pre>';
   
   $now = time();
   echo 'С начала эпохи UNIX прошло аж ', $now, ' секунд!', PHP_EOL;
   
   $birthday = mktime(0, 0, 0, 7, 26, time() - mktime(0, 0, 0, 7, 26) > 0 ? getdate()['year'] + 1 : getdate()['year']);
   echo 'Дата ближайшего дня рождения: ', date('d.m.Y', $birthday), PHP_EOL;
 
   $hour = getdate()['hours'];
   
   if (6 <= $hour && $hour < 12) {
       $welcome = 'Доброе утро';
   }
   elseif (12 <= $hour && $hour < 18) {
       $welcome = 'Добрый день';
   }
   elseif (18 <= $hour && $hour < 23) {
       $welcome = 'Добрый вечер';
   }
   else {
       $welcome = 'Доброй ночи';
   }
   
   echo $welcome, PHP_EOL;
   
   setlocale(LC_ALL, 'ru_RU.UTF-8');
   
   echo 'Сегодня ', datefmt_format(datefmt_create(null, IntlDateFormatter::FULL, IntlDateFormatter::FULL,
   null, null, "d MMMM yyyy года, EEEE HH:mm:ss"), time()), PHP_EOL;
   
   $tillbirthday = getdate($birthday - time());
   echo 'До моего дня рождения осталось ', $tillbirthday['yday'], ' сут., ',
   $tillbirthday['hours'], ' ч ', $tillbirthday['minutes'], ' мин и ', $tillbirthday['seconds'], ' с.',
   PHP_EOL;
	/*
	- С помощью функции datefmt_format() на отдельной строке выведите 
	  текущую дату, месяц, год, день недели и время,
	  например, "Сегодня 1 сентября 2018 года, суббота 09:30:00" 
	- На отдельной строке выведите фразу "До моего дня рождения осталось "
	- Выведите количество дней, часов, минут и секунд оставшееся до Вашего дня рождения
	*/
   echo '</pre>';
  ?>
 </body>
</html>
>>>>>>> d59caaa69cabdbd28da2e74ee2c4704c8a132960

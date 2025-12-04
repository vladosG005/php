<?php
 declare(strict_types=1);

 echo '<h2>Список посещённых страниц</h2>';

 echo '<pre>';

 // Код для всех страниц — вывод информации о посещённых страницах
 foreach ($_SESSION['pagelist'] as $page) {
	echo $page, PHP_EOL;
 }
 
 echo '</pre>';

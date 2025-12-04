<?php
 declare(strict_types=1);
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     mail('vladosG005@yandex.ru', $_POST['subject'], $_POST['body'], 'From: admin@center.ogu');
 }
?>
<h3>Адрес</h3>

<address>123456 Москва, Малый Американский переулок 21</address>

<h3>Задайте вопрос</h3>

<form action="<?=$_SERVER['REQUEST_URI'];?>" method="post">
 <label>Тема письма: </label>
 <br>
 <input name="subject" type="text" size="50">
 <br>
 <label>Содержание: </label>
 <br>
 <textarea name="body" cols="50" rows="10" required></textarea>
 <br>
 <br>
 <input type="submit" value="Отправить">
</form>

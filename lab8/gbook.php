<?php
 declare(strict_types=1);
 require_once 'config.php';
 $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 $con->set_charset(DB_CHARSET);
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $name = htmlspecialchars(trim($con->real_escape_string($_POST['name'])));
     $email = htmlspecialchars(trim($con->real_escape_string($_POST['email'])));
     $message = htmlspecialchars(trim($con->real_escape_string($_POST['msg'])));
     $con->query("INSERT INTO msgs VALUES (null, '{$name}', '{$email}', '{$message}')");
     //header("Location: http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");
 }
 if ($_SERVER['REQUEST_METHOD'] == 'GET') {
     $id = htmlspecialchars(trim($con->real_escape_string($_GET['id'])));
     $con->query("DELETE FROM msgs WHERE id={$id}");
     //header("Location: http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}");
 }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Гостевая книга</title>
</head>
<body>

<h1>Гостевая книга</h1>

<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">

Ваше имя:<br>
<input type="text" name="name"><br>
Ваш E-mail:<br>
<input type="email" name="email"><br>
Сообщение:<br>
<textarea name="msg" cols="50" rows="5"></textarea><br>
<br>
<input type="submit" value="Добавить!">

</form>

<?php
 $data = $con->query("SELECT * FROM msgs ORDER BY id DESC");
 $con->close();
 $rowcount = mysqli_num_rows($data);
 echo '<pre>';
 echo 'Число записей: ', $rowcount;
 echo PHP_EOL;
 for ($i = 0; $i < $rowcount; ++$i) {
     $row = $data->fetch_assoc();
     foreach ($row as $cell) {
         echo $cell, ' ';
     }
     echo "<a onclick=\"confirm('Вы точно хотите удалить эту запись?')\" href=\"{$_SERVER['PHP_SELF']}?id={$row['id']}\">Удалить запись</a>";
     echo PHP_EOL;
 }
 echo '</pre>';
?>

</body>
</html>
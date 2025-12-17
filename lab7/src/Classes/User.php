<?php
 declare(strict_types=1);

 //PHPDoc
 class User {
     public string $name;
     public string $login;
     private string $password;

     public function showInfo(): void {
         echo '<pre>Имя: ', $this->name, PHP_EOL, 'Логин: ', $this->login,
         PHP_EOL, 'Пароль: ', $this->password, PHP_EOL, '</pre>';
     }

     public function setPassword(string $p): void {
         $this->password = $p;
     }
 }

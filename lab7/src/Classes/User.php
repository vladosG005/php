<?php
 declare(strict_types=1);

 namespace App\Classes;

 //PHPDoc
 class User {
     public function __construct(public string $name, public string $login,
     private string $password) {}

     public function showInfo(): void {
         echo '<pre>Имя: ', $this->name, PHP_EOL, 'Логин: ', $this->login,
         PHP_EOL, 'Пароль: ', $this->password, PHP_EOL, '</pre>';
     }

     public function __destruct() {
         echo '<pre>Пользователь ', $this->login, ' удалён.</pre>';
     }
 }

<?php
 declare(strict_types=1);

 namespace App\Classes;

//PHPDoc
 class SuperUser extends User {
     public function __construct(string $name, string $login, string $password,
     public string $role) {
         parent::__construct($name, $login, $password);
     }

     public function showInfo(): void {
         echo '<pre>Имя: ', $this->name, PHP_EOL, 'Логин: ', $this->login,
         PHP_EOL, 'Роль: ', $this->role, '</pre>';
     }
 }

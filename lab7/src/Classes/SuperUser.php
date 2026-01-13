<?php
 declare(strict_types=1);

 namespace App\Classes;
 require_once 'User.php';

 /**
  * Класс, в котором хранятся имя, логин и роль суперпользователя.
  */
 class SuperUser extends User {
     /**
      * Конструктор, принимающий имя, логин, пароль и роль суперпользователя.
      *
      * @param string $name Имя суперпользователя.
      * @param string $login Логин суперпользователя.
      * @param string $password Пароль суперпользователя.
      * @param string $role Роль суперпользователя.
      */
     public function __construct(string $name, string $login, string $password,
     public string $role) {
         parent::__construct($name, $login, $password);
     }

     /**
      * Выводит имя, логин и роль суперпользователя.
      */
     public function showInfo(): void {
         echo '<pre>Имя: ', $this->name, PHP_EOL, 'Логин: ', $this->login,
         PHP_EOL, 'Роль: ', $this->role, '</pre>';
     }
 }

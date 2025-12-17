<?php
 declare(strict_types=1);

 include('src/Classes/User.php');
 
 $user1 = new User();
 $user1->name = 'Павел';
 $user1->login = 'koren12';
 $user1->setPassword('DZL8pr');
 $user1->showInfo();

 $user2 = new User();
 $user2->name = 'Роман';
 $user2->login = 'romance';
 $user2->setPassword('cSrQSXEE');
 $user2->showInfo();

 $user3 = new User();
 $user3->name = 'Саня';
 $user3->login = 'burdraco';
 $user3->setPassword('CIUzgLp');
 $user3->showInfo();
 
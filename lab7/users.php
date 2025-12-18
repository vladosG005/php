<?php
 declare(strict_types=1);

 include 'src/Classes/User.php';
 
 $user1 = new User('Павел', 'koren12', 'DZL8pr');
 $user1->showInfo();

 $user2 = new User('Роман', 'romance', 'cSrQSXEE');
 $user2->showInfo();

 $user3 = new User('Саня', 'burdraco', 'CIUzgLp');
 $user3->showInfo();
 
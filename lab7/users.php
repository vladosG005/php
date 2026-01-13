<?php
 declare(strict_types=1);

 function userLoad(): void {
     require_once 'src/Classes/User.php';
     require_once 'src/Classes/SuperUser.php';
 }

 spl_autoload_register('userLoad');

 use App\Classes\User;
 use App\Classes\SuperUser;
 
 $user1 = new User('Павел', 'koren12', 'DZL8pr');
 $user1->showInfo();

 $user2 = new User('Роман', 'romance', 'cSrQSXEE');
 $user2->showInfo();

 $user3 = new User('Саня', 'burdraco', 'CIUzgLp');
 $user3->showInfo();
 
 $user = new SuperUser('Алексей', 'root',
 'N1Y1GXYgKYs7mB1T', 'Администратор');
 $user->showInfo();

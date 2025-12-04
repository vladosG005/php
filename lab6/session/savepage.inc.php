<?php
 declare(strict_types=1);

 // Код для всех страниц — сохранение информации о посещённых страницах
 $_SESSION['pagelist'][] = $_SERVER['REQUEST_URI'];

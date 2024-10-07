<?php
/* FROM php:7.4-fpm
* bool(true) 
* int(12345) 
* bool(false) 
* bool(true)
* 
* FROM php:8.2-fpm
* bool(true) 
* int(12345) 
* bool(false) 
* bool(false)
*/

// $a = 5;
// $b = '05';
// var_dump($a == $b);
// var_dump((int)'012345');
// var_dump((float)123.0 === (int)123.0);
// var_dump(0 == 'hello, world');




$a = 1;
$b = 2;

// Обмен значениями без дополнительных переменных
$a = $a + $b; // $a теперь равно 3 (1 + 2)
$b = $a - $b; // $b теперь равно 1 (3 - 2)
$a = $a - $b; // $a теперь равно 2 (3 - 1)

echo "a = $a, b = $b"; // Вывод: a = 2, b = 1
// docker-compose up -d --build
<?php




//
//function get_sum(&$var) // аргумент передается по ссылке
//{
//    $var = $var + 5;
//}
//$new_var = 20;
//echo get_sum($new_var); // выводит 25
//echo "<br>$new_var"; // выводит 25
//
//die();
//
//
//
//// Объявление функций
//function hello()
//{
//    echo "Hello!";
//}
//function bye()
//{
//    echo "Bye!";
//}
//// Случайный выбор функции
//if (rand(0, 1)) $var = "hello"; else $var = "bye";
//// Вызов функции
//$var();

$array [] = [1, 'Daniil', '0951427300'];
$array [] = [2, 'Dmitriy', '0451427300'];

foreach ($array as $value){
    var_dump($value);
};



//Зачем тут писать $name в конце?

$greet = function ($name) {
    printf("Hello %s<br />", $name);
};
$greet('World');
$greet('PHP');
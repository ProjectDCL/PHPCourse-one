<?php

$age = 1;

if ($age >= 18 and $age <= 65 )
{
    echo 'Вам еще работать и работать!';
} elseif ($age > 65)
{
 echo 'Вам пора на пенсию.';
} if ($age >= 1 and $age <= 17 )
{
    echo 'Вам еще рано работать.';
} elseif ($age < 1)
{
    echo 'Неизвестный возраст';
}
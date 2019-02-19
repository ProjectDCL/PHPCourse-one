<?php
$day = 6;

switch ($day) {
    case ($day >= 1 and $day <= 5):
        echo "Это рабочий день";
        break;
    case ($day >= 6 and $day <= 7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}
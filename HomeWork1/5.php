<?php

$bmw = "BMW";
$toyota = "TOYOTA";
$opel = "OPEL";
$cars["BMW"] = array("model" => "X5", "speed" => "120", "doors" => "5", "year" => "2015");
$cars["TOYOTA"] = array("model" => "Camry", "speed" => "90", "doors" => "5", "year" => "2012");
$cars["OPEL"] = array("model" => "Astra", "speed" => "110", "doors" => "5", "year" => "2017");


for($cars = 0; $cars < 3; $cars++){
    echo $cars["BMW"];
}

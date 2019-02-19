<?php

$bmw = "BMW";
$toyota = "TOYOTA";
$opel = "OPEL";
$cars["BMW"] = array("model" => "X5", "speed" => "120", "doors" => "5", "year" => "2015");
$cars["TOYOTA"] = array("model" => "Camry", "speed" => "90", "doors" => "5", "year" => "2012");
$cars["OPEL"] = array("model" => "Astra", "speed" => "110", "doors" => "5", "year" => "2017");

echo "<h3>" . "CAR $bmw" . "<br>" . "</h3>";
echo $cars["BMW"]["model"] . " " . $cars["BMW"]["speed"] . " " . $cars["BMW"]["doors"] . " " . $cars["BMW"]["year"] . "<br>";
echo "<h3>" . "CAR $toyota" . "<br>" . "</h3>";
echo $cars["TOYOTA"]["model"] . " " . $cars["TOYOTA"]["speed"] . " " . $cars["TOYOTA"]["doors"] . " " . $cars["TOYOTA"]["year"] . "<br>";
echo "<h3>" . "CAR $opel" . "<br>" . "</h3>";
echo $cars["OPEL"]["model"] . " " . $cars["OPEL"]["speed"] . " " . $cars["OPEL"]["doors"] . " " . $cars["OPEL"]["year"] . "<br>";
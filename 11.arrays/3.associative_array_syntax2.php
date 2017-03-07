<?php

$foo = array(); //create an array

//populating the array with some data
$foo["greeting"] = "hello";
$foo["farewell"] = "goodbye";
$foo["casual greeting"] = "howdy";

//echoing out each element in the array one-by-one
print("<h2>Echoing out each element in the array individually</h2>");
print($foo["greeting"] . "<br />");
print($foo["farewell"] . "<br />");
print($foo["casual greeting"] . "<br />");

//automatically loop through each element of the array
//foreach version
print("<h2>Echoing out each element in the array in a foreach loop</h2>");
foreach ($foo as $thisElement) {
	print($thisElement . "<br />");
}




?>
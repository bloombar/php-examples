<?php

$foo = array(); //creating an array

//populating the array with some data
$foo[0] = "hello";
$foo[1] = "goodbye";
$foo[2] = "howdy";


//echoing out each element in the array one-by-one
print("<h2>Echoing out each element in the array individually</h2>");
print($foo[0] . "<br />");
print($foo[1] . "<br />");
print($foo[2] . "<br />");


//automatically loop through each element of the array
//foreach version
print("<h2>Echoing out each element in the array in a foreach loop</h2>");
foreach ($foo as $thisElement) {
	print($thisElement . "<br />");
}

//automatically loop through each element of the array
//for version
print("<h2>Echoing out each element in the array in a for loop</h2>");
for ($i=0; $i<sizeof($foo); $i++) {
	print($foo[$i] . "<br />");
}


?>
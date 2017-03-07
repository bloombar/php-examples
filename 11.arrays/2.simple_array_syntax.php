<?php

/** 
 ** This file shows how to create simple arrays in 3 different ways
 ** By "simple array", we mean arrays that use integers as indices.
**/

//tell the server to tell the browser that this file is not html, but is plain text
header("Content-Type: text/plain");

//create a blank array
$array1 = array();
$array1[0] = "John";
$array1[1] = "Bob";
$array1[2] = "Sheila";

//determine the number of elements in the array
$num_elements_in_array1 = sizeof($array1);
print("There are " . $num_elements_in_array1 . " elements in array 1:\n");

//loop through each element in the array
foreach ($array1 as $item) {
	print("* " . $item . "\n");
}

//create another array pre-populated with some data
$array2 = array("John", "Bob", "Sheila");
$num_elements_in_array2 = sizeof($array2);
print("There are " . $num_elements_in_array2 . " elements in array 2:\n");
foreach ($array2 as $item) {
	print("* " . $item . "\n");
}


$array3 = array(0 => "John", 1 => "Bob", 2 => "Sheila");
$num_elements_in_array3 = sizeof($array3);
print("There are " . $num_elements_in_array3 . " elements in array 3:\n");
foreach ($array3 as $item) {
	print("* " . $item . "\n");
}


//another way to loop
print("\nAnother way to loop, if you wanted to get the keys in addition to the values\n");
foreach ($array1 as $k => $v) {
	print("* " . $k . " - " . $v . "\n");
}



?>
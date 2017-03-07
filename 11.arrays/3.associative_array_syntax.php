<?php

//tell the server to tell the browser that this file is plain text
header("Content-Type: text/plain");

//create a blank associative array
$array1 = array();
$array1["temperature"] = 27;
$array1["visibility"] = "clear";
$array1["humidity"] = 60.2;

//determine the number of elements in the array
$num_elements_in_array1 = sizeof($array1);
print("There are " . $num_elements_in_array1 . " elements in array 1\n");

//loop through each element in the array
foreach ($array1 as $item) {
	print("* " . $item . "\n");
}

//create a pre-populated associative array
$array2 = array("temperature" => 27, "visibility"=>"clear", "humidity"=>60.2);
$num_elements_in_array2 = sizeof($array2);
print("There are " . $num_elements_in_array2 . " elements in array 2\n");
foreach ($array2 as $item) {
	print("* " . $item . "\n");
}

//another way to loop
print("\nAnother way to loop, if you wanted to get the keys in addition to the values\n");
foreach ($array1 as $k => $v) {
	print("* " . $k . " - " . $v . "\n");
}



?>
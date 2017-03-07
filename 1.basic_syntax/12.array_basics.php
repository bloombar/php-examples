<?php

/**
 * PHP arrays can be either "regular" or "associative".
 * Regular arrays are groups of individual values, similar to Lists in Python.
 * Associative arrays are groups of key/value pairs, similar to Dictionaries in Python.
 **/

//define a basic regular array
$basic_array = array('foo', 'bar', 'etc');

//print the raw structure of this array... good for debugging
print_r($basic_array);

//loop through the basic array
for ($i=0; $i<sizeof($basic_array); $i++) {
	//print the values
	print( $basic_array[$i] );
}


//define an associative array
$associative_array=array('first'=>'foo', 'second'=>'bar', 'third'=>'etc');

//print the raw structure of this array... good for debugging
print_r($associative_array);

//loop through the associative array
foreach ($associative_array as $k=>$v) {
	//print the key/value pairs
	print($k . " - " . $v);
}

?>
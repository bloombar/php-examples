<?php

//send out some weird nonsense content-type header
//header("Content-Type: foo/bar");

//send out some weird nonsense header
//header("DB-Design-Custom-Header: look at this!");

//send out a MOVED PERMANENTLY HTTP header
//header("Location: http://nytimes.com");


//create a blank array
$x = array();

//add a new element to an array
$x[0] = "hello";

//print out that element in the array
print($x[0] . "\n");

//add another element to the array
$x[10] = "goodbye";

//print out this element
print($x[10] . "\n");

//add another element to the array... notice the index is a string!
$x["db design"] = "Welcome!" .  "\n";

//print out this element
print($x["db design"] .  "\n");

//prove to ourselves how many elements are in the array
$num_elements = sizeof($x);
print($num_elements . "\n");

//print out all the raw contents of the array
print_r($x);

?>
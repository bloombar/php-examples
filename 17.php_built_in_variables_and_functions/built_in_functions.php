<!doctype html>
<html>
	<head>
		<title>Built-in PHP FUnctions</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>List of all Built-in PHP Functions</h1>

		<pre>

<?php

//this example shows a list of all the built-in function names that exist in the PHP language

$x = get_defined_functions(); //gets an array of all the built-in funciton names in PHP
print_r($x); //print out the contents of the array

/*
echo "Hello world!"; //the old-school way of printing something
print("Hello world!"); //exactly the same as echo, but a more modern way of doing a function call
*/

?>

		</pre>
	</body>
</html>
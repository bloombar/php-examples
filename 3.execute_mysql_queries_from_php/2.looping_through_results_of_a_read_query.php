<?php

/**
* This example shows the general pattern for 
* running a SELECT query on a MySQL database from a PHP script
* and outputting  the results.
* Step 1 - connect to the Database
* Step 2 - make sure that worked!
* Step 3 - send a SELECT query to the database
* Step 4 - make sure that worked!
* Step 5 - loop through the results and print them out
**/

//connect to the database server, and store a "connection object" in the variable named $cxn
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");
 
//DEBUGGING: output any connection error
print("Connection error: " . $cxn->connect_error);

//write a query as a String in PHP, and store in a variable named $query
$query = "SELECT * FROM favorite_viking_metal_bands ORDER BY formed DESC";

//use the "connection object's" query() function to send the query to the database so it can execute it
//store the "result object" that the database server returns in a variable named $result
$result = $cxn->query($query); 

//DEBUGGING: output any query error
print("Query error: " . $cxn->error);

//loop through every "row object" in the "result object"
//the data in the fields in each row will be stored as an array variable called $row within the loop
while ($row = $result->fetch_assoc()) {
	//read the values in each of the fields in the row
	$bandName = $row['band'];
	$countryOfOrigin = $row['origin'];
	$yearFormed = $row['formed'];

	//do something interesting with this data... 

	//we're simply printing it out as plain text here as an example
	print($bandName);
	print($countryOfOrigin);
	print($yearFormed);

}
 
?>
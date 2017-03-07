<?php

/**
* This example shows the general pattern for 
* running a query on a MySQL database from a PHP script
* Step 1 - connect to the Database
* Step 2 - make sure that worked!
* Step 3 - send a query to the database
* Step 4 - make sure that worked!
**/

//connect to the database server, and store a "connection object" in the variable named $cxn
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");
 
//DEBUGGING: output any connection error
print("Connection error: " . $cxn->connect_error);

//write a query as a String in PHP, and store in a variable named $query
$query = "DELETE FROM favorite_viking_metal_bands WHERE id=666";

//use the "connection object's" query() function to send the query to the database so it can execute it
//store the "result object" that the database server returns in a variable named $result
$result = $cxn->query($query); 

//DEBUGGING: output any query error
print("Query error: " . $cxn->error);

?>
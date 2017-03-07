<?php

//show errors
error_reporting(E_ALL);
ini_set("display_errors", 1);

//debugging
//print_r($_POST);

//connect to the database server
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");

//get the data the user entered into the form
//note we are using the real_escape_string to protect against SQL injection attacks
$band = $cxn->real_escape_string($_POST['band']);
$origin = $cxn->real_escape_string($_POST['origin']);
$formed = $cxn->real_escape_string($_POST['formed']);

//assemble the query
//at the end of the day, you want your query to look something like:
//INSERT INTO favorite_viking_metal_bands (band, origin, formed) VALUES ('Nordic Plague', 'Norway', 1986)
$query = "INSERT into favorite_viking_metal_bands (band, origin, formed) VALUES('" . $band . "','" . $origin . "'," . $formed . ");";
//echo $query;

//execute the query. 
$result = $cxn->query($query); 

//redirect the browser to the main page
//note that this is sending a custom HTTP Location header to the web browser which the browser interprets as meaning that the page it is requesting (this script) has moved to this new location.
header("Location:./");

?>
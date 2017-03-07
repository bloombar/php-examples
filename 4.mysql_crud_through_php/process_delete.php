<?php

//show errors
error_reporting(E_ALL);
ini_set("display_errors", 1);

//connect to the database server
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");

//get the data from the link that the user clicked
//note that we are using the real_escape_string() method to protect against SQL injection attacks
$bandId = $cxn->real_escape_string($_GET['band_id']);

//assemble the query
$query = "DELETE FROM favorite_viking_metal_bands WHERE id=" . $bandId;

//execute the query. 
$result = $cxn->query($query); 

//redirect the browser to the main page
//note that this is sending a custom HTTP Location header to the web browser which the browser interprets as meaning that the page it is requesting (this script) has moved to this new location.
header("Location:./");

?>
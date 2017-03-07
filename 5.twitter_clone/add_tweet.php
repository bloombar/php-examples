<?php

//get the data from the form
$tweet = $_GET['tweet'];

//connect to database... plug in your username/password
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");

//print($cxn->connect_error);

$query1 = "INSERT INTO twitter_clone (tweet) VALUES ('{$tweet}');";

//shoot off a query to the MySQL db
$result1 = $cxn->query($query1);

//print($cxn->error);

//redirect to the main page
header("Location: index.php");

?>
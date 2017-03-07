<?php

//start a session
session_start();

//the current user's session id is returned via the session_id() function
$current_user_id = session_id();

//get the data from the form
$title = $_GET['title'];
$description = $_GET['description'];
$price = $_GET['price'];

//connect to db
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");

//debug any errors
//print($cxn->connect_error);

//do a query
$q = "INSERT INTO ecommerce_cart (title, description, price, user_id) VALUES ('{$title}', '{$description}', '{$price}', '{$current_user_id}') ";

//send the query to the database
$result = $cxn->query($q);

//debug any errors
//print($cxn->error);

//redirect the browser to the main page... comment out this line if you're having problems with this script
header("Location: index.php");


?>
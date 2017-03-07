<?php

$name = $_POST['name'];
$breed = $_POST['breed'];
$age = $_POST['age'];

//get the temporary path of this file on the server
$temporaryPath = $_FILES['image']['tmp_name'];

//make a permanent path where we want to store the file
$permanentPath = "uploads/" . $_FILES['image']['name'];
 
 //try moving it from its temporary location the permanent one
 $success = move_uploaded_file($temporaryPath, $permanentPath);
 
 //decide what to do next...
 if ($success) {
// 	print("Yes! Upload successful.");
	//connect to db
	$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");

	//debug
	print($cxn->connect_error);

	//run a query
	$result = $cxn->query("INSERT INTO puppies (name, age, breed, image_path) VALUES ('{$name}', {$age}, '{$breed}', '{$permanentPath}') "); 	

 }
 else {
 //	print("No! Upload failed.");
 }



//redirect to add puppy form
header("Location: add_puppy.php");


?>
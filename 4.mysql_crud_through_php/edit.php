<?php

//show errors
error_reporting(E_ALL);
ini_set("display_errors", 1);

//connect to the database server
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");

//get the data from the URL
//note that we are using the real_escape_string() method to protect against SQL injection attacks
$bandId = $cxn->real_escape_string($_GET['band_id']);


//assemble the query
$query = "SELECT * FROM favorite_viking_metal_bands WHERE id={$bandId}";

//echo $query;

//execute the query. 
$result = $cxn->query($query); 

//get the one row from the result set
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Create</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Edit a row</h1>

		<form method="POST" action="process_update.php">
			<input type="hidden" name="band_id" value="<?php echo $row['id']; ?>" />
			
			<label>band name: </label>
			<input name="band" type="text" value="<?php echo $row['band']; ?>" />
			<br />

			<label>country: </label>
			<input name="origin" type="text" value="<?php echo $row['origin']; ?>"  />
			<br />

			<label>year formed: </label>
			<input name="formed" type="text" value="<?php echo $row['formed']; ?>"  />
			<br />

			<input type="submit" value="Save" />

		</form>
	</body>
</html>



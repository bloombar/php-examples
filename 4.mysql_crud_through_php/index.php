<?php

//show errors
error_reporting(E_ALL);
ini_set("display_errors", 1);


//connect to the database server
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");

//assemble the query
$query = "SELECT * FROM favorite_viking_metal_bands ORDER BY band ASC";

//execute the query. 
$result = $cxn->query($query); 

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Read</title>
		<meta charset="utf-8" />
		<style>
img.delete {
	width: 10px;
	margin-left: 10px;
}		
		</style>
	</head>
	<body>
		<h1>Read from table</h1>
		<p><a href="create.php">Click here</a> to add a new viking metal band</p>

		<ul>
<?php while($row = $result->fetch_assoc()) : ?>
			<li>
				<?php echo $row["band"]; ?>
			 	-
			 	<?php echo $row["origin"]; ?>
			 	-
			 	<?php echo $row["formed"]; ?>

			 	<a href="edit.php?band_id=<?php echo $row['id'];?>"><img class='delete' src='images/edit.png' /></a>

			 	<a href="process_delete.php?band_id=<?php echo $row['id'];?>">
				 	<img class='delete' src='images/delete.png' />
				</a>
			 </li>
<?php endwhile; ?>
		</ul>
	</body>
</html>






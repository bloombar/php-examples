<?php

 //connect to the database server
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");

//assemble the query

if(empty($_GET['sortby'])){
	$sortby = 'title';
}else{
	$sortby = $_GET['sortby'];
}

if(empty($_GET['sort'])){
	$sort = 'asc';
}else{
	$sort = $_GET['sort'];
}

$query = "SELECT *, date_format(purchaseDate, '%m/%d/%Y') purchased FROM books ORDER BY {$sortby} {$sort}";

 //execute the query. 
$result = $cxn->query($query); 

?>

<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8" />
	<title>Books Collection</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
	<div class="container">
		<header>
			<h1>Books Collection</h1>
			<a href="books_advanced.php">see more advanced version</a>
		</header>

		<table>
			<tr>
				<th>Title (<a href="index.php?sortby=title&sort=asc">asc</a>, <a href="index.php?sortby=title&sort=desc">desc</a>)</th>
				<th>Author (<a href="index.php?sortby=author&sort=asc">asc</a>, <a href="index.php?sortby=author&sort=desc">desc</a>)</th>
				<th>Year (<a href="index.php?sortby=year_written&sort=asc">asc</a>, <a href="index.php?sortby=year_written&sort=desc">desc</a>)</th>
				<th>Edition (<a href="index.php?sortby=edition&sort=asc">asc</a>, <a href="index.php?sortby=edition&sort=desc">desc</a>)</th>
				<th>Price (<a href="index.php?sortby=price&sort=asc">asc</a>, <a href="index.php?sortby=edition&sort=desc">desc</a>)</th>
				<th>Purchased (<a href="index.php?sortby=purchaseDate&sort=asc">asc</a>, <a href="index.php?sortby=purchaseDate&sort=desc">desc</a>)</th>
			</tr>

<?php while($row = mysqli_fetch_assoc($result) ):?>

			<tr>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['author']; ?></td>
				<td><?php echo $row['year_written']; ?></td>
				<td><?php echo $row['edition']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['purchased']; ?></td>
			</tr>

<?php endwhile ?>

		</table>
	</div>
</body>
</html>

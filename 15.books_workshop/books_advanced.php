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

$query = "SELECT *, date_format(purchaseDate, '%m/%d/%Y') purchased FROM books ORDER BY " . $sortby . " " . $sort;

 //execute the query. 
$result = $cxn->query($query); 

//switch sort order for next time
$nextSort = ($sort == "asc") ? "desc" : "asc";

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
			<a href="index.php">see simpler version</a>
		</header>

		<table>
			<tr>
				<th <?php if ($sortby=="title") : ?>class="active <?php print($sort); ?>"<?php endif; ?>><a href="books_advanced.php?sortby=title&sort=<?php echo $nextSort; ?>">Title</a></th>
				<th <?php if ($sortby=="author") : ?>class="active <?php print($sort); ?>"<?php endif; ?>><a href="books_advanced.php?sortby=author&sort=<?php echo $nextSort; ?>">Author</a></th>
				<th <?php if ($sortby=="year_written") : ?>class="active <?php print($sort); ?>"<?php endif; ?>><a href="books_advanced.php?sortby=year_written&sort=<?php echo $nextSort; ?>">Year</a></th>
				<th <?php if ($sortby=="edition") : ?>class="active <?php print($sort); ?>"<?php endif; ?>><a href="books_advanced.php?sortby=edition&sort=<?php echo $nextSort; ?>">Edition</a></th>
				<th <?php if ($sortby=="price") : ?>class="active <?php print($sort); ?>"<?php endif; ?>><a href="books_advanced.php?sortby=price&sort=<?php echo $nextSort; ?>">Price</a></th>
				<th <?php if ($sortby=="purchaseDate") : ?>class="active <?php print($sort); ?>"<?php endif; ?>><a href="books_advanced.php?sortby=purchaseDate&sort=<?php echo $nextSort; ?>">Purchased</a></th>
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

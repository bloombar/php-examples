<?php

//get the sort instructions from the query string, if available\
$order = "asc";
$reverseOrder = "desc";
if (!empty($_GET['order'])) {
	$order = $_GET['order'];
	if ($order == "desc") {
		$reverseOrder = "asc";
	}
}

$sortClause = "";
if (!empty($_GET['sort'])) {
	$sortClause = "ORDER BY " . $_GET['sort'] . " {$order}";
}

//connect to db
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");

//run a query
$result = $cxn->query("SELECT * FROM puppies {$sortClause}");

?>
<!doctype html>
<html>
	<head>
		<title>Puppies for Sale</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
	</head>
	<body>
		<div class="container">
			<header>
				<a href="add_puppy.php" class="call_out">Donate Your Puppy Today!</a>
				<h1>Puppies for Sale</h1>
			</header>

			<nav>
				sort by: 
				<a href="index.php?sort=age&order=<?php print($reverseOrder); ?>">age</a>,
				<a href="index.php?sort=breed&order=<?php print($reverseOrder); ?>">breed</a>
			</nav>

<?php while ($row=$result->fetch_assoc()) : ?>

			<figure>
				<div>
					<img src="<?php print($row['image_path']); ?>" />
				</div>
				<figcaption>
					<?php print($row['name']); ?>
					<br />
					<span>(<?php print($row['age']); ?>, <?php print($row['breed']); ?>)</span>
				</figcaption>
			</figure>

<?php endwhile; ?>

			<!-- clearfix -->
			<div class="clear"></div>

		</div>
	</body>
</html>
<?php

//determine whcih row index to start from in our query
if (empty($_GET['start_index']) || $_GET['start_index'] < 0) {
	$startIndex = 0;
}
else {
	$startIndex = $_GET['start_index'];
}

//calculate the row indices for the previous or next "page" or records
$prevIndex = $startIndex - 20;
$nextIndex = $startIndex + 20;

//connect to the databaser
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name")
//print($cxn->connect_error);

//put together a query for 20 records, starting from the proper index 
$query = "SELECT * FROM favorite_viking_metal_bands ORDER BY formed DESC LIMIT {$startIndex},20";

//run the query
$result = $cxn->query($query);

//print($cxn->error);

?>
<!doctype html>
<html lang="en">
	<head>
		<title>MySQL Read Results - One Page At A Time</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<div class="container">

			<header>
				<h1>MySQL Read Results - One Page At A Time</h1>
				<p>
					This document loads one "page" of 20 records at a time from a table in a MySQL database.

					Clicking the "Previous 20" or "Next 20" links loads the previous or next page, respectively.
				</p>
			</header>

			<section>

				<h2>Viking Metal Bands</h2>
				<p>
					Showing records 
					<?php print($startIndex + 1); ?>
					to
					<?php print($nextIndex); ?>
				</p>

<?php if ($result->num_rows < 1) : ?>

					<p><strong>No records found!</strong></p>

<?php else: ?>

				<table>

	<?php while ($row = $result->fetch_assoc()) : ?>
		
					<tr>
						<td>
							<?php print($row['band']); ?>
						</td>
						<td>
							<?php print($row['origin']); ?>
						</td>
						<td>
							<?php print($row['formed']); ?>
						</td>
					</tr>

	<?php endwhile; ?>

				</table>

<?php endif; ?>

				<nav>
					<ul>
						<li>
							<a href="./4.paginating_results_from_a_mysql_query.php?start_index=<?php print($prevIndex); ?>"> &lt; Previous 20</a>
						</li>

						<li>
							<a href="./4.paginating_results_from_a_mysql_query.php?start_index=<?php print($nextIndex); ?>">Next 20 &gt;</a>
						</li>
					</ul>
				</nav>

			</section>

		</div><!-- //.container -->

	</body>
</html>
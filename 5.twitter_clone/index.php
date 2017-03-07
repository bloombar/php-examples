<?php

//connect to database... plug in your username/password
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");

//print($cxn->connect_error);

$query1 = "SELECT tweet, date_format(created, '%W %m/%d/%Y %l:%i %p') AS date_created FROM twitter_clone ORDER BY created DESC;";

//shoot off a query to the MySQL db
$result1 = $cxn->query($query1);

$query2 = "SELECT COUNT(tweet) AS num FROM twitter_clone;";

//shoot off a query to the MySQL db
$result2 = $cxn->query($query2);


?>
<!doctype>
<html>
	<head>
		<title>Twitter</title>
		<link rel="stylesheet" 
			type="text/css" 
			href="css.css" />
	</head>
	<body>
		<div id="container">
			<h1>Anonymous Twitter</h1>

			<form action="add_tweet.php" method="GET">
				<label>Enter a new tweet: </label>
				<input type="text" name="tweet" />
			</form>

<?php while ($row = $result2->fetch_assoc()) : ?>

			<p class="num_results">
				Found 
				<?php print($row['num']); ?> 
				tweets!
			</p>

<?php endwhile; ?>


<?php while ($row = $result1->fetch_assoc()) : ?>

		<article>
			<p><?php print($row['date_created']); ?></p>
			<h2><?php print($row['tweet']); ?></h2>
		</article>

<?php endwhile; ?>

		</div>
	</body>
</html>

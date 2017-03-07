<?php

//start a session
session_start();

//the current user's session id is returned via the session_id() function
$current_user_id = session_id();

//connect to db
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");

//debug any errors
//print($cxn->connect_error);

//do a query
$q = "SELECT * FROM ecommerce_cart WHERE user_id='{$current_user_id}' ORDER BY created DESC;";

//send the query to the database
$result = $cxn->query($q);

//debug any errors
print($cxn->error);

?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Buy This Now!</title>
		<link rel="stylesheet" type="text/css" href="css.css" />
	</head>
	<body>
		<div class="container">

			<header>
				<img src="images/logo.png" />
				<p><a href="index.php">Return to store</a></p>
			</header>


			<h1>Your Shopping Cart</h1>

			<section>

<?php while ($row = $result->fetch_assoc()) : ?>

				<article>
					<h1><?php print($row['title']); ?></h1>
					<p>
						<?php print($row['description']); ?>
					</p>
					<p>
						<?php print($row['price']); ?>
					</p>
				</article>

<?php endwhile; ?>

				<div class="clear"></div>

			</section>

			<footer>
				&copy; 2016 All rights reserved.  Don't steal this content.
				<a href="contactus.html">Contact Us</a>
				<a href="returns.html">Return Policy</a>
			</footer>

		</div>
	</body>
</html>


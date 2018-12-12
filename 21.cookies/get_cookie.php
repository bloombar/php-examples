<?php

$cookieValue = $_COOKIE['TestCookie'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Receiving Data Using Cookies</title>
	</head>
	<body>
		<h1>Receiving Data Using Cookies</h1>

		<p>This script gets the value of a cookie named "TestCookie"</p>

		<p>
			The value of TestCookie is
			<pre>
<?php echo $cookieValue ?>
			</pre>
		</p>
	</body>
</html>
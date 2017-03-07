<!doctype html>
<html>
	<head>
		<title>PHP's Built-In $_SERVER Variables</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<div class="container">

		<h1>PHP's Built-In $_SERVER Variables</h1>

		<h2>Browser a.k.a. User Agent</h2>
		<p>This the identifier of the browser you're using to view this page.  This variable would be important to you if you were doing browser detection!</p>
		<p><?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>

		<h2>Script URI</h2>
		<p>This is the address you can plug into a web browser to see this page</p>
		<p><?php echo $_SERVER['SCRIPT_URI']; ?></p>

		<h2>Script URL</h2>
		<p>This is the path to this script from the web root</p>
		<p><?php echo $_SERVER['SCRIPT_URL']; ?></p>

		<h2>HOST NAME</h2>
		<p>This is the domain name</p>
		<p><?php echo $_SERVER['HTTP_HOST']; ?></p>


		<h2>All data in the built-in $_SERVER variable:</h2>
		<pre><?php print_r($_SERVER); ?></pre>
			
		</div>
	</body>
</html>

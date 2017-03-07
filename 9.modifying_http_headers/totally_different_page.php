<!doctype html>
<html>
	<head>
		<title>Modified HTTP response headers example</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<div class="container">
			<h1>Modifying the server's HTTP response headers</h1>
			<p>
				This is probably not the page you requested.  If your browser requested the the default home page of this folder, then you were redirected here.  
			</p>
			<p>
				See for yourself by clicking this <a href="index.php">link to the home page</a>.  You'll end up here again!
			</p>
			<p>
				When the browser requests the home page, the server responds with a custom HTTP "Location" header that informs the browser that the page has permanently moved to this location.  It does this because we told it to in the PHP code for that file.  So the browser receives this HTTP response, deciphers it, and then automatically requests this page instead, which is how you ended up here.
			</p>
		</div>
	</body>
</html>

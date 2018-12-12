<?php echo "<?" ?>xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Failure! File Not Uploaded</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css" />
	</head>

	<body>
		<div id="container">

			<h1>Failure! File Not Uploaded</h1>
			<p>Your image failed to upload</p>
			<p><?php echo $_REQUEST['error'] ?></p>
			
			<p>
				<a href="index.html">try again</a>
			</p>
	
		</div><!-- end container -->
	</body>
</html>

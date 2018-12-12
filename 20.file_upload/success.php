<?php echo "<?" ?>xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Success! File Uploaded</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css" />
	</head>

	<body>
		<div id="container">

			<h1>Success! File Uploaded</h1>
			<p>Thanks.  Your image has been successfully uploaded to <?php echo $_REQUEST['path'] ?></p>
			
			<a href="<?php echo $_REQUEST['path']; ?>">
					<img src="<?php echo $_REQUEST['path'] ?>" />
			</a>

		</div><!-- end container -->
	</body>
</html>

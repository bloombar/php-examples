<!doctype html>
<html>
	<head>
		<title>Donate Your Puppy</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
	</head>
	<body>
		<div class="container">

			<header>
				<h1>Donate Your Puppy Today!</h1>
			</header>

			<p>Please enter your puppy's information in the form below:</p>

			<form enctype='multipart/form-data'  action="upload_puppy.php" method="POST">


				<input type="text" name="name" placeholder="name" />

				<br />

				<select name="age">
					<option> select age </option>

<?php for ($i=1; $i<=25; $i++) : ?>

					<option value="<?php print($i); ?>"><?php print($i); ?></option>

<?php endfor; ?>

				</select>

				<br />

				<input type="text" name="breed" placeholder="breed" />

				<br />

				<label for="image">photo:</label>
				<input type="file" name="image" />

				<br />

				<input type="submit" value="Add Puppy!" />	

			</form>
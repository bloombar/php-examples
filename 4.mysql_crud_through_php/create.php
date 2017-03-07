<!DOCTYPE html>
<html>
	<head>
		<title>Create</title>
		<meta charset="utf-8" />
		<style type="text/css">
* {
	font-family: 'helvetica neue', helvetica;
}
div.container {
	width: 960px;
	margin: 0 auto;
}		
		</style>
	</head>
	<body>
		<div class="container">
			<h1>Create a row</h1>

			<form method="POST" action="process_create.php">
				<label>band name: </label>
				<input name="band" type="text" />
				<br />

				<label>country: </label>
				<input name="origin" type="text" />
				<br />

				<label>year formed: </label>
				<input name="formed" type="text" />
				<br />

				<input type="submit" value="Save" />

			</form>
		</div>
	</body>
</html>

<!doctype html>
<html>
	<head>
		<title>PHP's Built-In $_POST Variables</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<div class="container">

		<h1>PHP's Built-in $_POST Variable</h1>
		<p>For example, if the user submits a form via the POST method, the data they enter into the form will appear in this variable</p>

		<form method="POST">
			<label>Enter your first name:</label>
			<input type="text" name="first_name" />
			<br />
			<label>Select your state</label>
			<select name="state">
				<option>-- select your state --</option>
				<option value="NY">New York</option>
				<option value="NJ">New Jersey</option>
				<option value="CT">Connecticut</option>
			</select>
			<input type="submit" value="Go!" />
		</form>

		<h2>The State you selected</h2>
		<?php 
		//a associative array of state acronyms and their corresponding names
		$states = array(
			"NY" => "New York",
			"NJ" => "New Jersey",
			"CT" => "Connecticut"
		);

		//get the state the user selected in the form and save in a variable
		$state = $_POST['state'];

		//figure whether the user selected a state or not yet
		if (empty($state)) {
			//output a default message if no state selected
			echo "<p>You have not selected a state yet.</p>";
		}
		else {
			//output the nice name of the state the user selected
			echo "<p>" . $states[$state] . "</p>";		
		}

		?>

		<h2>All data in the built-in $_POST variable:</h2>
		<pre><?php print_r($_POST); ?></pre>
			
		</div>
	</body>
</html>

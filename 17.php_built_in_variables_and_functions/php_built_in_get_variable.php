 <!doctype html>
 <html>
 	<head>
 		<title>PHP's Built-In $_GET Variables</title>
 		<meta charset="UTF-8" />
 	</head>
 	<body>
 		<div class="container">
 
  		<h1>PHP's Built-in $_GET Variable</h1>
  		<p>Enter something in the query string of the URL, and you'll see it show up as an element in this built-in variable.  For example:
  		<a href="php_built_in_get_variable.php?field-keywords=slippers+men">click me</a>
  		<a href="php_built_in_get_variable.php?field-keywords=clogs+women">click me</a>
  		<a href="php_built_in_get_variable.php?field-keywords=sandals+infants">click me</a>
  		</p>
 
 		<h2>All data in the built-in $_GET variable:</h2>
 		<pre><?php print_r($_GET); ?></pre>
 			
 		</div>
 	</body>
 </html>
 
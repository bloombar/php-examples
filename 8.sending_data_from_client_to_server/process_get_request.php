<!doctype html>
<html>
	<head>
		<title>Process Form Input</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<div class="container">
			<h1>Data in the HTTP GET request</h1>
			<p>The data that was received by the server from the client HTTP GET request:</p>
			<pre><?php print_r($_GET); ?></pre>

			<h2>Where does this data come from</h2>
			<p>Data in an HTTP GET request can come from:</p>
			<ul>
				<li>data in a form that uses the GET method</li>
				<li>data in the query string of a URL used by a link</li>
			</ul>

			<h2>Why we care?</h2>
			<ul>
				<li>It might be useful to know what the user entered in a form on the previous page.</li>
				<li>It might be useful to know what link a user clicked on the previous page</li>
				<li>This page could show different content, or have different behavior depending upon that information</li>
			</ul>

			<h2>Other examples</h2>
			<ul>
				<li>An example of <a href="index.html">using a form to intitiate an HTTP GET request</a></li>
				<li>An example of <a href="form_with_post_method.html">using a form to intitiate an HTTP POST request</a></li>
				<li>An example of <a href="links_with_query_string.html">using links to send data to the server via an HTTP GET request</a></li>
			</ul>
		</div>
	</body>
</html>
<?php

//start a session... this built-in PHP function automatically generates a unique ID and sends it in the HTTP response headers as a "cookie" to the web browser.  The web browser then stores this cookie and sends it back to the server with each subsequent request.
session_start();

//the current user's session id is returned via the session_id() function
$current_user_id = session_id();

?>
<!doctype html>
<html>
	<head>
	</head>
	<body>
		<h1>Example of tracking visitors with cookies</h1>
		<p>
			Welcome! Your unique ID is:
			<strong><?php print($current_user_id); ?></strong>
		</p>
		<p>You were given this unique ID automatically by the server as follows:</p>
		<ol>
			<li>Your browser made an HTTP request for this page from the server</li>
			<li>The server sent an HTTP response that included a custom HTTP response header named "Set-Cookie" which contained this unique ID.  This response also included the contents of this page, of course.</li>
			<li>The browser stores the "cookie" with this unique ID on your computer</li>
			<li>Along with every subsequent HTTP request your browser will make to this site, it will include a custom HTTP header named "Cookie" that includes this unique ID as part of that request.</li>
			<li>The server, if it is coded to do so in PHP or some other language, can see that the same unique ID is being used across multiple requests, and it can track what pages the person with this unique ID is visiting.</li>
			<li>It is possible use server-side coding to show different content to different visitors, depending upon their unique IDs</li>
			<li>This information can be stored in a database, so there is a permanent record of which pages were viewed by which visitors.</li>
		</ol>

		<p>Try viewing this page on a different computer or device - you will see that the unique ID will be different, since this specific cookie with the ID is only on your computer.  Other computers will be given an equivalent cookie with a different ID.</p>

	</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Mod_Rewrite Example</title>
    <link rel="stylesheet" type="text/css" href="/amosbloomberg/spring2010/class10/mod_rewrite/styles/main.css" />
	</head>
	<body>
    <div id="container">
    	<h1>
    		The following script has been requested:<br />
    		<?php echo $_SERVER['PHP_SELF'] ?>?<?php echo $_SERVER['QUERY_STRING'] ?>
    	</h1>
    	<p>If the URL in the browser's address bar says something different, you are the victim of a mod_rewrite!</p>
    	<p>mod_rewrite lets you customize your URLs to say anything you want, while still naming your actual scripts the usual file names like index.php, etc.</p>
    	<p>Using mod_rewrite can make your site more user- and search-engine friendly by using more semantically meaningful URLs</p>
    	
			<h2>The following data was passed along in the query string of the GET request for this script:</h2>
			
<?php if (sizeof($_REQUEST) == 0) : ?>
			<pre>No data in the query string</pre>
<?php else : ?>
			<p>If you don't see the following data in the query string in the browser's address bar, that's because it has been put there on the server side by mod_rewrite.</p>
			<pre><?php print_r($_GET) ?></pre>
<?php endif ?>

			<h2>Here are some other rewritten links you can try:</h2>
			<p>They all get rewritten to this same script, index.php</p>
			<p>Notice that they are all absolute links or relative to the root of the server.  Combining relative links with mod_rewrite confuses the browser, unless they are relative to the root ( the top folder) of the web server.</p>
			<ul>
				<li>Simple Rewrite: <a href="/amosbloomberg/spring2010/class10/mod_rewrite/a-slick-server-side-rewrite">/amosbloomberg/spring2010/class10/mod_rewrite/a-slick-server-side-rewrite</a></li>
				<li>Simple Rewrite with Query String: <a href="/amosbloomberg/spring2010/class10/mod_rewrite/a-slick-server-side-rewrite-with-query-string">/amosbloomberg/spring2010/class10/mod_rewrite/a-slick-server-side-rewrite-with-query-string</a></li>				
				<li>Permalink-style #1: <a href="/amosbloomberg/spring2010/class10/mod_rewrite/2009/05/05/archive.html">/amosbloomberg/spring2010/class10/mod_rewrite/2009/05/05/archive.html</a></li>
				<li>Permalink-style #2: <a href="/amosbloomberg/spring2010/class10/mod_rewrite/2009_05_05_archive.html">/amosbloomberg/spring2010/class10/mod_rewrite/2009_05_05_archive.html</a></li>
				<li>News-style: <a href="/amosbloomberg/spring2010/class10/mod_rewrite/article/10">/amosbloomberg/spring2010/class10/mod_rewrite/article/10</a></li>
				<li>Client-side Redirect (a true redirect, not a rewrite): <a href="/amosbloomberg/spring2010/class10/mod_rewrite/an-easy-client-side-redirect">/amosbloomberg/spring2010/class10/mod_rewrite/an-easy-client-side-redirect</a></li>
			</ul>			
    </div><!-- end container -->
	</body>
</html>

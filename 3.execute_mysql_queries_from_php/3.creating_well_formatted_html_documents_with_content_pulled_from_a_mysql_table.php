<?php
 
/**
* This example shows how to perform a SELECT query on a database from within PHP.
* Any database errors are nicely displayed on the page.
* The results from the database, if any, are then nicely displayed on the page.
* All output to the browser is nice well-formatted HTML code.
* View the page source in the browser - it's nicely formatted!
**/

//connect to the database server, and store a "connection object" in the variable named $cxn
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");
 
//write a query as a String in PHP, and store in a variable named $query
$query = "SELECT * FROM favorite_viking_metal_bands ORDER BY formed DESC;";

//use the "connection object's" query() function to send the query to the database so it can execute it
//store the "result object" that the database server returns in a variable named $result
$result = $cxn->query($query); 

?>
<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="utf-8" />
          <title>Viking Metal Bands</title>
          <link rel="stylesheet" type="text/css" href="css/3.creating_well_formatted_html_documents_with_content_pulled_from_a_mysql_table.css" />
     </head>
     <body>
     	<div class="container">
            <h1>Viking Metal Bands</h1>

		<!-- output any MySQL errors as well-formatted HTML -->

<?php  if ($cxn->connect_error) : ?>

	 	<p class="error">
	 		Connection error!
	 		<?php print($cxn->connect_error); ?>
	 	</p>

<?php elseif ($cxn->error) : ?>

	 	<p class="error">
	 		Query syntax error!
	 		<?php print($cxn->error); ?>
	 	</p>

 <?php endif; ?> 
 
 		<!-- output the data from the MySQL query -->
 
 <?php while ($row = $result->fetch_assoc()) : ?>
                     <article>
                        <h1><?php print($row['band']); ?></h1>
                        <p><?php print($row['origin']); ?></p>
                        <p>(<?php print($row['formed']); ?>)</p>
                     </article>
 <?php endwhile; ?>
 
                      <div class="clear"></div>
      	</div>
     </body>
 </html>
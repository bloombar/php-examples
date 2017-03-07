<?php

/**
 * This example shows how to keep complicated PHP away from HTML.
 * Put complicated PHP up top of the file.
 * Then use minimal PHP embedded in the HTML wherever
 * it is necessary to use PHP to control the output of the HTML code.
 **/

//BEGIN COMPLICATED PHP STUFF

//make sure any PHP errors show up
error_reporting(E_ALL);
ini_set("display_errors", 1);

//connect to the database
$cxn = new mysqli("warehouse", "amos", "pqvksah8", "amos_db_design_spring_2016");

//store the query in a variable
$query = "SELECT * FROM favorite_viking_metal_bands ORDER BY formed ASC;";

//send the query to the database, and store the result
$result = $cxn->query($query); 

//END COMPLICATED PHP STUFF

?>
 <!DOCTYPE html>
 <html lang="en">
      <head>
           <meta charset="utf-8" />
           <title>Example of a Complicated PHP mixed with HTML</title>
      </head>
      <body>
 
           <h1>Example of a Complicated PHP mixed with HTML</h1>
 
           <ul> 
 
 <?php while ($row = $result->fetch_assoc()) : ?>
 
               <li><?php print($row['band']); ?></li> 
 
 <?php endwhile; ?>
 
           </ul> 
            
     </body>
 </html>
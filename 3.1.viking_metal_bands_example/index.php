<?php

//BEGIN COMPLICATED PHP STUFF
//...note that none of this PHP code is directly related to printing HTML to the browser.

error_reporting(E_ALL);
ini_set("display_errors", 1);
$cxn = new mysqli("your_host_name", "your_username", "your_password", "your_database_name");

$query1 = "SELECT * FROM favorite_viking_metal_bands ORDER BY created DESC LIMIT 0,20;";
$result1 = $cxn->query($query1); 

$query2 = "SELECT * FROM favorite_viking_metal_bands ORDER BY created DESC LIMIT 20,20;";
$result2 = $cxn->query($query2); 

$query3 = "SELECT * FROM favorite_viking_metal_bands WHERE origin='Norway' ORDER BY created DESC";
$result3 = $cxn->query($query3); 

$query4 = "SELECT * FROM favorite_viking_metal_bands WHERE band LIKE '%thor%' ORDER BY created DESC";
$result4 = $cxn->query($query4); 


//END COMPLICATED PHP STUFF
?>
<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="utf-8" />
         <title>Viking Metal Bands</title>
         <link rel="stylesheet" type="text/css" href="css/main.css" />
         <style>
h2 {
  text-transform: uppercase;
  font-size: 32px;
}
h3 {
  text-decoration: overline;
  color: #f0f0f0;
  margin: 50px 0 0 0;
}
ul {
  list-style-type: none;
}
         </style>
    </head>
    <body>

      <div class="container">
        <h1>Viking Metal Bands</h1>
        <p>This page pulls data from a MySQL database and outputs several lists of viking metal bands.</p>
      </div><!-- //.container -->

      <div class="container">
          <h2>Most recently entered bands</h2>
          <ul> 

<?php while ($row = $result1->fetch_assoc()) : ?>

            <li>

               <h3>
                  <?php print($row['band']); ?>
               </h3> 
               <p>
                  <?php print($row['origin']); ?>               
                  -
                  <?php print($row['formed']); ?>
               </p>

            </li>

<?php endwhile; ?>

          </ul> 
      </div><!-- //.container -->

      <div class="container">

          <h2>Previous 20 bands</h2>

          <ul>

<?php while ($row = $result2->fetch_assoc()) : ?>

            <li>
                 <h3>
                    <?php print($row['band']); ?>
                 </h3> 
                 <p>
                    <?php print($row['origin']); ?>               
                    -
                    <?php print($row['formed']); ?>
                 </p>
            </li>

<?php endwhile; ?>

          </ul>
      </div><!-- //.container -->

      <div class="container">
          <h2>Bands from Norway</h2>

          <ul>

<?php while ($row = $result3->fetch_assoc()) : ?>

            <li>
                 <h3>
                    <?php print($row['band']); ?>
                 </h3> 
                 <p>
                    <?php print($row['origin']); ?>               
                    -
                    <?php print($row['formed']); ?>
                 </p>
            </li>

<?php endwhile; ?>

          </ul>
      </div><!-- //.container -->

      <div class="container">
          <h2>Bands with names like Thor</h2>

          <ul>

<?php while ($row = $result4->fetch_assoc()) : ?>

            <li>
                 <h3>
                    <?php print($row['band']); ?>
                 </h3> 
                 <p>
                    <?php print($row['origin']); ?>               
                    -
                    <?php print($row['formed']); ?>
                 </p>
            </li>

<?php endwhile; ?>

          </ul>
      </div><!-- //.container -->
            
   </body>
</html>

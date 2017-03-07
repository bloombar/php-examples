<?php

/**
 * This example shows PHP's alternative syntax.
 * Take a look at the for loop in the code.  It has unusual syntax.
 * There are no curly brackets.
 * Notice that it looks non-threatening when embedded in HTML.
 * This makes it easier to read both your HTML and PHP code.
 **/

?>
<!DOCTYPE html>
 <html lang="en">
      <head>
           <meta charset="utf-8" />
           <title>Example of a PHP loop in an HTML document</title>
      </head>
      <body>
 
           <h1>Example of a PHP loop in an HTML document</h1>
 
           <ul> 
 
 <?php for ($i=0; $i<10; $i++) : ?>
 
               <li><?php print($i); ?></li> 
 
 <?php endfor; ?>
 
           </ul> 
            
     </body>
 </html>
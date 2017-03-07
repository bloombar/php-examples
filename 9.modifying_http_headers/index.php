<?php

//this example shows how to send custom HTTP response headers from the server to the client using PHP's built-in header() function

//in this case, we send a special Location header to the client, which tells the client that the file they are requesting has permanently moved to a different location
header("Location:totally_different_page.php");

?>
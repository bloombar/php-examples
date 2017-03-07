<?php

//tell the server to tell the browser that this is not an HTML document, but is rather plain text
header("Content-Type: text/plain");

print("You are on " . $_SERVER['HTTP_HOST'] . "\n\n");

print("Your brower is saying that you like the following languages: " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "\n\n");

//find the position of the string "es" within the language header the client sent to the server
$pos_of_spanish = strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], "es");
if ($pos_of_spanish >= 0) {
	print("Hola!  Tu hablas espanol\n\n");
}
$pos_of_english = strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], "en");
if ($pos_of_english >= 0) {
	print("Hey dude!  You speak English!\n\n");
}



//print out all the raw contents of the $_GET variable
print("\nHere is a raw dump of the contents of the \$_GET array\n");
print_r($_GET);

//print out all the raw contents of the $_POST variable
print("\nHere is a raw dump of the contents of the \$_POST array\n");
print_r($_POST);

//print out all the raw contents of the $_SERVER variable
print("\nHere is a raw dump of the contents of the \$_SERVER array\n");
print_r($_SERVER);

?>
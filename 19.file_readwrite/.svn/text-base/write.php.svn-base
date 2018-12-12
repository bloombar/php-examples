<?php

/*
	fopen takes two parameters: the filename and the permission you want on that file 
	permissions can be any of r,w, or a (reading, writing, appending)
*/
//get a handle on a text file by assigning it to the variable "handle"
//$handle = @fopen("something.txt", "a"); //the @ sign suppresses any errors that may arise
$handle = fopen("something.txt", "a"); 

if ($handle) { //if the file opened successfully
	$lineOfText = "some text\n"; //add a newline character to the line of text
	fwrite($handle, $lineOfText); //write the line of text to the file
	
	print "wrote '{$lineOfText}' to the file";
}
else {
	print "error: didn't write the line of text";
}
fclose($handle); //close the file

?>
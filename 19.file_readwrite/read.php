<?php

//open file and put into variable called handle
//the fopen() function takes two parameters: the filename, and the permissions
//permissions can be "r" for read-only, "w" for write, and "a" for appending to the existing file
$handle = fopen("something.txt", "r");

if ($handle) { //if the file opened successfully

	//loop through each line of the file
	//quit when it reaches the file-end-of-file
    while (!feof($handle)) {
		//put a line from the file into the variable called buffer
        $buffer = fgets($handle, 4096);
		
		//print this line of the file
		print $buffer;
		print "<br/>";

    }
	
	//close the file so the server is happy
    fclose($handle); //close the file when done
	
} //end if
?>

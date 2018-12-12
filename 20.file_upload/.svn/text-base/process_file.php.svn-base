<?php

require_once("Uploader.class.php");

//create a new instance of the Uploader class
//the constructor function for the Uploader class takes three parameters: the "name" attribute of the <input type="file" name="..."> field, the subdirectory where you want to store the files, and the maximum file size allowed
$uploader = new Uploader("uploadfile", "files", "10M");

//try to do the upload
if ($uploader->upload()) {
	//it worked... so get the new location of the file from the $uploader->getPermanentPath() function
	$path = $uploader->getPermanentPath();
	//redirect to success page, and pass the new path along
	header("Location: success.php?path=" . urlencode($path));	
}
else {
	//it didnt work!  so get the new error message from the $uploader->getError() function
	$error = $uploader->getError();
	//redirect to failure page, and pass the error message along
	header("Location: failure.php?error=" . urlencode($error));	
}

?>
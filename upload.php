<?php
	$folder_address = "UploadedFile/";
	$uploaded_file = $folder_address . basename($_FILES["file"]["name"]);
	$uploadOk = 1;

	$filetype = pathinfo($uploaded_file);

	//Checking Wheteher selected file is image or any thing else
	if(isset($_POST["submit"])) {
    	$check = getimagesize($_FILES["file"]["tmp_name"]);
    	// Printing the size of selected file in bytes
    	echo "Size of file::".$_FILES["file"]["size"]."<br>";
    	if($check !== false) {
        	echo "File is an image - " . $check["mime"] . ".";
        	$uploadOk = 1;
    	} else {
        	echo "File is not an image.";
        	$uploadOk = 0;
    	}
	}



?>
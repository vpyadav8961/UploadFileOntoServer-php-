<?php
    $folder_address = "";
    $uploaded_file = $folder_address . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    //DIE($uploaded_file);
    $filetype = pathinfo($uploaded_file,PATHINFO_EXTENSION);
    //die($filetype);

    //Checking Wheteher selected file is image or any thing else
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        //die($check);
        // Printing the size of selected file in bytes
        echo "Size of file::".$_FILES["file"]["size"]."<br>";
        echo "File name is :: ".$_FILES["file"]["name"]."<br>";
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    if($uploadOk == 1){
        move_uploaded_file($_FILES["file"]["tmp_name"],$uploaded_file); 
    }
    else{
        printf("File not uploaded.");
    }
    



?>
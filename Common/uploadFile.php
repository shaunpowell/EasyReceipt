<?php

	session_start();

	require('../Common/db.php');
	
	$ip=$_SERVER['REMOTE_ADDR'];
	
	$image = $_POST['image'];
	
    //don't continue if an image hasn't been uploaded
    if (!empty($image)){

    	echo 'image found';
    	
    	// Where the file is going to be placed
    	//$target_path = "uploads/";
    	
    	/* Add the original filename to our target path.
    	 Result is "uploads/filename.extension" */
    	//$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
    	
        //copy the image to directory
        copy($image, "temp/".$ip."");

        //open the copied image, ready to encode into text to go into the database
        $filename1 = "../temp/".$REMOTE_ADDR;
        $fp1 = fopen($filename1, "r");

        //record the image contents into a variable
        $contents1 = fread($fp1, filesize($filename1));

        //close the file
        fclose($fp1);

        //encode the image into text
        $encoded = chunk_split(base64_encode($contents1)); 

        //insert information into the database
        mysql_query("INSERT INTO images (img,data)"."VALUES ('NULL', '$encoded')");

        //delete the temporary file we made
        unlink($filename1);
        
    
    } else {
    	echo 'empty image';
	}
      
 ?>   
<?php
  require('loggedinheader.php');
      
  $current = 'upload'; 
      
  require('menu.php'); 

?>
 
  <!---<div id="logged_in_box"> --->
  
    <?php
      
      require('../db.php');

      if (!isset($_POST['uploaded']) or !$_POST['uploaded']){
      //If nothing has been uploaded display the form
      
      //echo $_SERVER['PHP_SELF'];
      
    ?>
    
    <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post" ENCTYPE="multipart/form-data">
      Upload:<br><br>
      <input type="file" name="image"><br><br>
      <input type="hidden" name="uploaded" value="1">
      <input type="submit" value="Upload">
    </form>

    <?php
      }else{
        //if the form hasn't been submitted then:

        //from here onwards, we are copying the file to the directory you made earlier, so it can then be moved into the database. The image is named after the persons IP address until it gets moved into the database

        //get users IP
        $ip=$_SERVER['REMOTE_ADDR'];
        
        //don't continue if an image hasn't been uploaded
        if (!empty($image)){

          echo 'image found';
          //copy the image to directory
          copy($image, "./temporary/".$ip."");

          //open the copied image, ready to encode into text to go into the database
          $filename1 = "./temporary/".$REMOTE_ADDR;
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
      }
    ?>
  <!---</div> --->
</div>
				
<?php
  
  require('..\footer.php');
  
?>
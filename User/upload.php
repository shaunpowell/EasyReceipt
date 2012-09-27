<div id="logged_in_container">

<?php
      
  $current = 'upload'; 
      
  require('menu.php'); 

?>
 
  <div id="logged_in_box">
    
	    <form name="upload" action="/EasyReceipt/Common/uploadFile.php" method="post">
	      Upload:<br><br>
	      <input type="file" name="image"><br><br>
	      <input type="hidden" name="uploaded" value="1">
	      <input type="submit" value="Upload">
	    </form>

	</div>
</div>
<?php
  
  session_start();
  
  $uid = '';
  if (isset($_SESSION['uid'])) { 
    $uid = $_SESSION['uid'];
  }
  
  if(strcmp($uid, "") != 0){
		echo redirect;
    header('Location: loggedin/LoggedInHome.php');
	
  }
  
?>
		

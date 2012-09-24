<?php

  $uid = '';
  if (isset($_SESSION['uid'])) { 
    $uid = $_SESSION['uid'];
  }
  
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width" name="viewport">
	<title>Easy Receipt | Receipt Management the easy way!</title>
	<link href="http://gmpg.org/xfn/11" rel="profile">
	<link href="http://localhost/EasyReceipt/wp-content/themes/plutoniumous/style.css" media="all" type="text/css" rel="stylesheet">
  <link href="http://localhost/EasyReceipt2/style.css" media="all" type="text/css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link href="http://localhost/EasyReceipt/xmlrpc.php" rel="pingback">
	<link id="google-fonts-1-css" media="all" type="text/css" href
	"http://fonts.googleapis.com/css?family=Droid+Serif%3A400%2C700%2C400italic%2C700italic&ver=3.4.2" rel="stylesheet">
	<link id="google-fonts-2-css" media="all" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans%3A400%2C700&ver=3.4.2 rel="stylesheet">
	<link id="google-fonts-3-css" media="all" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed%3A300&ver=3.4.2" rel="stylesheet">
	
</head>
	
<body class="home blog gecko">
	<div id="container" class="hfeed">
		<div id="header-wrap">
			<div id="header">
				<?php 
					require('branding.php');
          
					if(strcmp($uid, "") == 0){
					
						require('loginframe.php');
					
					} else {
           ?> 
          <div id="logout">
            <a href="logout.php">Logout</a>
          </div>
           <?php 
          }
        ?> 
				<div class="clear"></div>
			</div>
		</div>
		
		
	
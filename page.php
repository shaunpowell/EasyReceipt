<?php

	session_start();
	
	$uid = '';
	if (isset($_SESSION['uid'])) {
		$uid = $_SESSION['uid'];
	}

	require"Common/header.php"

?>
	
<body class="home blog gecko">
	<div id="container" class="hfeed">
		<div id="header-wrap">
			<div id="header">
				<?php 
					require('Common/branding.php');
          
					require('Login/checkLogIn.php');
				
				?>	
				
				<div class="clear"></div>
			</div>
		</div>
		<?php
  			$whitelist = array("home", "User/home", "User/upload", "User/sort", "User/report", "User/accountDetails");
  			if(in_array($_GET['page'], $whitelist)) {
				
				include($_GET['page'].".php");
    			
  			}?>
  			
  	</div>
</body>
  			
<?php require"Common/footer.php"?>
		
		
	
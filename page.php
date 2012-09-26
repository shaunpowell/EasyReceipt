<?php

	session_start();
	
	$uid = '';
	if (isset($_SESSION['uid'])) {
		$uid = $_SESSION['uid'];
	}

?>

<?php require"Common/header.php"?>
	
<body class="home blog gecko">
	<div id="container" class="hfeed">
		<div id="header-wrap">
			<div id="header">
				<?php 
					require('Common/branding.php');
          
					if(strcmp($uid, "") == 0){

						//if(strcmp($_GET['page'], "home") == 0){
							
							require('LogIn/loginframe.php');							

						//} else {
					
							//header('Location: ..');
							//require('LogIn/loginframe.php');
							
						//}
					
					} else {

						//if(strcmp($_GET['page'], "home") == 0){
		
							?>
				        	<div id="logout">
				            	<a href="User/logout.php">Logout</a>
				          	</div>
				           <?php 							
				
						//} else {
								
							//header('Location: ../page.php?page=User/home');
								
						//} 

					
			          }
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
		
		
	
<?php
  $active[$current] = "class=active";
?>

<ul id="css_horizontal_menu">

  <li 
    <?php 
    if ($current != 'home') {?> 
      ><a href="/EasyReceipt/page.php?page=User/home" class="first">Home</a>
    <?php
	} else { 
      	echo ' class="active"> Home'; 
    } ?>
  </li>
  
  <li 
    <?php 
    if ($current != 'upload') {?> 
    	><a href="/EasyReceipt/page.php?page=User/upload">Upload</a> 
    <?php
    } else { 
      echo ' class="active"> Upload'; 
    } ?>
  </li>
  
  <li 
    <?php 
    if ($current != 'sort') {?>
      	><a href="/EasyReceipt/page.php?page=User/sort">Sort</a> 
    <?php
    } else { 
      	echo ' class="active"> Sort'; 
    } ?>
  </li>
  
  <li 
    <?php 
    if ($current != 'report') {?>
      ><a href="/EasyReceipt/page.php?page=User/report">Report</a> 
    <?php
    } else { 
      echo ' class="active"> Report'; 
    } ?>
  </li>
  
  <li 
    <?php 
    if ($current != 'accountdetails') {?> 
      ><a href="/EasyReceipt/page.php?page=User/accountDetails">Account Details</a>
    <?php
    } else { 
      echo ' class="active"> Account Details'; 
    } ?>
  </li>
  
</ul>
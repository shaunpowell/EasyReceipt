<?php
  $active[$current] = "class=active";
?>


<ul id="css_horizontal_menu">

  <li 
    <?php 
    if ($current != 'home') { 
      echo '><a href="LoggedInHome.php" class="first">Home</a>'; 
    } else { 
      echo ' class="active"> Home'; 
    } ?>
  </li>
  
  <li 
    <?php 
    if ($current != 'upload') { 
      echo '><a href="upload.php">Upload</a>'; 
    } else { 
      echo ' class="active"> Upload'; 
    } ?>
  </li>
  
  <li 
    <?php 
    if ($current != 'sort') { 
      echo '><a href="sort.php">Sort</a>'; 
    } else { 
      echo ' class="active"> Sort'; 
    } ?>
  </li>
  
  <li 
    <?php 
    if ($current != 'report') { 
      echo '><a href="report.php">Report</a>'; 
    } else { 
      echo ' class="active"> Report'; 
    } ?>
  </li>
  
  <li 
    <?php 
    if ($current != 'accountdetails') { 
      echo '><a href="accountdetails.php">Account Details</a>'; 
    } else { 
      echo ' class="active"> Account Details'; 
    } ?>
  </li>
  
</ul>
<?php
session_start();
 echo "welcome to home page mr/s : ";
 echo  $_SESSION['username']."<br>";
 
?>
<a href="logout.php">Log out</a>
<?php
require 'connect.php';
$id=$_GET['pid'];
// echo $id;
$query=mysqli_query($conn,
"DELETE FROM users WHERE id='$id'");

if ($query) {
echo"<script>alert('deleted  successfully');window.location.assign('show_user.php');</script>";
 }
?>
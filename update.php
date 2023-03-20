<?php
$name =$_POST["username"];
$password =$_POST["password"];
$email =$_POST["email"];
$id =$_POST["id"];
$updated_at = date("Y-m-d H:i:s");

require 'connect.php';

//  $select =mysqli_query($conn ,"SELECT * FROM users WHERE id='$id'");

//  $row = mysqli_fetch_array($select);
  $update = mysqli_query($conn ,"UPDATE users SET username='$name' ,password='$password' ,email='$email',updated_at='$updated_at' WHERE id='$id'");

if ($update) {
   echo"<script>alert('updated successfully');window.location.assign('show_user.php');</script>";
}
?>
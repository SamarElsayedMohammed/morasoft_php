<?php

require 'connect.php';

$id = $_GET['pid'];
$select ="SELECT * FROM uploads WHERE id='$id'";

$query =mysqli_query($conn ,$select);

$row = mysqli_fetch_array($query);
$pic = $row["file_name"];

$del ="DELETE FROM  uploads WHERE id='$id'";
$query =mysqli_query($conn,$del);

if($query){
    unlink("Attachments/$pic");
    echo"<script>alert('deleted image successfully');window.location.assign('show_files.php');</script>";


}

?>
<?php
require 'connect.php';

$id= $_POST['id'];
$pic = $_FILES["fileUpload"];
$picname =$pic['name'];
$pictmp=$pic['tmp_name'];

$selectpic =mysqli_query($conn ,
"SELECT * FROM uploads  WHERE id='$id'"
);
$row =mysqli_fetch_array($selectpic);

$picold = $row['file_name'];

$update = "UPDATE  uploads SET file_name='$picname' WHERE id='$id'";

$query =mysqli_query($conn,$update);

if($query){

    move_uploaded_file($pictmp,"Attachments/$picname");
    unlink("Attachments/$picold");

    echo"<script>alert('update image successfully');window.location.assign('show_files.php');</script>";

        // header("location:show_files.php");
}
?>
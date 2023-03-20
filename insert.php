<?php
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

include 'connect.php';
// require 'connect.php';

if(isset($_POST['signup'])){
    $sql ="INSERT INTO users  (username ,email ,password)
    VALUES ('$name','$email','$password')";

    if ($conn->query($sql) == true) {
        echo"<script>alert('new user created successfully');window.location.assign('show_user.php');</script>";

        header("location:show_user.php");
    } else {
        echo "ERROR: ".$sql."<br>".$conn->error;
    }
    $conn->close();
    
}

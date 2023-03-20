<?php
if (isset($_POST['submit'])){

    $pic =$_FILES['fileUpload'];
    $picname = $pic['name'];

    $pictmp =$pic['tmp_name'];

    require 'connect.php';

    $insert =
    // "INSERT INTO uploads  (file_name)
    // VALUES ('$name','$email','$password')";
    "INSERT INTO uploads (file_name) VALUES('$picname')";
    $query = mysqli_query($conn ,$insert);

    if($query){
        mkdir("Attachments");
        move_uploaded_file($pictmp,"Attachments/$picname");
        // move_uploaded_file($_FILES['fileUpload']['tmp_name'], __DIR__.'/Attachments/'. $_FILES["fileUpload"]['name']);


   echo"<script>alert('done');window.location.assign('file.php');</script>";

    }

}


?>
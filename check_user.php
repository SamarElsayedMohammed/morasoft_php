<?php
// $name=$_POST['username'];
// $password=$_POST['password'];

// include 'connect.php';
// // require 'connect.php';

// if(isset($_POST['login'])){
//     $select ="SELECT *FROM users WHERE username = '$name' AND password ='$password'";
//     $query  = mysqli_query($conn ,$select);
//     if (mysqli_num_rows($query)>0) {
//       header("location:home.php");
//     } else {
//         echo "ERROR";
//     }
//     $conn->close();
    
// }

// ---------------------------------
$name=$_POST['username'];
$password=$_POST['password'];

include 'connect.php';
// require 'connect.php';
if(isset($_POST['login'])){
$select ="SELECT *FROM users WHERE username = '$name'";

$query  = mysqli_query($conn ,$select);

if(mysqli_num_rows($query)>0){
  $row = mysqli_fetch_array($query);
    if ($row["password"] == $password) {
      session_start();
      $_SESSION['username']=$name;
      header("location:home.php");
    } else {
      
        echo "wrong password";
    }

    $conn->close();
    
}
else{
  echo" username not register in the system";
}
}

<?php

// //MySQLi Object-Oriented

// $localhost="localhost";
// $username="root";
// $password="";
// $dbname="morasoftphp";

// //mysqli
// $conn = new mysqli($localhost,$username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


//MySQLi Procedural
define("localhost","localhost");
define("username","root");
define("password","");
define("dbname","morasoftphp");
// $localhost="localhost";
// $username="root";
// $password="";
// $dbname="morasoftphp";


@$conn=mysqli_connect(localhost,username, password, dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";





?>
<?php

//$dsn = "mysql:host=localhost;dbname='register'";
//$user = "root";
//$password = "";
//
//try{
//    $con = new PDO($dsn, $user, $password);
////    $db-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//}
//
//catch(PDOException $e){
//    echo "failed " . $e -> getMessage();
//}
$con = mysqli_connect("localhost","root","","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
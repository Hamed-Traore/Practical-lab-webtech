<?php
//procedural 
require('database_credentials');
$conn= mysqli_connect(servername,username,password,database);
// test connection
if (mysqli_connect_errno()) {// check if there is an error
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); // $mysqli -> connect_error describes the error
}



// //Object Oriented
// $mysqli = new mysqli("localhost","my_user","my_password","my_db");

// // Check connection
// if ($mysqli -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//   exit();
// }



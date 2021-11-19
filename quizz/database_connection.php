<?php
define('username','root');
define('password','');
define('database','class_quiz_db');
define('servername','localhost');

//procedural 
$conn= mysqli_connect(servername,username,password,database);
// test connection
if (mysqli_connect_errno()) {// check if there is an error
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); // $mysqli -> connect_error describes the error
}


?>
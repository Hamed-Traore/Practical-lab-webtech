<?php
require_once('database_connection.php');
if (isset($_POST["submit"])) {
    
    //store whatever the user types in the search box
    $name=$_POST['name'];
    $preferences= $_POST['preferences'];

    //check if the user inserted all the required values
    if(emptyInputSignup($name,$preferences )!==false){
        header("location: mini_web_app.php?error=emptyInput");
        exit();
    }
    addToDB($conn,$name,$preferences);

}

   
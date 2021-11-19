<?php
function emptyInputSignup($name,$preferences){
    $result;
    if(empty($name)||empty($preferences)){
        $result=true;
    }
    else {
        $result=false;
    }
    return $result;
}

function addToDB($conn,$name,$preferences){
    // insert the data into the DB
    $sql="INSERT INTO `quizz_table`(`name`, `user_choices`)
    VALUES(?,?,);";
    // prepared statement to check if there is a match in the DB(to prevent users form injecting bad code into the DB)
    $stmt= mysqli_stmt_init($conn);//initialized statement
    


    //if it does not fail, then insert the data
    mysqli_stmt_bind_param($stmt,"ss",$name,$preferences);
    // now execute the statement
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: mini_web_app.phpp?connected successfully");

}
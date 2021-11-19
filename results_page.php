<?php
require_once("database_credentials_test.php");

//Practical H
if (isset($_POST["add"])) {
    //store whatever the user types in the search box
    $result2=$_POST['Search_term'];
    // create the sql query
    $sql= "INSERT INTO `practical_lab_table`(`Search_term`) VALUES (?)";

    $stmt= mysqli_stmt_init($conn);//initialized and prepare a statement
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: results_page.php?error");
        exit();
    }
    //if it does not fail, then insert the data
    mysqli_stmt_bind_param($stmt,"s",$result2);
    // now execute the statement
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo '<p id="DemoAjax" >Data successfully added</p>';
}


// Practical I: select
if (isset($_POST["select"])) {
    $ValueSelected=$_REQUEST["Search_term"];
    $sql="SELECT `Lab_id`, `Search_term` FROM `practical_lab_table` WHERE `Search_term`='$ValueSelected' ";
    $result3=mysqli_query($conn,$sql);

    if (mysqli_num_rows($result3) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result3)) {
          echo "id: " . $row["Lab_id"]. " - search term: " . $row["Search_term"];
        }
    }
    else {
        echo "0 results";
    }
      
    mysqli_close($conn);
}

// practical J DELETE
if (isset($_POST["delete"])) {
    $ValueDeleted=$_POST["Search_term"];
    // sql to delete a record
    $sql = "DELETE FROM `practical_lab_table` WHERE Search_term='$ValueDeleted'";

    if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);

}


// Practical K
if (isset($_POST["update"])) {?>
    <table>
                    <tr>
                        <td>Lab_id</td>
                        <td>Search_term</td><br>
                    </tr>
        <?php
        
            $ValueSelected=$_POST["Search_term"];
            $sql="SELECT * FROM `practical_lab_table`";
            $result3=mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result3)) { ?>
                
                    <tr>
                        <td> <?php echo $row['Lab_id'];?></td>
                        <td> <?php echo $row['Search_term'];?></td><br>
                        <td><a href="edit.php?id= <?php echo $row['Lab_id'];?>">Edid</td><br>
                        
                    
                        
                    </tr>
                
        <?php }

        ?>
    </table>
    
<?php
}







?>    
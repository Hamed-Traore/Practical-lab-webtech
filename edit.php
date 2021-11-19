<?php

$conn1 = mysqli_connect("localhost", "root", "", "lab_post");

$id = $_GET['id']; // get id through query string

$records = mysqli_query($conn1,"select * from practical_lab_table where Lab_id='$id'"); // select query

$data = mysqli_fetch_array($records); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $Lab_id= $_POST['Lab_id'];
    $Search_term = $_POST['Search_term'];
	
    $edit = mysqli_query($conn1,"update practical_lab_table set Lab_id='$id', Search_term='$Search_term' where Lab_id='$id'");
	
    if($edit)
    {
        mysqli_close($conn1); // Close connection
        header("location:Form.php? successfully updated"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($conn1);
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="Lab_id" value="<?php echo $data['Lab_id'] ?>" placeholder="Enter Lab ID" Required>
  <input type="text" name="Search_term" value="<?php echo $data['Search_term'] ?>" placeholder="Enter Search Term" Required>
  <input type="submit" name="update" value="Update">
</form>
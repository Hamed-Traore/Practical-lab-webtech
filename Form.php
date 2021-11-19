<?php
session_start();//to start the session
//store 
if (isset($_GET['searchbox1'])){
    $_SESSION["session1"]=$_GET['searchbox1'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>


<body><h1>Google</h1>
<br>

<!-- create fist search bar -->
<form action="" method="get">
    <div>
        <input type="text" name="searchbox1"placeholder="type here" value= "<?php echo (isset($_GET['searchbox1'])) ?$_GET['searchbox1']: '';  ?>" >
    </div>
    <div>
        <button type="submit" name="submission1">submit</button>
    </div>
</form>
<br>
<!-- result of first search box -->
<?php
    if(isset( $_GET["submission1"])){
        echo "this is the result of search box 1 " , $_GET['searchbox1'];        
    }
?>
<br>
<!-- adding value to DB -->
<form action="results_page.php" method="post">
    <div>
        <input type="text" name="Search_term" placeholder= "add value to DB" >
    </div>
    <div>
        <button type="submit" onclick="validate(event)" name="add">Add</button>
        <button type="submit" name="select">Select</button>
        <button type="submit" name="delete">Delete</button>
        <button type="submit" name="update">Update</button>
    </div>
    <br> <br>
    <div>
        <input type="file" id="myFile" name="filename">
    </div>
    <div>
        <button type="submit" name="File_submit">submit file</button>
    </div>
    <div>
        <p id="DemoAjax"></p>
    </div>

</form>
</body>
</html>
<script>
    // Create an XMLHttpRequest Object
    var AjaxVar=new XMLHttpRequest();
    // Define a Callback Function
    //the callback function contains the code to execute when the response is ready.
    xhttp.onload = function() {
        // What to do when the response is ready
        document.getElementById("DemoAjax").innerHTML = this.responseText;
        
    }
    // Send a request
    xhttp.open("POST", "result_page.php", true);// TRUE so that the JavaScript does not have to wait for the server response to work
    xhttp.sen();
</script>
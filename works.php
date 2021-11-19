<h2> welcome</h2>
<?php
    session_start()
    require 'my_add_functions.php';
    include 'other_functions.php';
    $my_add_result=total(2,3);
    echo $my_add_result;
    
?>
<br>
<?php
    echo multiplyer($my_add_result);
?>
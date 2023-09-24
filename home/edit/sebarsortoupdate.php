<?php
ob_start();

// code 


session_start();
include '../../dbconnect.php';

  
    if (isset($_POST['submit'])) {
        $id = $_POST['hid'];
        $uporiciti=$_POST['poriciti'];
        
        
        
        $edit="UPDATE `sebarsorto` SET `sorto`='$uporiciti' WHERE `id`='$id'";
        $query=mysqli_query($con,$edit);
        if($query){
            header("location:homeedit.php");
        }
    }
    ob_end_flush();
    ?>
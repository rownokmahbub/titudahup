<?php
include '../../dbconnect.php';

  
    if (isset($_POST['submit'])) {
        $id = $_POST['hid'];
        $uporiciti=$_POST['poriciti'];
        
        
        
        $edit="UPDATE `sebarmullo` SET `mullo`='$uporiciti' WHERE `id`='$id'";
        $query=mysqli_query($con,$edit);
        if($query){
            header("location:homeedit.php");
        }
    }

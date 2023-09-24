<?php
ob_start();

// code 


session_start();
include './dbconnect.php';

  
    
        $id = $_REQUEST['id'];
      
        
        $delete="DELETE FROM `masisuvata` WHERE `id`='$id'";
        $query=mysqli_query($con,$delete);
        if($query){
            header("location:./masisutable.php");
        }
        ob_end_flush();
        ?>
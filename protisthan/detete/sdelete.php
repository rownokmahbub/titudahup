<?php
ob_start();

// code 


session_start();
include '../../dbconnect.php';

  
    
        $id = $_REQUEST['id'];
      
        
        $delete="DELETE FROM `shikkhaprotisthan` WHERE `id`='$id'";
        $query=mysqli_query($con,$delete);
        if($query){
            header("location:../edit/pedit.php");
        }
        ob_end_flush();
        ?>
<?php
include './dbconnect.php';

  
    
        $id = $_REQUEST['id'];
      
        
        $delete="DELETE FROM `wares` WHERE `id`='$id'";
        $query=mysqli_query($con,$delete);
        if($query){
            header("location:./warestable.php");
        }

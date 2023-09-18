<?php
include '../../dbconnect.php';

  
    
        $id = $_REQUEST['id'];
      
        
        $delete="DELETE FROM `upprotisthan` WHERE `id`='$id'";
        $query=mysqli_query($con,$delete);
        if($query){
            header("location:../edit/pedit.php");
        }

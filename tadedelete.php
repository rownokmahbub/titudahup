<?php
include './dbconnect.php';

  
    
        $id = $_REQUEST['id'];
      
        
        $delete="DELETE FROM `tadeentry` WHERE `id`='$id'";
        $query=mysqli_query($con,$delete);
        if($query){
            header("location:./tadeentrytable.php");
        }

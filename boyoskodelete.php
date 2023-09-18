<?php
include './dbconnect.php';

  
    
        $id = $_REQUEST['id'];
      
        
        $delete="DELETE FROM `boyoskovata` WHERE `id`='$id'";
        $query=mysqli_query($con,$delete);
        if($query){
            header("location:./boyoskotable.php");
        }

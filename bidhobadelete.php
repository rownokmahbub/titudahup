<?php
include './dbconnect.php';

  
    
        $id = $_REQUEST['id'];
      
        
        $delete="DELETE FROM `bidhobavata` WHERE `id`='$id'";
        $query=mysqli_query($con,$delete);
        if($query){
            header("location:./bidhobatable.php");
        }

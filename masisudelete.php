<?php
include './dbconnect.php';

  
    
        $id = $_REQUEST['id'];
      
        
        $delete="DELETE FROM `masisuvata` WHERE `id`='$id'";
        $query=mysqli_query($con,$delete);
        if($query){
            header("location:./masisutable.php");
        }

<?php
include './dbconnect.php';

  
    
        $id = $_REQUEST['id'];
      
        
        $delete="DELETE FROM `protibondhivata` WHERE `id`='$id'";
        $query=mysqli_query($con,$delete);
        if($query){
            header("location:./protibondhitable.php");
        }

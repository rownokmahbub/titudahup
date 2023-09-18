<?php
include '../../dbconnect.php';

  
    if (isset($_POST['submit'])) {
        $id = $_POST['hid'];
        $college=$_POST['sname'];
        $maddhomik=$_POST['sdhoron'];
      
        
        
        
        
        $edit="UPDATE `shikkhaprotisthan` SET `sname`='$college',`sdhoron`='$maddhomik' WHERE id=$id";
        $query=mysqli_query($con,$edit);
        if($query){
            header("location:pedit.php");
        }
    }

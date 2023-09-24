<?php
ob_start();

// code 


session_start();
include '../../dbconnect.php';

  
    if (isset($_POST['submit'])) {
        $id = $_POST['hid'];
        $college=$_POST['college'];
        $maddhomik=$_POST['maddhomik'];
        $nimo=$_POST['nimo'];
        $prathomic=$_POST['prathomic'];
        $madracha=$_POST['madracha'];
        $community=$_POST['community'];
        $shikkharhar=$_POST['shikkharhar'];
        
        
        
        
        $edit="UPDATE `shikkha` SET `college`='$college',`maddhomik`='$maddhomik',`nimo`='$nimo',`prathomic`='$prathomic',`madracha`='$madracha',`community`='$community',`shikkharhar`='$shikkharhar' WHERE id=$id";
        $query=mysqli_query($con,$edit);
        if($query){
            header("location:homeedit.php");
        }
    }
    ob_end_flush();
    ?>
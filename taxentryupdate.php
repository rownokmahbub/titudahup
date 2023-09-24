<?php
ob_start();

  // code 


session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST"){

   
   
    include './dbconnect.php';
    $id = $_POST['hid'];
    $holdingno = $_POST['holdingno'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $gram = $_POST['gram'];
    $ward = $_POST['ward'];

    $rnum = $_POST['rnum'];
    $kor = $_POST['kor'];
    
           
   


     
       $sql = "UPDATE `taxentry` SET `holdingno`='$holdingno',`name`='$name',`fatherhusband`='$fname',`gram`='$gram',`ward`='$ward',`totaltax`='$kor' WHERE `id`=$id";;
       print_r(error_get_last());
  
   if(mysqli_query($con, $sql)){

   
    header("Location:taxentrytable.php");
          
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($con);
   }

   // Close conection
   mysqli_close($con);
 }
 ob_end_flush();
 ?>
<?php
    include 'dbconnect.php';/// received data collect

    // to receive the post data we need to call $_POST variable
    // $_POST represents an associative array

    
       
        /// to establish a connection with database server
        
        $var1=$_POST['ward'];
        $var2=$_POST['abashikdata'];
        $var3=$_POST['bkordata'];
        $var4=$_POST['abashikkor'];
        $var5=$_POST['banijjikkor'];
        $var6=$_POST['motkor']; 
         $var7=$_POST['proti'];
         $var8=$_POST['probasi'];
         $var9=$_POST['bidhoba'];
         $var10=$_POST['vikkuk'];
         $var11=$_POST['mukti'];
         $var12=$_POST['matritto'];
         $var13=$_POST['jono'];
     
   $query="INSERT INTO kor VALUES('$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10','$var11','$var12',$var13)"; 

	   if(mysqli_query($con, $query)){
	      header('location:./sub_admin.php');
       }
        else{
	      header('location:./sub_admin.php');
        }

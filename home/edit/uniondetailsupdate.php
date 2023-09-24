<?php
ob_start();

// code 


session_start();
include '../../dbconnect.php';

  
    if (isset($_POST['submit'])) {
        $id = $_POST['hid'];
        $dakghor = $_POST['dakghor'];
        $gram = $_POST['gram'];
        $mouja = $_POST['mouja'];
        $hatbazar = $_POST['hatbazar'];
        $policecamp = $_POST['policecamp'];
        $enjio = $_POST['enjio'];
        $vhumi = $_POST['vhumi'];
        $mosjid = $_POST['mosjid'];
        $koborsthan = $_POST['koborsthan'];
        $edgah = $_POST['edgah'];
        $mondir = $_POST['mondir'];
        $sosan = $_POST['sosan'];
        
        
        
       
        $edit="UPDATE `uniondetails` SET `dakghor`='$dakghor',`gram`='$gram',`mouja`='$mouja',`hatbazar`='$hatbazar',`policecamp`='$policecamp',`enjio`='$enjio',`vhumi`='$vhumi',`mosjid`='$mosjid',`koborsthan`='$koborsthan',`edgah`='$edgah',`mondir`='$mondir',`sosan`='$sosan' WHERE id=$id";
        $query=mysqli_query($con,$edit);
        if($query){
            header("location:homeedit.php");
        }
    }
    ob_end_flush();
    ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    include '../dbconnect.php';

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





    $sql = "INSERT INTO `uniondetails`(`dakghor`, `gram`, `mouja`, `hatbazar`, `policecamp`, `enjio`, `vhumi`, `mosjid`, `koborsthan`, `edgah`, `mondir`, `sosan`) VALUES ('$dakghor','$gram','$mouja','$hatbazar','$policecamp','$enjio','$vhumi','$mosjid','$koborsthan','$edgah','$mondir','$sosan')
       ";
    print_r(error_get_last());

    if (mysqli_query($con, $sql)) {


        header("Location:home.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }

    // Close conection
    mysqli_close($con);
}

?>
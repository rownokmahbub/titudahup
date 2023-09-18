
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    include './dbconnect.php';
    $id = $_POST['hid'];
    $slno = $_POST['slno'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $gram = $_POST['gram'];
    $ward = $_POST['ward'];
    $voterid = $_POST['voterid'];
    $montobbo = $_POST['montobbo'];





    $sql = "UPDATE `masisuvata` SET `slno`='$slno',`name`='$name',`fatherhusband`='$fname',`mothername`='$mname',`gram`='$gram',`word`='$ward',`voterid`='$voterid',`montobbo`='$montobbo' WHERE `id`=$id";
    print_r(error_get_last());

    if (mysqli_query($con, $sql)) {


        header("Location:masisutable.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }

    // Close conection
    mysqli_close($con);
}

?>
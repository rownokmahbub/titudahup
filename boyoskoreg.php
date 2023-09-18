<?php
ob_start();

// code


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    include './dbconnect.php';
    $slno = $_POST['slno'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $gram = $_POST['gram'];
    $ward = $_POST['ward'];
    $voterid = $_POST['voterid'];
    $montobbo = $_POST['montobbo'];

    $sql = "INSERT INTO `boyoskovata`(`slno`, `name`, `fatherhusband`, `mothername`, `gram`, `word`, `voterid`, `montobbo`)  VALUES ('$slno','$name','$fname','$mname','$gram','$ward','$voterid','$montobbo')";
    print_r(error_get_last());

    if (mysqli_query($con, $sql)) {


        header("Location:boyoskovataentry.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }

    // Close conection
    mysqli_close($con);
}
ob_end_flush();
?>
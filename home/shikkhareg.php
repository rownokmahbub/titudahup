
<?php
ob_start();

// code 


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    include '../dbconnect.php';

    $college = $_POST['college'];
    $maddhomik = $_POST['maddhomik'];
    $nimno = $_POST['nimno'];
    $prathomik = $_POST['prathomik'];
    $madracha = $_POST['madracha'];
    $community = $_POST['community'];
    $shikkharhar = $_POST['shikkharhar'];




    $sql = "INSERT INTO `shikkha`(`college`, `maddhomik`, `nimo`, `prathomic`, `madracha`, `community`, `shikkharhar`) VALUES ('$college','$maddhomik','$nimno','$prathomik','$madracha','$community','$shikkharhar')
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
ob_end_flush();
?>
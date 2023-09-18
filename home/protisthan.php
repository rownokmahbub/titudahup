
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    include '../dbconnect.php';

    $shikkha = $_POST['protisthan'];
    $shikkhardhoron = $_POST['protisthandhoron'];




    $sql = "INSERT INTO `protisthan`(`protisthan`, `protisthandhoron`) VALUES ('$shikkha','$shikkhardhoron')
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
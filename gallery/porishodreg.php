
<?php
ob_start();

// code 


session_start();
if (isset($_POST['submit'])) {
    include '../dbconnect.php';
    $borgotype = $_POST['borgotype'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../Assets/image/" . $filename;


    print_r(error_get_last());

    $sql = "INSERT INTO `porishodborgo`(`borgotype`, `image`) VALUES ('$borgotype','$filename')";
    print_r(error_get_last());
    // Execute query
    mysqli_query($con, $sql);

    if (mysqli_query($con, $sql)) {
        move_uploaded_file($tempname, $folder);

        header("Location:ghome.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }
}


ob_end_flush();
?>
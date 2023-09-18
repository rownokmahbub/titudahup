<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();

  // code 


session_start();

include "./dbconnect.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($email)) {

        header("Location: subuser.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: subuser.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM subuser WHERE email='$email' AND password='$pass'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];



                $_SESSION['id'] = $row['id'];

                header("Location: ./userhome.php");

                exit();

            }else{

                header("Location: subuser.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: subuser.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}
 ob_end_flush();

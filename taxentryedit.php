<?php
session_start();
$email = $_SESSION['email'];
if ($email == null) {
    header('Location:index.php');
}
?>
<?php
include './dbconnect.php';

if (isset($_REQUEST['id'])) {
    $rid = $_REQUEST['id'];

    $query = "SELECT * FROM `taxentry` WHERE id=$rid";
    $poriciti = mysqli_query($con, $query);
    $result = mysqli_fetch_array($poriciti);
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ট্যাক্স ডাটা এন্ট্রি </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {

                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>



<body>
    <div class="flex px-5 md:px-10 py-5 md:h-screen justify-between gap-5 items-center bg-slate-300 ">



        <div class="px-10 py-10 bg-white mx-auto w-full rounded-xl">
            <a href="./taxentrytable.php" class="text-center mb-3 font-semibold flex gap-3 items-center sticky top-0 left-0 w-full ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7" />
                </svg>
                Back</a>
            <div class="font-semibold text-xl mb-4 text-center">ট্যাক্স এডিট ফরম</div>
            <?php
            $id = $result['id'];
            $rid = $result['holdingno'];
            $name = $result['name'];
            $fathername = $result['fatherhusband'];
            $gram = $result['gram'];
            $word = $result['ward'];

            $totaltax = $result['totaltax'];


            ?>
            <form action="taxentryupdate.php" method="POST">
                <input type="hidden" name="hid" value="<?php echo $id; ?>">
                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-5">
                        <div class="space-y-1">
                            <span>হোল্ডিং নম্বর</span>
                            <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="holdingno" placeholder='হোল্ডিং নম্বর' value='<?php echo $rid ?>' required>
                        </div>
                        <div class="space-y-1">
                            <span>নাম</span>
                            <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="name" placeholder='নাম' value='<?php echo $name ?>' required>
                        </div>
                        <div class="space-y-1">
                            <span>পিতার/স্বামীর নাম</span>
                            <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="fname" placeholder='পিতার নাম' value='<?php echo $fathername ?>' required>
                        </div>

                        <div class="space-y-1">
                            <span>গ্রাম</span>

                            <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="gram" placeholder='গ্রাম' value='<?php echo $gram ?>' required>
                        </div>
                        <div class="space-y-1">
                            <span>ওয়ার্ড</span>

                            <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="ward" placeholder='ওয়ার্ড' value='<?php echo $word ?>' required>
                        </div>

                        <div class="space-y-1">
                            <span>কর</span>
                            <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="kor" placeholder='কর' value='<?php echo $totaltax ?>' required>
                        </div>



                    </div>




                </div>
                <div class="flex justify-center items-center w-full mt-5">
                    <input class='h-12 px-6 font-medium tracking-wide
text-white transition duration-200 rounded-xl shadow-md bg-purple-400
hover:bg-purple-700 focus:shadow-outline focus:outline-none cursor-pointer' type="submit" value="জমা দিন">
                </div>

            </form>
            <?php

            ?>
        </div>
    </div>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>
<?php
include 'dbconnect.php';
if (isset($_REQUEST['id'])) {
    $rid = $_REQUEST['id'];

    $query = "SELECT * FROM `nagorik` WHERE sarok=$rid";
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



<body class='bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 mb-10'>
    <div class='px-20 py-20 relative'>

        <?php
        $rid = $result['sarok'];
        $name = $result['name'];
        $fathername = $result['fathername'];
        $mothername = $result['mothername'];
        $husband = $result['husband'];
        $gram = $result['gram'];
        $word = $result['word'];
        $birthno = $result['birthno'];
        $gender = $result['gender'];
        $dakghor = $result['dakghor'];
        $voterid = $result['voterid'];
        $mobileno = $result['mobileno'];
        $date = $result['date'];

        ?>
        <input type="hidden" name="hid" value="<?php echo $rid; ?>">

        <div class="flex justify-between items-center">
            <p class=''>স্মারক নম্বর : <span><?= $rid ?></span></p>
            <p class=''>তারিখ : <span><?= $date ?></span> <br>

            </p>


        </div>
        <div class="flex justify-between items-start">
            <p>লিঙ্গ : <span><?= $gender ?></span> </p>

            <p class=''>ওয়ার্ড নম্বর : <span><?= $word ?></span></p>
        </div>
        <div class="flex justify-between items-start">
            <p>জন্ম নিবন্ধন নাম্বার : <span><?= $birthno ?></span> </p>
            <p>ভোটার আইডি : <span><?= $voterid ?></span> </p>
        </div>


        <div class="flex justify-between items-start mt-4">
            <p class="">এই মর্মে নাগরিক সনদ পত্র প্রদান করা যাচ্ছে যে , <span><?= $name ?></span></p>
            <p>জাতীয়তা : বাংলাদেশী </p>
        </div>
        <div class="flex justify-between items-start">
            <p>পিতার নাম : <span><?= $fathername ?></span> </p>
            <p>জাতীয়তা : বাংলাদেশী </p>
        </div>
        <div class="flex justify-between items-start">
            <p>মাতার নাম : <span><?= $mothername ?></span> </p>
            <p>জাতীয়তা : বাংলাদেশী </p>
        </div>
        <div class="flex justify-between items-start">
            <p>স্বামীর নাম : <span><?= $husband ?></span> </p>
            <p>জাতীয়তা : বাংলাদেশী </p>
        </div>
        <div class="flex justify-between items-start">
            <p>গ্রাম : <span><?= $gram ?></span> </p>
            <p>ডাকঘর : <span><?= $dakghor ?></span></p>
        </div>

        <p class="text-justify my-2">উপজেলা-চুয়াডাঙ্গা সদর, জেলা-চুয়াডাঙ্গা কে আমি ব্যাক্তিগত ভাবে চিনি ও জানি। সে
            একজন বাংলাদেশের নাগরিক এবং উত্তম চরিত্রের অধিকারী / অধিকারীণী । আমার
            জানামতে সে কোন রাষ্ট্র বিরোধী কাজে জড়িত নহে।

        </p>
        <p class="my-3">আমি তাঁর উজ্জল ভবিষৎ ও কর্মময় জীবন কামনা করছি।</p>

    </div>

    <?php



    ?>
    </div>

</body>

</html>
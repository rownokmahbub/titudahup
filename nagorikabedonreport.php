<?php
include 'dbconnect.php';
if (isset($_REQUEST['id'])) {
    $rid = $_REQUEST['id'];

    $query = "SELECT * FROM `nagorik` WHERE id=$rid";
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
        $voterid = $result['voterid'];
        $mobileno = $result['mobileno'];
        $date = $result['date'];

        ?>
        <input type="hidden" name="hid" value="<?php echo $rid; ?>">
        <p class='text-center font-medium text-2xl'>নাগরিক সনদ পত্র আবেদন ফরম</p>
        <div class="flex justify-between items-center">
            <p class='text-center  text-lg'> স্মারক নম্বরঃ <span><?= $rid ?></span></p>
            <p class='text-center  text-lg'> তারিখ : <span><?= $date ?></span></p>
        </div>
        <p>বরাবর,</p>
        <p class="ml-10 my-2">চেয়ারম্যান, <br>
            ৬নং তিতুদহ ইউনিয়ন পরিষদ, <br>
            চুয়াডাঙ্গা সদর,চুয়াডাঙ্গা।
        </p>
        <p>বিষয়ঃ নাগরিক সনদ পত্র প্রদান প্রসঙ্গে।</p>
        <p class='my-2'>জনাব,</p>
        <p class="ml-10 my-2">যথাবিহিত সম্মান প্রদর্শন পূর্বক বিনীত নিবেদন এই যে, আমি আপনার ইউনিয়নের একজন স্থায়ী বাসিন্দা। আমার একটি নাগরিক সনদ পত্র প্রয়োজন।</p>
        <div class="flex flex-col justify-center items-center">
            <div class='flex justify-between w-full my-10'>
                <div class='w-full text-center font-medium border border-black'>

                    <p class='border border-black px-4 py-2'>নাম</p>
                    <p class='border border-black px-4 py-2'>পিতার নাম</p>
                    <p class='border border-black px-4 py-2'>মাতর নাম</p>
                    <p class='border border-black px-4 py-2'>স্বামীর নাম</p>
                    <p class='border border-black px-4 py-2'>গ্রাম</p>
                    <p class='border border-black px-4 py-2'>ওয়ার্ড নম্বর</p>
                    <p class='border border-black px-4 py-2'>জন্ম নিবন্ধন নাম্বার </p>
                    <p class='border border-black px-4 py-2'>ভোটার আইডি</p>


                </div>
                <div class='w-full text-center border border-black'>

                    <p class='border border-black px-4 py-2'><span><?= $name ?></span></p>
                    <p class='border border-black px-4 py-2'><span><?= $fathername ?></span></p>
                    <p class='border border-black px-4 py-2'><span><?= $mothername ?></span></p>
                    <p class='border border-black px-4 py-2'><span><?= $husband ?></span></p>
                    <p class='border border-black px-4 py-2'><span><?= $gram ?></span></p>
                    <p class='border border-black px-4 py-2'><span><?= $word ?></span></p>
                    <p class='border border-black px-4 py-2'><span><?= $birthno ?></span></p>
                    <p class='border border-black px-4 py-2'><span><?= $voterid ?></span></p>
                </div>
                <div class="w-full border-2 border-black text-center">
                    <p class='border-b-2 border-black px-4 py-2'>মন্তব্য</p>
                </div>
            </div>
        </div>

        <p class="ml-10 my-2">অতএব হুজুর সমীপে আমার আবেদন, বর্ণিত বিষযটি সদয় বিবেচনা করে উপরে বর্ণিত ছক মোতাবেক যাতে আমি একটি নাগরিক সনদ পত্র পাই তার প্রয়োজনীয় ব্যবস্থা গ্রহণ করতে মর্জি হয়।</p>
        <div class=' absolute right-28 bottom-0 flex flex-col justify-end items-center'>
            <p>বিনীত নিবেদক,</p>
            <p>মোঃ আনোয়ার হোসেন</p>
            <p>মেবাইলঃ <span><?= $mobileno ?></span></p>
        </div>
        <?php



        ?>
    </div>

</body>

</html>
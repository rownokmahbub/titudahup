<?php
include '../../dbconnect.php';

if (isset($_REQUEST['id'])) {
    $kid = $_REQUEST['id'];

    $query = "SELECT * FROM `shikkhaprotisthan` WHERE id=$kid";
    $poriciti = mysqli_query($con, $query);
    $result = mysqli_fetch_array($poriciti);
}

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="md:px-32 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 py-20">
    <a href="./pedit.php" class="text-center font-semibold flex gap-3 items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 12H6M12 5l-7 7 7 7" />
        </svg>
        Back</a>
    <p class="text-center font-semibold text-2xl md:text-4xl">শিক্ষা প্রতিষ্ঠান এর তথ্য যোগ করুণ </p>

    <?php

    $kid = $result['id'];
    $college = $result['sname'];
    $maddhomik = $result['sdhoron'];


    ?>
    <form class="mt-5 px-5 flex flex-col gap-4 justify-center items-center max-w-2xl mx-auto" action="spupdate.php"
        method="POST">

        <input type="hidden" name="hid" value="<?php echo $kid; ?>">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 w-full">
            <input name='sname' type="text"
                class='px-3 py-2 border-gray-300 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 w-full rounded-xl text-sky-900'
                value='<?php echo $college ?>'>
            <input name='sdhoron' type="text"
                class='px-3 py-2 border-gray-300 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 w-full rounded-xl text-sky-900'
                value='<?php echo $maddhomik ?>'>



            <input
                class="bg-sky-900 px-3 py-2 cursor-pointer text-lg hover:bg-sky-600 flex justify-center items-center text-white rounded-xl"
                type="submit" value="Update" name='submit'>
    </form>
    <?php

    ?>


</body>

</html>
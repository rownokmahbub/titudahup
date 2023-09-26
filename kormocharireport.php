<?php
include 'dbconnect.php';
if (isset($_REQUEST['id'])) {
    $rid = $_REQUEST['id'];

    $query = "SELECT * FROM `kormocharitalika` WHERE id=$rid";
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
        $rid = $result['id'];
        $slno = $result['slno'];

        $name = $result['name'];
        $podobi = $result['podobi'];
        $joggota = $result['joggota'];
        $birthdate = $result['birthdate'];
        $mobileno = $result['mobileno'];
        $word = $result['word'];
        $voterid = $result['voterid'];

        ?>
        <input type="hidden" name="hid" value="<?php echo $rid; ?>">


<div class="flex flex-col justify-center items-center">
      <p class='text-3xl font-semibold'>মাখালডাঙ্গা ইউপি</p>
      <p class='text-xl font-medium my-1'>চুয়াডাঙ্গা সদর, চুয়াডাঙ্গা</p>
      <p class='text-xl font-medium mb-5'>কর্মচারী ও গ্রাম পুলিশের তালিকা </p>

</div>

      
        <table class='w-full table border border-black rounded-lg  text-xl'>
            <thead>
                <tr>
                    <th class='border border-black'>ক্রমিক নং </th>
                    <th class='border border-black'>নাম</th>
                    <th class='border border-black'>পদবি</th>
                    <th class='border border-black'>শিক্ষাগত যোগ্যতা</th>
                    <th class='border border-black'>জন্ম তারিখ </th>
                    <th class='border border-black'>মোবাইল নং</th>
                    <th class='border border-black'>ওয়ার্ড নং</th>
                    <th class='border border-black'>ভোটার আইডি </th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td class='border border-black text-center'><?= $slno ?></td>
                    <td class='border border-black text-center'><?= $name ?></td>
                    <td class='border border-black text-center'><?= $podobi ?></td>
                    <td class='border border-black text-center'><?= $joggota ?></td>
                    <td class='border border-black text-center'><?= $birthdate ?></td>
                    <td class='border border-black text-center'><?= $mobileno ?></td>
                    <td class='border border-black text-center'><?= $word ?></td>
                    <td class='border border-black text-center'><?= $voterid ?></td>


                </tr>



            </tbody>
        </table>

        <?php



        ?>

    </div>

</body>

</html>
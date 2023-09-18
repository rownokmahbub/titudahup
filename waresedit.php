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
  $id = $_REQUEST['id'];

  $query = "SELECT * FROM `wares` WHERE id=$id";
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
  <div class="flex px-5 md:px-10 py-5  justify-between gap-5 items-center bg-slate-300 ">



    <div class="px-10 py-10 bg-white mx-auto w-full rounded-xl">

      <?php
      $sarok = $result['sarok'];
      $name = $result['name'];
      $fathername = $result['fathername'];
      $mothername = $result['mothername'];
      $husband = $result['husband'];
      $gram = $result['gram'];
      $word = $result['word'];
      $birthno = $result['deathno'];
      $voterid = $result['voterid'];
      $mobileno = $result['mobileno'];
      $aname = $result['aname'];
      $date = $result['date'];
      $w1 = $result['w1'];
      $w2 = $result['w2'];
      $w3 = $result['w3'];
      $w4 = $result['w4'];
      $w5 = $result['w5'];
      $w6 = $result['w6'];
      $w7 = $result['w7'];
      $w8 = $result['w8'];
      $w9 = $result['w9'];
      $w10 = $result['w10'];
      $w11 = $result['w11'];
      $w12 = $result['w12'];
      $w13 = $result['w13'];
      $w14 = $result['w14'];
      $w15 = $result['w15'];
      $r1 = $result['r1'];
      $r2 = $result['r2'];
      $r3 = $result['r3'];
      $r4 = $result['r4'];
      $r5 = $result['r5'];
      $r6 = $result['r6'];
      $r7 = $result['r7'];
      $r8 = $result['r8'];
      $r9 = $result['r9'];
      $r10 = $result['r10'];
      $r11 = $result['r11'];
      $r12 = $result['r12'];
      $r13 = $result['r13'];
      $r14 = $result['r14'];
      $r15 = $result['r15'];
      ?>
      <div class="px-10 py-10 bg-white mx-auto w-full rounded-xl">
        <a href="./userhome.php" class="text-center mb-3 font-semibold flex gap-3 items-center sticky top-0 left-0 w-full ">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 12H6M12 5l-7 7 7 7" />
          </svg>
          Back</a>
        <div class="font-semibold text-xl mb-4 text-center">ওয়ারেশ এডিট ফরম</div>

        <form action="waresupdate.php" method="POST">
          <div class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-5">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="sarok" placeholder='সারক নম্বর' value="<?php echo $sarok; ?>">
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="name" placeholder='নাম' value="<?php echo $name; ?>">
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="fname" placeholder='পিতার নাম' value="<?php echo $fathername; ?>">
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="mname" placeholder='মাতার নাম' value="<?php echo $mothername; ?>">
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="husband" placeholder='স্বামীর নাম' value="<?php echo $husband; ?>">
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="gram" placeholder='' value="<?php echo $gram; ?>">
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="ward" placeholder='মাতার নাম' value="<?php echo $word; ?>">

              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="deathno" placeholder='মৃত্যু নিবন্ধন নাম্বার ' value="<?php echo $birthno; ?>">
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="voterid" placeholder='ভোটার আইডি' value="<?php echo $voterid; ?>">
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="mnum" placeholder='আবেদনকারীর মোবাইল নাম্বার' value="<?php echo $mobileno; ?>">
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="aname" placeholder='আবেদনকারীর নাম' value="<?php echo $aname; ?>">
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type="text" name="aname" placeholder='তারিখ' value="<?php echo $date; ?>">
            </div>

            <div class="font-semibold text-xl mb-4 text-center">ওয়ারেশ গণের নাম</div>
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-5">
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w1; ?>" name="w1" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r1; ?>" name="r1" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w2; ?>" name="w2" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r2; ?>" name="r2" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w3; ?>" name="w3" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r3; ?>" name="r3" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w4; ?>" name="w4" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r4; ?>" name="r4" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w5; ?>" name="w5" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r5; ?>" name="r5" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w6; ?>" name="w6" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r6; ?>" name="r6" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w7; ?>" name="w7" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r7; ?>" name="r7" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w8; ?>" name="w8" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r8; ?>" name="r8" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w9; ?>" name="w9" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r9; ?>" name="r9" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w10; ?>" name="w10" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r10; ?>" name="r10" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w11; ?>" name="w11" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r11; ?>" name="r11" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w12; ?>" name="w12" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r12; ?>" name="r12" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w13; ?>" name="w13" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r13; ?>" name="r13" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w14; ?>" name="w14" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r14; ?>" name="r14" placeholder='সম্পর্ক'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $w15; ?>" name="w15" placeholder='নাম'>
              <input class='px-2 py-2 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 border border-gray-300 rounded-xl w-full focus:outline-blue-400' type='text' value="<?php echo $r15; ?>" name="r15" placeholder='সম্পর্ক'>
            </div>


          </div>
          <div class="flex justify-center items-center w-full mt-5">
            <input class='h-12 px-6 font-medium tracking-wide
text-white transition duration-200 rounded-xl shadow-md bg-purple-400
hover:bg-purple-700 focus:shadow-outline focus:outline-none cursor-pointer' type="submit" value="জমা দিন">
          </div>

        </form>

      </div>
    </div>
    <?php

    ?>
  </div>
  </div>


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>
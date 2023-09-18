<?php
session_start();
$email = $_SESSION['email'];
if ($email == null) {
  header('Location:../login2.php');
}
?>
<?php
include '../../dbconnect.php';

if (isset($_REQUEST['id'])) {
  $kid = $_REQUEST['id'];

  $query = "SELECT * FROM `kormokortaborgo` WHERE id=$kid";
  $poriciti = mysqli_query($con, $query);
  $result = mysqli_fetch_array($poriciti);
}

?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="style.css">



</head>

<body class="md:px-32 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50">
  <div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
    <div class="flex flex-col items-center max-w-2xl md:px-8">
      <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
        <div>
          <a href="../edit/kormokortatable.php" class="text-center mb-3 font-semibold flex gap-3 items-center sticky top-0 left-0 w-full ">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M19 12H6M12 5l-7 7 7 7" />
            </svg>
            Back</a>
        </div>
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
          <span class="relative inline-block">

            কর্মকর্তা বর্গ ও কর্মচারী এডিট করুন
        </h2>
        <?php

        $kid = $result['id'];
        $name = $result['name'];
        $podobi = $result['podobi'];
        $mobileno = $result['mobileno'];
        $filename = $result['filename'];
        ?>
        <form method="POST" action="kormokortaupdate.php" enctype="multipart/form-data">
          <div class="flex flex-col justify-center items-center space-y-4">
            <input type="hidden" name="id" value="<?php echo $kid; ?>">

            <input class="rounded-xl overflow-hidden px-2 py-2 border border-sky-800 w-full" type="text" placeholder="নাম" name='name' value='<?php echo $name ?>'>
            <input class="rounded-xl overflow-hidden px-2 py-2 border border-sky-800 w-full" type="text" placeholder="পদবি" name='podobi' value='<?php echo $podobi ?>'>
            <input class="rounded-xl overflow-hidden px-2 py-2 border border-sky-800 w-full" type="text" placeholder="মোবাইল নাম্বার" name='mobileno' value='<?php echo $mobileno ?>'>
            <input class="rounded-xl overflow-hidden px-2 border border-sky-800 w-full" type="file" name="uploadfile" value='<?php echo $filename ?>' />
            <img class="h-60 rounded-lg" src="../../Assets/image/<?php echo $filename ?>">
          </div>
          <div class="flex  justify-center items-center w-full mt-3">
            <button class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600 duration-300 transition w-full' value="upload" name="upload" type="submit">Create</button>

          </div>
        </form>

        <?php

        ?>
      </div>


    </div>

  </div>




  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
  <script src="style.js"></script>
</body>

</html>
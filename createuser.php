<?php
session_start();
$email = $_SESSION['email'];
if ($email == null) {
    header('Location:login2.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 step Verification</title>
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
    <div class="bg-white flex justify-center items-center md:h-screen">
        <form class="flex flex-col justify-center items-center max-w-3xl px-10 py-10 gap-10 bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40
    rounded-2xl shadow-2xl shadow-gray-300" action="createuserprocess.php" method="POST">
            <a href="./adminhome.php" class="text-center mb-3 font-semibold flex gap-3 items-center sticky top-0 left-0 w-full ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H6M12 5l-7 7 7 7" />
                </svg>
                Back</a>
            <h2 class="text-2xl font-bold">ইউজার ক্রিয়েট করুণ</h2>

            <input class="px-4 py-2 bg-white text-gray-500 rounded-xl w-full" type="email" name="email" id="title" placeholder="Enter email" required>

            <input class="px-4 py-2 bg-white text-gray-500 rounded-xl w-full" type="password" name="password" id="title" placeholder="Enter password" required>
            <button class="px-4 text-lg text-white font-semibold py-2 bg-purple-500 rounded-2xl mt-3 hover:bg-purple-700
         hover:scale-95 transition duration-500" type='submit'>Create User</button>

        </form>
    </div>

</body>

</html>
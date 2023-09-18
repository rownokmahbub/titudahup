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
        <form class="flex flex-col justify-center items-center w-96 px-10 py-10  bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40 rounded-2xl shadow-2xl shadow-gray-300" action="verify.php" method="POST">
            <h2 class="text-2xl font-bold">Check Your Email</h2>
            <br>
            <h3 class="text-xl font-medium">Enter 6-digit code </h3>
            <br>
            <input class="px-4 py-2 bg-white rounded-2xl" type="textfield" name="Code" id="Code" placeholder="******" required>

            <button class="px-4 text-lg text-white font-semibold py-2 bg-purple-500 rounded-2xl mt-3 hover:bg-purple-700 hover:scale-95 transition duration-500" type='submit'>Submit</button>

        </form>
    </div>

</body>

</html>
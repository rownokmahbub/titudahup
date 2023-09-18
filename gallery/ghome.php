<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('Location:../login2.php'); 
  }
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css"  rel="stylesheet" />

  <link rel="stylesheet" href="style.css">


 
</head>
<body class="md:px-32 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50">
<div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
  <div class="flex flex-col items-center max-w-2xl md:px-8">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <a href='../adminhome.php' class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
         <img src="../Assets/logo.png" alt="">
        </a>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="192913ce-1f29-4abd-b545-0fbccfd2b0ec" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#192913ce-1f29-4abd-b545-0fbccfd2b0ec)" width="52" height="24"></rect>
          </svg>
         পরিষদ বর্গ অ্যাড করুন 
      </h2>
      <form method="POST" action="porishodborgo.php" enctype="multipart/form-data">
			<div class="form-group space-y-4">
       
        <input class="rounded-xl overflow-hidden px-2 py-2 border border-sky-800 w-full" type="text" placeholder="নাম" name='name' required>
        <input class="rounded-xl overflow-hidden px-2 py-2 border border-sky-800 w-full" type="text" placeholder="পদবি" name='podobi' required>
        <input class="rounded-xl overflow-hidden px-2 py-2 border border-sky-800 w-full" type="text" placeholder="মোবাইল নাম্বার" name='mobileno' required>
				<input class="rounded-xl overflow-hidden px-2 border border-sky-800 w-full" type="file" name="uploadfile" value="" />
			</div>
      <div class="flex gap-3 justify-center items-center w-full mt-3">
        <button class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600 duration-300 transition' value="upload" name="upload" type="submit">Create</button>
        <a href='./edit/porishodtable.php' class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>    
        Edit</a>
        </div>
		</form>
     

    </div>

   
  </div>

</div>




  </div>

<div class="flex flex-col items-center justify-center px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:pt-32 md:px-0">
  <div class="flex flex-col items-center max-w-2xl md:px-8">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <a href='../adminhome.php' class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
         <img src="../Assets/logo.png" alt="">
        </a>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="192913ce-1f29-4abd-b545-0fbccfd2b0ec" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#192913ce-1f29-4abd-b545-0fbccfd2b0ec)" width="52" height="24"></rect>
          </svg>
          কর্মকর্তা বর্গ ও কর্মচারী অ্যাড করুন 
      </h2>
      <form method="POST" action="kormokortaborgo.php" enctype="multipart/form-data">
			<div class="form-group space-y-4">
       
        <input class="rounded-xl overflow-hidden px-2 py-2 border border-sky-800 w-full" type="text" placeholder="নাম" name='name' required>
        <input class="rounded-xl overflow-hidden px-2 py-2 border border-sky-800 w-full" type="text" placeholder="পদবি" name='podobi' required>
        <input class="rounded-xl overflow-hidden px-2 py-2 border border-sky-800 w-full" type="text" placeholder="মোবাইল নাম্বার" name='mobileno' required>
				<input class="rounded-xl overflow-hidden px-2 border border-sky-800 w-full" type="file" name="uploadfile" value="" />
			</div>
      <div class="flex gap-3 justify-center items-center w-full mt-3">
        <button class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-sky-800 hover:bg-sky-600 duration-300 transition' value="upload" name="upload" type="submit">Create</button>
        <a href='./edit/kormokortatable.php' class='px-4 md:px-20 py-2.5 cursor-pointer rounded-xl text-white font-semibold text-base bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>    
        Edit</a>
        </div>
		</form>
     

    </div>

   
  </div>

</div>




  </div>
  


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
<script src="style.js"></script>
</body>
</html>
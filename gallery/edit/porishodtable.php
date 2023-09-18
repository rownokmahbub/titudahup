<?php
session_start();
$email = $_SESSION['email'];
if ($email == null) {
  header('Location:subuser.php');
}
?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />






  <script>
    tailwind.config = {
      theme: {
        colors: {
          primary: '#075985',
          secondary: '#0284c7',
        },
        extend: {
          animation: {
            marquee: 'marquee 35s linear infinite',
          },
          keyframes: {
            marquee: {
              '0%': {
                transform: 'translateY(0%)'
              },
              '100%': {
                transform: 'translateY(-100%)'
              },
            }
          },
        }
      }
    }
  </script>

</head>

<body class="md:px-10 mx-auto bg-gradient-to-r from-indigo-50 via-purple-50 to-pink-50 z-40">
  <!-- Navbar goes here -->
  <a href="../ghome.php" class="text-center mb-3 font-semibold flex gap-3 mt-10 items-center sticky top-0 left-0 w-full ">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M19 12H6M12 5l-7 7 7 7" />
    </svg>
    Back</a>
  <p class='text-center text-2xl font-semibold'>ইউনিয়ন পরিষদ বর্গ </p>
  <!--hero section-->
  <div class="my-10">

    <table id="myTable" class="cell-border display responsive wrap" style="width:100%">
      <thead>
        <tr>

          <th data-priority="1">নাম</th>

          <th data-priority="2">পদবি</th>
          <th data-priority="2">মোবাইল নং </th>
          <th data-priority="2">ইমেজ </th>
          <th data-priority="2">অ্যাকশন </th>

        </tr>
      </thead>
      <tbody>

        <?php
        include '../../dbconnect.php';
        $query = "SELECT * FROM `porishodborgo`";
        $poriciti = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($poriciti)) {
          $id = $row['id'];
        ?>
          <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">



            <td class=''><?= $row['name'] ?></td>
            <td class=''><?= $row['podobi'] ?></td>
            <td class=''><?= $row['mobileno'] ?></td>
            <td class=''> <img class="w-full h-60" src="../../Assets/image/<?php echo $row['filename']; ?>"></td>

            <td class=''>

              <div class="flex gap-3 justify-center items-center w-full">

                <a href='../edit/porishodedit.php?id=<?php echo $id; ?>' class='px-3 py-2 cursor-pointer rounded-xl text-white text-sm  bg-green-700 hover:bg-green-600  duration-300 transition flex items-center gap-1'>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                  </svg>
                </a>
                <a href="../delete/porishoddelete.php?id=<?php echo $id; ?>" class='px-3 py-2 cursor-pointer rounded-xl text-white text-sm  bg-red-700 hover:bg-red-600  duration-300 transition flex items-center gap-1'>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fefefe" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                  </svg>
                </a>
              </div>
            </td>

          </tr>
        <?php
        }


        ?>

      </tbody>
    </table>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
    $('#myTable').DataTable({
      responsive: true,
      columnDefs: [{
          responsivePriority: 1,
          targets: 0
        },
        {
          responsivePriority: 2,
          targets: -1
        }
      ]
    });
  </script>
  <script src="style.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
</body>

</html>
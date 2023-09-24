<?php

// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "titudahup";

// Create connection
$con= mysqli_connect($servername,$username,$password,$dbname) or die("Query died: connect");
mysqli_query($con,'SET CHARACTER SET utf8'); 
mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
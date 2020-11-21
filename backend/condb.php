<?php
$con = mysqli_connect("localhost" , "root" , "" , "admin_pos") or die("Error: " .mysqli_connect());
mysqli_query($con , "SET NAME 'utf8'")
// date_default_timezone_set('Asia/Bangkok');
?>
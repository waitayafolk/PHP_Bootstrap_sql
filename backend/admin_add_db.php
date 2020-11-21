<?php
include('condb.php');

$a_user = $_POST['user'];
$a_pass = $_POST['pass'];
$a_name = $_POST['name'];
$level = $_POST['level'];
$branch_id = $_POST['branch_id'];
// print_r($branch_id);exit();

$sql ="INSERT INTO tb_admin
    
    (user,  pass, name, status,level, branch_id) 

    VALUES 

    ('$a_user', '$a_pass', '$a_name' , 'use', '$level','$branch_id' )";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('suscess');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    }
?>
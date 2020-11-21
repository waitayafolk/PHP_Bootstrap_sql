<?php
include('condb.php');

$branch_name = $_POST['branch_name'];
$branch_eng = $_POST['branch_eng'];
$address = $_POST['address'];
$tel = $_POST['tel']; 
// print_r($branch_name);exit();

$sql ="INSERT INTO tb_branch
    
    (branch_name,  branch_eng, address, status, tel) 

    VALUES 

    ('$branch_name', '$branch_eng', '$address' , 'use' ,'$tel')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('suscess');";
      echo "window.location ='branch.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='branch.php'; ";
      echo "</script>";
    }
?>
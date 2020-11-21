<meta charset="UTF-8">
<?php

include('condb.php');  $a_id = $_REQUEST["a_id"];
  $a_user = $_REQUEST["user"];
  $a_pass = $_REQUEST["pass"];
  $a_name = $_REQUEST["name"];
  $level = $_REQUEST["level"];
  $branch_id = $_REQUEST["branch_id"];

//   print_r($a_user);exit();
 
  
  $sql = "UPDATE tb_admin SET  
      user='$a_user' , 
      pass='$a_pass' , 
      name='$a_name' ,
      level = '$level',
      branch_id = '$branch_id'
      WHERE id='$a_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); 

  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('บันทึกข้อมูลสำเร็จ');";
  echo "window.location = 'admin.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>
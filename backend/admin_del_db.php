<meta charset = "UTF-8">
<?php 
include('condb.php');
$a_id = $_REQUEST["ID"];

$sql = "UPDATE tb_admin set status = 'delete' WHERE id = '$a_id' ";
$result = mysqli_query($con , $sql) or die ("Error in query : $sql " .mysqli_error());

    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('Delete suscess');";
        echo "window.location = 'admin.php'";
        echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('Delete Fail');";
        echo "</script>";
    }
?>
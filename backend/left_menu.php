<div class="list-group">

<?php 
$level = $_SESSION["level"];
// print_r($level);exit();
if($level == "admin"){
   echo '
    <a href="admin.php" class="list-group-item">จัดการ Admin</a>
    <a href="#" class="list-group-item">จัดการ Member</a>
    <a href="#" class="list-group-item">จัดการ Product</a>
    <a href="branch.php" class="list-group-item">สาขา</a>
    <a href="../logout.php" class="list-group-item">Logout</a>
   ';
}else{
    echo '
    <a href="#" class="list-group-item">Sale</a>
    <a href="../logout.php" class="list-group-item">Logout</a>
   ';
}

?>

    
</div>
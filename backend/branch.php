<!DOCTYPE html>
<html>
<head>
<?php include('h.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
<head>
  <body>
    <div class="container">
  <?php include('navbar.php');?>
  <p></p>

    <div class="row">
      <div class="col-md-2">
      <p class="list-group-item list-group-item-action disabled text-white bg-success">สวัสดี <?php echo $a_name; ?></p> 
        <?php include('left_menu.php');?>
      </div>
      <div class="col-md-10">
      <a class="btn btn-success" href="branch.php?act=add" role="button">เพิ่ม</a>
      <p></p>

     
        <div class="table-responsive">
        <?php
        $act = $_GET['act'];
        if($act == 'add'){
        include('branch_add.php');
        }elseif ($act == 'edit') {
        include('branch_edit.php');
        }
        else {
          include('branch_list.php');
        }
        ?>
        </div>
    </div>
  </div>
  </body>
</html>
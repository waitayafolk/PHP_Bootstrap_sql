<?php
include('condb.php');
$a_id = $_REQUEST["ID"];

$sql = "SELECT * FROM tb_admin WHERE id='$a_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);

extract($row);
// print_r($name);exit();
?>
<?php include('h.php');?>
<!-- <?php include('branch_list.php');?> -->
<form  name="admin" action="admin_edit_db.php" method="POST" id="admin" class="form-horizontal">
     
     <input type="hidden" name="a_id" value="<?php echo $a_id;?>" >
          <div class="form-group">
            <div class="col-sm-6" align="left"> Username  </div>
            <div class="col-sm-6" align="left">
              <input  name="user" type="text" required class="form-control" id="user " value ="<?=$user;?>" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="left"> Password  </div>
            <div class="col-sm-6" align="left">
              <input  name="pass" type="password" required class="form-control" id="pass" value ="<?=$pass;?>" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="left"> ชื่อ-สกุล  </div>
            <div class="col-sm-6" align="left">
              <input  name="name" type="text" required class="form-control" id="name" placeholder="ชื่อ-สกุล" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-6" align="left"> Level  </div>
            <div class="col-sm-6" align="left">
            <select class="form-control form-control-lg" id="level" name="level">
            <option value="<?=$level;?>"><?=$level;?></option>
              <option value="admin">Admin</option>
              <option value="sale">Sale</option>
            </select>
            </div>
          </div>  

          <div class="form-group">
            <div class="col-sm-6" align="left"> Level  </div>
            <div class="col-sm-6" align="left">
            <select class="form-control form-control-lg" id="branch_id" name="branch_id">
            <option value="<?=$branch_id;?>"><?=$branch_id;?></option>
            <?php foreach($result as $results){?>
                <option value="<?php echo $results["branch_name"];?>"> <?php echo $results["branch_name"]; ?> </option>
            <?php } ?>
            </select>
            </div>
          </div>  
        
          <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-5" align="right">
              <button type="submit" class="btn btn-success btn-sm" id="btn"> <span class="glyphicon glyphicon-saved"></span>บันทึก </button>      
            </div> 
          </div>
        </form>
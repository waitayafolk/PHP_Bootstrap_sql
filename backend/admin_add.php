<?php include('h.php');?>
<!-- <?php include('branch_list.php');?> -->
<form  name="admin" action="admin_add_db.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-6" align="left"> Username  </div>
            <div class="col-sm-6" align="left">
              <input  name="user" type="text" required class="form-control" id="user" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="left"> Password  </div>
            <div class="col-sm-6" align="left">
              <input  name="pass" type="password" required class="form-control" id="pass" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
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
            <option value="">-Choose-</option>
              <option value="admin">Admin</option>
              <option value="sale">Sale</option>
            </select>
            </div>
          </div>  

          <div class="form-group">
            <div class="col-sm-6" align="left"> Branch  </div>
            <div class="col-sm-6" align="left">
            <select name="branch_id" id="branch_id" class="form-control" required>
            <option value="">-Choose-</option>
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
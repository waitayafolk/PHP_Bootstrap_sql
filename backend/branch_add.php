<?php include('h.php');?>
<form  name="branch" action="branch_add_db.php" method="POST" id="branch" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-6" align="left"> Branch_name  </div>
            <div class="col-sm-6" align="left">
              <input  name="branch_name" type="text" required class="form-control" id="branch_name" placeholder="Branch_name"  title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-6" align="left"> Branch_eng  </div>
            <div class="col-sm-6" align="left">
              <input  name="branch_eng" type="text" required class="form-control" id="branch_eng" placeholder="branch_eng"  minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="left"> Address  </div>
            <div class="col-sm-6" align="left">
              <input  name="address" type="text" required class="form-control" id="address" placeholder="address" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="left"> Tel  </div>
            <div class="col-sm-6" align="left">
              <input  name="tel" type="text" required class="form-control" id="tel" placeholder="tel" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-5" align="right">
              <button type="submit" class="btn btn-success btn-sm" id="btn"> <span class="glyphicon glyphicon-saved"></span>บันทึก </button>      
            </div> 
          </div>
</form>
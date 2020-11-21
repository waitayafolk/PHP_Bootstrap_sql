<?php session_start();?>
<?php
include('h.php');
?>
<style type="text/css">
#btn{
width:100%;
}
</style>
<div id="login-container">
    <h3>Account Login</h3>
    <hr>
    <div class="container">
    <form  name="formlogin" action="checklogin.php" method="POST" id="pro" class="form-horizontal">
      <div class="row">
        <div class="col-12">
          <form action="" method="post">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="email-label">
                  <i class="fa fa-user-circle" aria-hidden="true"></i>
                </span>
              </div>
              <input type="text"  name="user" class="form-control" required placeholder="Username" />
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="in
                put-group-text" id="password-label">
                  <i class="fa fa-key" aria-hidden="true"></i>
                </span>
              </div>
              <input type="password" name="pass" class="form-control" required placeholder="Password" />
            </div>

            <label class="container-checkbox">Remember
              <input type="checkbox" checked="checked">
              <span class="checkmark"></span>
            </label>

            <div class="text-center">
              <button type="submit" class="btn btn-customized">Login </button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
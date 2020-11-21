<?php 
session_start();
        if(isset($_POST['user'])){
                  include("backend/condb.php");

                  $a_user = $_POST['user'];
                  $a_pass = $_POST['pass'];

                  $sql="SELECT * FROM tb_admin 
                  WHERE  user='".$a_user."' 
                  AND  pass='".$a_pass."'
                  AND status = 'use' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      
                      $row = mysqli_fetch_array($result);

                      $_SESSION["user_id"] = $row["id"];
                      $_SESSION["a_name"] = $row["name"];
                      $_SESSION["level"] = $row["level"];
                      if($_SESSION["user_id"]!=''){ 
                        Header("Location: backend/index.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" User OR  Password is Not True\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: backend/index.php");
 
        }
?>
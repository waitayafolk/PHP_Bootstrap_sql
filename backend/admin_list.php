<?php
      include('h.php');
           
                include('condb.php');
                $query = "SELECT * FROM tb_admin WHERE status != 'delete' ORDER BY id ASC" or die("Error:" . mysqli_error());
                $result = mysqli_query($con, $query);
                // print_r($result);exit();
                echo '<table class="table table-striped">';
                echo '<thead class="thead-dark">' ;
                    echo "
                    
                      <tr>
                      <td>User</td>
                      <td>Pass</td>
                      <td>Name</td>
                      <td>Branch</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      </tr>";
                  echo '</thead>';
                    
                    
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["user"] .  "</td> ";
                    echo "<td>" .$row["pass"] .  "</td> ";
                    echo "<td>" .$row["name"] .  "</td> ";
                    echo "<td>" .$row["branch_id"] .  "</td> ";
                    echo "<td><a href='admin.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
                    echo "<td><a href='admin_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                    echo "<td><a href='bill_admin.php?ID=$row[0]'target='_blank'class='btn btn-primary btn-xs'>พิมพ์</a></td>";
                  echo "</tr>";
                  }
                echo "</table>";
                
                mysqli_close($con);
?>
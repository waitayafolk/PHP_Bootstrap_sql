<?php
      include('h.php');
           
                include('condb.php');
                $query = "SELECT * FROM tb_branch WHERE status != 'delete' ORDER BY id ASC" or die("Error:" . mysqli_error());
                $result = mysqli_query($con, $query);
                // print_r($result);exit();
                echo '<table class="table table-striped table-dark">';
                    echo "
                      <tr>
                      <td>Name</td>
                      <td>Name Eng</td>
                      <td>Address</td>
                      <td>Tel</td>
                      <td></td>
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["branch_name"] .  "</td> ";
                    echo "<td>" .$row["branch_eng"] .  "</td> ";
                    echo "<td>" .$row["address"] .  "</td> ";
                    echo "<td>" .$row["tel"] .  "</td> ";
                    echo "<td><a href='branch_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                  echo "</tr>";
                  }
                echo "</table>";
                
                mysqli_close($con);
?>
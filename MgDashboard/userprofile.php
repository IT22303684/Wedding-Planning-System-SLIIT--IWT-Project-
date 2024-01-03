
<?php
include_once './logHeader.php';

?>

    <main>

  
        <link rel="stylesheet" href="./Style/userprofile-dasun.css">
        <link rel="stylesheet" href="./Style/package.css">


    <div id="top">
            <h1>Dashboard</h1>
        </div>

        <ul class="nav-menu">
        <li><a href="orders.php">Orders</a></li>
            <li><a href="userprofile.php">Users</a></li>
            <li><a href="vendor.php">Vendors</a></li>
			<li><a href="package.php">Packages</a></li>
        </ul>

        <div class="user-content">
        <center>
        <h2 style = "color:black;">Manage Users</h2>

        <a href = "adduser.php" class="button button-add buuton-main-add">Add New User</a><br>
        </center>

        <?php
          if(isset($_GET["message"])){
            
              
            
            if($_GET["message"]=="accessesdenied"){
              echo'<div class = "message error">suspicious attempt detected!</div>';
            }elseif($_GET["message"]=="failedtoupdateprofile"){
            echo'<div class = "message error">failed to update user data</div>';
            }elseif($_GET["message"]=="userprofileupdated"){
            echo'<div class = "message success">User Details Updated successfully! </div>';
            }
            
        }

       
        

      $userssql= "SELECT * FROM user_details ORDER BY user_id DESC;";
      $uresult = $conn->query($userssql);

      if ($uresult->num_rows> 0)
          {
              while($row = $uresult->fetch_assoc())
              {
                if($row["Acc_type"] == "Admin"){
                    continue;
                }

                if($row["Acc_type"] == "vendor"){
                    continue;
                }
                  $userdet[]=$row;
                
              }?>
              <table>
                  <tr>
                  <th>User ID</th>
                  <th>User</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Actions</th>
                  </tr>
                  <?php foreach ($userdet as $userdet): ?>
                  <tr>
                  <td><?php echo $userdet["user_id"] ?></td>
                  <td>
                  <?php echo $userdet["fname"]." ".$userdet["lname"] ?><br>
                    <p><?php echo $userdet["email"];?></p>
                </td>
                  <td><?php echo $userdet["phone_No"];?></td>
                  <td><?php echo $userdet["address"] ?></td>
                  <td>
                      <a href = "edituser.php?userid=<?php echo $userdet['user_id'];?>"class="button button-edit">Edit User</a>
                      <a href = "deleteuser.php?userid=<?php echo $userdet['user_id'];?>" 
                      onclick="return confirm('Are you sure you want to delete this user?');"class="button button-delete">Delete User</a>

                     
                      
                  </td>
                  </tr>
                  <?php endforeach; ?>
                
            </table>

            



          <?php
          }
          else
          {
          echo "No Users";
          }
    
      ?>

    </div>
  </div>

<?php 
$conn->close();

?>




    </main>

    <footer id="footer">
        <div>
            <div>
                <img src="./images/logo/white-logo.png" alt="">
                <img src="./images/footer/Planner 1.png" alt="">
                
                <ul>
                    
                    <a href="./index.html"></a><li>Home</li></a>
                    <a href="#"></a><li>Services</li></a>
                    <a href="#"></a><li>About</li></a>
                    <a href="#"></a><li>Work</li></a>
                    <a href="#"></a><li>Contact</li></a>
                    
                </ul>
                <ul>
                    <a href="#"></a><li>Facebook</li></a>
                    <a href="#"></a><li>Youtube</li></a>
                    <a href="#"></a><li>Instagram</li></a>
                    <a href="#"></a><li>Email</li></a>
                    <a href="#"></a><li>Call us</li></a>
                </ul>
            </div>
            <h3>Quick links</h3>
            <h3>Contact Us</h3>
            <p>All Right Reserved - 2023 Designed by SLIIT Matara Center, Group 04</p>
        </div>
    </footer>

    </body>
</html>

<?php
	
	include_once '../includes/config.php';
	include_once './logHeader.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Packages
        </title>
        <link rel="stylesheet" href="./Style/package.css">
		
    </head>
    <body>
	
		
       
        <main style="background-image: url(./images/bg1.jpg);">
            <div id="top">
                <center><h1 style="padding-bottom: 5px;"> Packages</h1></center>
            </div>
			
	
	   <!--Add content -->
	   <ul class="nav-menu">
             <li><a href="orders.php">Orders</a></li>
            <li><a href="userprofile.php">Users</a></li>
            <li><a href="vendor.php">Vendors</a></li>
			<li><a href="package.php">Packages</a></li>
        </ul>
	   
		
		<?php
			$sql = "select * from package";
			$result = $conn->query($sql);
			
			if(!$result){
				die("Invalid query: " .$conn->error);
			}
		?>	
		
		
		<div class="mn_package">
			
			<div><h2>
			
			<div class = "productData">
			<table border = "1" width = 100%>
				<tr>
					<th>Package Name </th>
					<th>Package Price </th>
					<th>Package Description </th>
					<th>Action </th>
				</tr>
			<?php
			
					while($row = $result->fetch_assoc())
					{
						echo"<tr>";
						echo"<td>".$row["package_name"]."</td>";
						echo"<td>".$row["package_price"]."</td>";	
						echo"<td>".$row["package_description"]."</td>";						
						echo"<td>
							<a href = 'update.php?id=$row[id]'>Update</a>
							<a href='#' onclick='return fun(\"delete.php?id=$row[id]\");'>Delete</a>
							</td>";
						echo "</tr>";	
					}
			?>	

			<script>
				function fun(link){
    			const userConfirmation = confirm("Are you sure you want to delete this package?");
    			if (userConfirmation) {
    
       				 window.location.href = link;
    				}
    
    					return false;
				}
				</script>


			</table>
			</div>
			
			</h2></div>
			
		<a href="addItems.php"><div class="see_more" >Add Package</div></a>
		<center><a href="../package.php" target="_blank" class="view">View Package on Store</a></center>
				
					
						
		</div>
				
		<?php		
				$conn->close();
		?>
	
	
	<hr>	
	
	<!--Add a footer-->
         <?php
             include_once 'footer.php';

        ?>

    </body>
</html>
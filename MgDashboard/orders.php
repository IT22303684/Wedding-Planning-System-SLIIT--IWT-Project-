<?php
	
	include_once '../includes/config.php';
	include_once './logHeader.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Orders
        </title>
        <link rel="stylesheet" href="./Style/package.css">
		
    </head>
    <body>
	
		
       
        <main style="background-image: url(./images/bg1.jpg);">
            <div id="top">
                <center><h1 style="padding-bottom: 5px;"> Orders</h1></center>
            </div>
			
	
	   <!--Add content -->
	   <ul class="nav-menu">
            <li><a href="orders.php">Orders</a></li>
            <li><a href="userprofile.php">Users</a></li>
            <li><a href="vendor.php">Vendors</a></li>
			<li><a href="package.php">Packages</a></li>
        </ul>
	   
		
		<?php
			$sql = "select * from orders";
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
                    <th>Order Id </th>
					<th>Amount </th>
					<th>Billing Address</th>
					<th>Payment Method</th>
                    <th>Service Name</th>
                    <th>Order Status</th>
                    <th>User Id</th>
					<th>Action </th>
				</tr>
			<?php
			
					while($row = $result->fetch_assoc())
					{
						echo"<tr>";
                        echo"<td>".$row["order_id"]."</td>";
						echo"<td>".$row["Amount"]."</td>";
						echo"<td>".$row["BillingAddress"]."</td>";	
						echo"<td>".$row["PaymentMethod"]."</td>";	
                        echo"<td>".$row["serviceName"]."</td>";
                        echo"<td>".$row["orderStatus"]."</td>";					
                        echo"<td>".$row["user_id"]."</td>";
						echo"<td>
							<a href = '#?id=$row[order_id]'></a>";
			?>

							<div id="delete-btn">
								<a id="cancel-link" href="orderapprove.php?orderid=<?php echo $row['order_id']."&userid=".$row['user_id']?>">
									<button id="delete-btn">Approve Order</button>
								</a>
							</div>

							<div id="delete-btn">
								<a id="cancel-link" href="ordercancel.php?orderid=<?php echo $row['order_id']."&userid=".$row['user_id']?>">
									<button id="delete-btn">Cancel Order</button>
								</a>
							</div>
			<?php echo"
							
							</td>";
						echo "</tr>";	
					}

					if(isset($_GET["message"])){
						if($_GET["message"]=="cancelled"){
						  echo "<script> alert('Order Cancelled successfully!'); </script>";
						  
						}elseif($_GET["message"]=="cancelfailed"){
						  echo'<div class = "message error">Order Cancelation Failed!</div>';
						}
					  }

					  if(isset($_GET["message"])){
						if($_GET["message"]=="approved"){
						  echo "<script> alert('Order approved successfully!'); </script>";
						  
						}elseif($_GET["message"]=="approvefailed"){
						  echo'<div class = "message error">Order approval Failed!</div>';
						}
					  }  

                    
			?>	
			</table>
			</div>
			
			</h2></div>
			
						
					
						
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
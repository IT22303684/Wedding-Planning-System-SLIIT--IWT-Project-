<?php
	
	include_once '../includes/config.php';
	include_once './logHeader.php';
?>


<?php

	$name = "";	
	$price = "";
	$des = "";

	$errorMessage = "";
	$successMessage = "";
	
	if(isset ($_POST["Submit"])){
		$name = $_POST["package_name"];	
		$price = $_POST["package_price"];
		$des = $_POST["package_description"];
		
		do{
			if(empty($id) || empty($name) || empty($price) || empty($des)){
				$errorMessage = "All the fields are required";
				break;
			}
			
			$sql="insert into package(id,package_name,package_price,package_description) values('','$name','$price','$des')";
	
			$result= $conn->query($sql);
			
			if(!$result){
				echo "<script>alert('records not added successfully')</script>";
			}
			
			else{
				echo "<script>alert('records added successfully in $sql')</script>";
			}
			
			
			
			header("location: /IWT/MgDashboard/package.php");
			exit;

			
		}while(false);
	
	}
	
	
	mysqli_close($conn);
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
            <div id="top1">
                <center><h1 style="padding-bottom: 5px;"> Add Package</h1></center>
            </div>
	
			<!--Create a from -->
			
			<section class="main-box">			
			<div class="package_card">
			
			
			<form action="submitAdd.php" method="POST">
				<h2><center>Package name: <br>
				<input type = "text" name="name" placeholder="Enter item name" value="<?php echo $name; ?>" required><br><br>
				Package Price: <br>
				<input type = "text" name="price" placeholder="Enter Price "value="<?php echo $price; ?>" required><br><br>
				Package Description :<br>
				<textarea name="des" placeholder="Enter item Description"value="<?php echo $des; ?>" required></textarea><br><br>
				
				
				
				<button type= "Submit" value="save">Submit</button>
				<a href="/IWT/MgDashboard/package.php" role="button">Cancel</a></center></h2>	
				
				
			</form>
			
			</div>
			</section>
	
		</main>
	
	
	
	<!--Add a footer-->
	<?php
             include_once 'footer.php';

    ?>

    </body>
</html>
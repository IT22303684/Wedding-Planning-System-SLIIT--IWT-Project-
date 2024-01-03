<?php
	
	include_once './logHeader.php';
?>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedding_planning";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


	$id = "";
	$name = "";	
	$price = "";
	$des = "";
	
	$errorMessage = "";
	$successMessage = "";
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		if(!isset($_GET["id"])){
			header("location: /IWT/MgDashboard/package.php");
			exit;
		}
		
		$id = $_GET["id"];
		
		$sql = "select * from package where id=$id";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		
		if(!$row){
			header("location: /IWT/MgDashboard/package.php");
			exit;
			
		}
		$name = $row["package_name"];	
		$price = $row["package_price"];
		$des = $row["package_description"];		
	}
	else{
		$id = $_POST["id"];
		$name = $_POST["name"];	
		$price = $_POST["price"];
		$des = $_POST["des"];
		
		do{
			if(empty($id) || empty($name) || empty($price) || empty($des)){
				$errorMessage = "All the fields are required";
				break;
			}
			
			$sql = "UPDATE package" .
				"SET name = '$name', name = '$price', name = '$des'".
				"WHERE id = $id";
				
			$result = $conn->query($sql);
			
			if(!$result){
				$errorMessage= "Invalid query: " .$conn->error;
				break;
			}

			$successMessage = "Client updated correctly";

			header("location: /IWT/MgDashboard/package.php");
			exit;	
		}while(true);
	}
	
?>	
	

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update package
        </title>
        <link rel="stylesheet" href="./Style/package.css">
		
    </head>
    <body>

		
		<main style="background-image: url(./images/bg1.jpg);">
            <div id="top1">
                <center><h1 style="padding-bottom: 5px;"> Edit Package</h1></center>
            </div>
	
			<!--Create a from -->
			
			<section class="main-box">			
			<div class="package_card">
			
			
			<form action="submitaAddItems.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<h2><center>Package name: <br>
				<input type = "text" name="name" placeholder="Enter item name" value="<?php echo $name; ?>"><br><br>
				Package Price: <br>
				<input type = "text" name="price" placeholder="Enter Price "value="<?php echo $price; ?>"><br><br>
				Package Description :<br>
				<textarea name="des" placeholder="Enter item Description"><?php echo $des; ?></textarea><br><br>
				
				
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
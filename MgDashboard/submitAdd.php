<?php
	include_once '../includes/config.php';
?>

<?php
	
	$name = $_POST["name"];	
	$price = $_POST["price"];
	$des = $_POST["des"];
	
	
	$sql="insert into package(id,package_name,package_price,package_description) values('','$name','$price','$des')";
	
	if(mysqli_query($conn,$sql)){
		?>
		<script>
            alert("Package added successfully");
            window.location.href = "package.php";
            </script>
			<?php
	}
	
	else{
		echo "<script>alert('Package not added successfully in $sql')</script>";
	}
	mysqli_close($conn);
?>


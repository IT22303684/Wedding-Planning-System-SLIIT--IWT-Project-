<?php
	include_once '../includes/config.php';
?>

<?php
	
	$name = $_POST["name"];	
	$price = $_POST["price"];
	$des = $_POST["des"];
	$id = $_POST["id"];
	
	
	$sql="UPDATE package SET package_name = '$name', package_price = '$price',package_description = '$des' WHERE id = $id;";
	
	if(mysqli_query($conn,$sql)){
		?>
		<script>
            alert("Package updated successfully");
            window.location.href = "package.php";
            </script>
			<?php
	}		
	
	else{
		echo "<script>alert('records not added successfully in $sql')</script>";
	}
	mysqli_close($conn);
?>


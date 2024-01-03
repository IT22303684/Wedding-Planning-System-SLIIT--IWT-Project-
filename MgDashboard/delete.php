<?php
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "wedding_planning";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$sql = "DELETE FROM package WHERE id=$id";
		$conn->query($sql);
		
			
	}
	
	header("location: /IWT/MgDashboard/package.php");
	exit;
?>
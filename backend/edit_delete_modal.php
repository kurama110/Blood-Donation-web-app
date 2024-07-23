<?php
	
	include_once('../include/db_connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM becomeadonor WHERE id = '".$_GET['id']."'";

		if (mysqli_query($dbcon,$sql)) {
			echo header("Location: blood-donor.php");
		}
		else{
			echo "<script>window.open('blood-donor.php')</script>";
		}
	}
?>

 
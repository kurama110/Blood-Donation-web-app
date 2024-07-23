<?php
	
	include_once('../include/db_connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM postrequest WHERE id = '".$_GET['id']."'";

		if (mysqli_query($dbcon,$sql)) {
			echo header("Location: req-blood.php");
		}
		else{
			echo "<script>window.open('req-blood.php')</script>";
		}
	}
?>

 
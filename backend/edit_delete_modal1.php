<?php
	
	include_once('../include/db_connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM post WHERE id = '".$_GET['id']."'";

		if (mysqli_query($dbcon,$sql)) {
			echo header("Location: sent-req.php");
		}
		else{
			echo "<script>window.open('sent-req.php')</script>";
		}
	}
?>

 
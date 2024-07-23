<?php include '../include/server.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="styleq.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/sweetalert.js"></script>
	<link rel="stylesheet" href="../assets/css/animate.min.css">

	<style>
		body{
			
			background-attachment: fixed;	
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.login{
			background-color: white;
		}
        .btn{
            background-color: red;
			color: white;
        }

         .btn:hover{
            background-color: red;
            color: white;
        }
	</style>
</head>
<body style="background-image: url('../assets/images/Polygon Luminary.svg');background-color: red;">
	
	<div class="bbg">
<br><br><br><br><br><br><br><br>

		<div class="mt-5 animate__animated animate__slideInLeft">
			<section id="login" class="login mt-5 shadow">
			<h4>Login</h4>
		<div class="log">
			<form action="index.php" method="POST">
			<label>Username</label>
			<input type="text" name="username" placeholder="Enter Your Username" class="form-control" required="">
			<br>
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Enter Your Password" required="">
			<br>
			<button class="btn btn-lg" name="clogin">Login</button>
		</form>
		</div>
		</div>
	</section>
	</section>

</body>
</html>
<?php
session_start();
?>

<html>
	<head>
		<title> User Login And Registration </title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
			>
	</head>
	
	<body>
		<div class="top-bar-orignal">
			<h1 class="a1-login-page"> Welcome to the AWS based test Application (Original)  </h1>
		</div>
		<div class="container"> 
			<div class="login-box">
				<div class="row">
					<div class ="col-md-6 login-left">
						<h2> Login </h2>
						<form action ="validation.php" method="post">
							<div class ="form-group">
								<label>User Name </label>
								<input type="text" name="user" class= "form-control" required> 
							</div>
							
							<div class ="form-group">
								<label>Password </label>
								<input type="password" name="password" class= "form-control" required> 
							</div>
							
							<button type="submit" class="btn btn-primary"> Login </button>
							</br>
							
							<?php
							if(isset($_SESSION['error'])){
							$error = $_SESSION['error'];
							echo "<span>$error</span>";
							}
							?> 
						</form>
					</div>
					
				</div>
			</div>
			<div>
			<a href="register.php"> If you do not have an account please REGISTER here... </a>
			</div>
	</body>

</html>

<?php
    unset($_SESSION["error"]);
?>
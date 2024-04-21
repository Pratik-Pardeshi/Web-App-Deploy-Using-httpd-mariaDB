<?php
session_start();
if (!isset($_SESSION['username'])){
	header('location:login.php');
	
}
?>


<html>
	<head>
		<title> User Information </title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
			>
	</head>
	
	<body class="body-home-page">
		<div class="container">

			<a class="float-right" href="logout.php"> LOGOUT </a>
			
			<h1> Welcome <?php echo $_SESSION['fName']; ?></h1>
			
			<h2 class="h23-home-page" > Here is your registration data</h2>
			</br>
			<h3 class="h23-home-page">User name   :  <?php echo $_SESSION['username']; ?></h3>
			<h3 class="h23-home-page"> First name  :  <?php echo $_SESSION['fName']; ?></h3>
			<h3 class="h23-home-page"> Last name   :  <?php echo $_SESSION['lName']; ?></h3>
			<h3 class="h23-home-page"> State       :  <?php echo $_SESSION['State']; ?></h3>
			<h3 class="h23-home-page"> Country     :  <?php echo $_SESSION['Country']; ?></h3>

		</div>
	</body>
</html>
<!DOCTYPE html>
<html>

<head>
	<?php 
		include 'config.php';
	 ?>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	 crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="../css/headfoot.css">
	<link rel="stylesheet" href="../css/sign.css">
</head>

<body>
	<!--Navigasi Website-->
	<nav class="navbar navbar-expand-md navbar-light sticky-top header-top">
		<a class="navbar-brand" href="#">
			<img src="../img/logo/moodplant-g2.png">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".kolapsin">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse kolapsin" id="collapsibleNavbar">
			<ul class="navbar-nav nav-fill navthis">
				<li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Shop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">More</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Q</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">SC</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row justify-content-center bg-login">
			<div class="login-form col-md-4">
				<div class="card">
					<div class="card-body">
						<h1 class="text-center">Login</h1>
						<?php 
							if (isset($_POST['bttlogin'])){
								require 'config.php';
								$username = $_POST['username'];
								$password = $_POST['password'];
								$result = mysqli_query($con, 'select * from customer where username="'.$username.'" and password="'.$password.'"');
								if(mysqli_num_rows($result)==1){
									$_SESSION['username']=$username;
									header('Location: index.php');
							}else{ 
								$_SESSION['alert'] = "<script>alert('Username atau password salah')</script>";
        						header("Location: ". "log in.php"); 
							}
						}
						 ?>
						<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" placeholder="Masukkan username">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="Password" name="password" class="form-control" placeholder="Masukan password">
							</div>
							<div class="form-group">

								<input type="checkbox">Remember me
							</div>

							<button class="btn btn-primary btn-block" name="bttlogin">login</button>
						</form>
						<a href="sign up.html"><p class="text-center">Don't have an account? Sign up here!</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="for-footer justify-content-center">
		<footer>
			<nav class="navbar justify-content-center">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="#">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">FAQs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Order Tracking</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
			</nav>
		</footer>
	</div>
</body>

</html>
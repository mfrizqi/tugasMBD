<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>
	<title>Sign up - Moodplant</title>
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
	<link rel="stylesheet" href="../css/shipping.css">

</head>
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

	</br>
	<form action="" method="">
	<div class="container fluid">
		<div class="row col-md-4 offset-md-1">
			<a href="" class="car">Cart</a>
			&nbsp >
			&nbsp
			<a href="" class="cus">Customer Information</a>
			&nbsp >
			&nbsp
			<a href="" class="payment">Payment</a>
		</div>
		<div class="row col-md-4 offset-md-1 jcontact">
			<h3>Contact information</h3>
		</div>
		<div class="row col-md-6 offset-md-1 ">
			<input type="Email" name="email" placeholder=" email" class="email" required="email">
		</div>
		<div class="row col-md-6 offset-md-1">
			<input type="checkbox" name="checkbox" class="check">
			<span class="keep"> &nbsp Keep me up to date on news and exclusive offer  </span> 
		</div>
		<div class="row col-md-4 offset-md-1 ship">
			<h3>Shipping address</h3>
		</div>
		<div class="row col-md-6 offset-md-1 ">
			<input type="text" name="name" placeholder=" Name" class="nama" required="name" pattern="{2,5}">
		</div>
		<div class="row col-md-6 offset-md-1 ">
			<input type="text" name="Address" placeholder=" Address" class="alamat">
		</div>
		<div class="row col-md-6 offset-md-1 ">
			<input type="text" name="city" placeholder=" City" class="kota">
		</div>
		<div class="row col-md-6 offset-md-1 ">
			<select required class="prov" >
  				<option value="">Provinsi</option>
  				<option value="banten">Banten</option>
  				<option value="jabar">Jawa barat</option>
  				<option value="jatim">Jawa timur</option>
  				<option value="sumut">Sumatera utara</option>
  				<option value="sumbar">Sumatera barat</option>
  				<option value="sumsel">Sumatera selatan</option>
  				
			</select>
			&nbsp
			&nbsp
			<input type="text" name="kodepos" placeholder=" Postal Code" class="kode">
		</div>
		<div class="row col-md-6 offset-md-1">
			<input type="checkbox" name="checkbox" class="check">
			<span class="save"> &nbsp  Save this information for the next time </span> 
		</div>
		<div class="row col-md-6 offset-md-5">
			<button class="btn btn-primary pay">Payment</button>
		</div>

		
	</div>
</form>








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
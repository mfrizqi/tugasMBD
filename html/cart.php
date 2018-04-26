<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	 crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	 crossorigin="anonymous">
	 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/headfoot.css">
	<link rel="stylesheet" href="../css/sign.css">
	<link rel="stylesheet" href="../css/cart.css">
</head>
<body>
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

<div class="container">
	<div class="row col-md-4 offset-md-1 men">
			<a href="" class="car">Cart</a>
			&nbsp >
			&nbsp
			<a href="" class="cus">Customer Information</a>
			&nbsp >
			&nbsp
			<a href="" class="payment">Payment</a>
		</div>
	</br>
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">

										<h4 class="nomargin"> &nbsp Product 1</h4>
										
									</div>
								</div>
							</td>
							<td data-th="Price">$1.99</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center">1.99</td>
							<td class="actions" data-th="">
								
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o">delete</i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
							<td><a href="#" class="btn btn-success btn-block">Bayar <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>

<!--	<div class="container fluid">
		<div class="row col-md-4 offset-md-1">
			<a href="" class="car">Cart</a>
			&nbsp >
			&nbsp
			<a href="" class="cus">Customer Information</a>
			&nbsp >
			&nbsp
			<a href="" class="payment">Payment</a>
		</div>
		<div class="row col-md-6 offset-md-1 ktkcart">
			<div class="col-md-12">
				<h4>Cart </h4>
      			<p><a href="#">Product 1 <?php  ?></a> <span class="price">$15 <?php  ?></span></p>
      			<p><a href="#">Product 2 <?php  ?></a> <span class="price">$5 <?php  ?></span></p>
      			<p><a href="#">Product 3 <?php  ?></a> <span class="price">$8 <?php  ?></span></p>
      			<p><a href="#">Product 4 <?php  ?></a> <span class="price">$2 <?php  ?></span></p>
     			<p>Total <span class="price" style="color:black"><b>$30</b></span></p>
			</div> 	
 	 </div>
-->
</body>
</html>
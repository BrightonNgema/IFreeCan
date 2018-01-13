<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>IFreeCan </title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/footer.css"/>
		<link rel="stylesheet" href="css/carousel.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">IFreeCan </a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="store.php"><span class="glyphicon glyphicon-modal-window"></span> All Products</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="cart.php"><span class="glyphicon glyphicon-heart"></span> Wishlist <span class="badge">0</span></a>
				</li>
				<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Welcome,".$_SESSION["name"]; ?> <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="">Edit Profile</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="php/logout.php">Logout</a></li>

								</ul>
							</li>
			</ul>
		</div>
	</div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<!-- <div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Per Product</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Total</b></div> -->
						</div>
						<div class="divider">

						</div>
						<div id="cart_checkout"></div>
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
						</div>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>

		</div>
	</section>
		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

				<p class="footer-links">
					<a href="index.php">Home</a>
					·
					<a href="index.php#about">About Us</a>
					·
					<a href="index.php#services">Services</a>
					·
					<a href="index.php#products">Products</a>
				</p>

				<p class="footer-company-name">IFREECAN &copy; 2015</p>
				<br/>
				<p class="footer-company-name">Developed & Designed by <a href="#">Brighton Ngema</a>&copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="glyphicon glyphicon-map-marker"></i>
					<p><span>21 June Street</span> Gauteng, South Africa</p>
				</div>

				<div>
					<i class="glyphicon glyphicon-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="glyphicon glyphicon-envelope"></i>
					<p><a href="mailto:brighton@Ifreecan.com">support@ifreecan.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Ifreecan Timepiece handcraft’s watches using an
	ancient art and science.It’s widely inspired by
	nature and Africa.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="glyphicon glyphicon-facebook"></i></a>
					<a href="#"><i class="glyphicon glyphicon-twitter"></i></a>
					<a href="#"><i class="glyphicon glyphicon-linkedin"></i></a>
					<a href="#"><i class="glyphicon glyphicon-github"></i></a>

				</div>

			</div>

		</footer>
</body>
</html>

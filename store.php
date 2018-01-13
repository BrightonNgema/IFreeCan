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
		<link rel="stylesheet" href="css/carousel.css"/>
		<link rel="stylesheet" href="css/footer.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
			.carousel-caption {
			  z-index: 10;
			  color:white;
			  padding-bottom:23%;
			  text-shadow: 1px 2px 10px #337ab7;
			}
			section {
			  /*background-color: #C2CCD6;*/
			  padding-top:20px;
			  background-image:url("images/IMG_4961.JPG");
				background-size: cover;

			}
		</style>
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

	<section>
		<!-- Carousel
		================================================== -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item next left">
					<img class="first-slide" src="images/IMG_4961.JPG" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Free Shipping</h1>
							<p>We deliver Free Nation Wide no hidden Cost.</p>
							<!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
						</div>
					</div>
				</div>
				<div class="item">
					<img class="second-slide" src="images/watches.jpg" alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>IFREECAN Time Piece</h1>
							<p>100% South Africa Brand Watches. 100% African!. 100% Black Owned</p>
							<!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Enter Store</a></p> -->
						</div>
					</div>
				</div>
				<div class="item active left">
					<img class="third-slide" src="images/watches1.jpg" alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Its IFREECAN Time</h1>
							<p>We sell our watches at reasonable prices. Still resisting? </p>
							<!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Press Me!</a></p> -->
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div><!-- /.carousel -->

	</section>

 <!-- All content section -->
				<!-- Products-->
				<!-- <section> -->
						<!-- <div class="row">
							<div class="col-lg-3 hidden-xs">

							</div>
						<div class="col-lg-3 ">

						</div>
						<div class="col-lg-6 col-xs-12">
							<div class="row">
								<div class="col-lg-8 col-sm-12">
									<input type="text" class="form-control" id="search" required>
								</div>
								<div class="col-lg-4 col-sm-12">
									<button class="btn btn-primary" id="search_btn">Search</button>
								</div>
							</div>
						</div>
						<div class="divider"></div>
						</div> -->
					<!-- </section> -->
					<section class="container products-box" style="padding-top:30px;">
						<div class="row">
							<div class="col-md-2">
								<div id="get_category">
								</div>

							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col-md-12 col-xs-12" id="product_msg">
									</div>
								</div>
								<div id="scroll">

									<div class="panel-body">
										<div id="get_product">
											<!--Here we get product jquery Ajax Request-->
										</div>
										<!--<div class="col-md-4">
											<div class="panel panel-info">
												<div class="panel-heading">Samsung Galaxy</div>
												<div class="panel-body">
													<img src="product_images/images.JPG"/>
												</div>
												<div class="panel-heading">$.500.00
													<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
												</div>
											</div>
										</div> -->
									</div>
									<div class="row">
										<div class="col-md-12">
											<center>
											<div class="btn-group">
													<ul class="pagination" id="pageno">
														<!-- <li><a href="#">1</a></li> -->
													</ul>

											</div>
											</center>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-1"></div>
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

<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>IFreeCan </title>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>

		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/carousel.css"/>
		<link rel="stylesheet" href="css/footer.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:65%;}
				#search_btn{width:30%;float:right;margin-top:-34px;margin-right:35px;}
			}
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">IFreeCan </a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
        <li class=dropdown>
								<a href="index.php" class=dropdown-toggle data-toggle=dropdown role=button aria-haspopup=true aria-expanded=false><span class="glyphicon glyphicon-home"></span>Home</a>
								<ul class=dropdown-menu>
                  <li><a href="#about"><span class="glyphicon glyphicon-time"></span> About Us</a></li>
                  <li role=separator class=divider></li>
          				<li><a href="#services"><span class="glyphicon glyphicon-user"></span> Services</a></li>
                  <li role=separator class=divider></li>
          				<li><a href="#products"><span class="glyphicon glyphicon-phone"></span> Products</a></li>
									<li role=separator class=divider></li>
								</ul>
				</li>
        <?php if (isset($_SESSION["uid"])){
				echo"
        <li><a href='store.php'><span class='glyphicon glyphicon-time'></span> Store</a></li>
        ";
      }else{

      }
      ?>
				<!-- <li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li> -->
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="cart.php"><span class="glyphicon glyphicon-heart"></span> Wishlist <span class="badge">0</span></a>
				</li>
				<?php if (isset($_SESSION["uid"])){
				echo"
				<li class=dropdown>
								<a href=# class=dropdown-toggle data-toggle=dropdown role=button aria-haspopup=true aria-expanded=false>"; ?><?php echo "Welcome,".$_SESSION['name']; ?> <?php echo "<span class=caret></span></a>
								<ul class=dropdown-menu>
									<li><a href=>Edit Profile</a></li>
									<li role=separator class=divider></li>
									<li><a href='php/logout.php'>Logout</a></li>

								</ul>
							</li>
				";
			}else{
					echo "
				<li><a href='signin.php'><span class='glyphicon glyphicon-user'></span>SignIn</a>
				</li>
				<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span>SignUp</a></li>

				";

			}
			?>
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
				<img class="first-slide" src="images/watch.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Free Shipping</h1>
						<p>We deliver Free Nation Wide no hidden Cost.</p>
						<?php
							if (isset($_SESSION["uid"])) {
								echo "
								<p><a class='btn btn-lg btn-primary' href='store.php' role='button'>Explore Products</a></p>

								";
							}else{

								echo "
								<p><a class='btn btn-lg btn-primary' href='signup.php' role='button'>Sign up today</a></p>
								";
							}
						?>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="second-slide" src="images/gadgets.jpg" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>IFREECAN Time Piece</h1>
						<p>100% South Africa Brand Watches. 100% African!. 100% Black Owned</p>
            <?php
              if (isset($_SESSION["uid"])) {
                echo "
                <p><a class='btn btn-lg btn-primary' href='store.php' role='button'>Enter Store</a></p>

                ";
              }else{

                echo "
                <p><a class='btn btn-lg btn-primary' href='signup.php' role='button'>Sign up today</a></p>
                ";
              }
            ?>
					</div>
				</div>
			</div>
			<div class="item active left">
				<img class="third-slide" src="images/coffee.jpg" alt="Third slide">
				<div class="container">
					<div class="carousel-caption">
            <?php
							if (isset($_SESSION["uid"])) {
								echo "
                <h1>What Time is it ".$_SESSION['name']."?</h1>
    						<p>Its IFREECAN Time!!! Still resisting? </p>
								<p><a class='btn btn-lg btn-primary' href='store.php' role='button'>Explore Products</a></p>

								";
							}else{

								echo "
                <h1>Its IFREECAN Time</h1>
    						<p>We sell our watches at reasonable prices. Still resisting? </p>
								<p><a class='btn btn-lg btn-primary' href='signup.php' role='button'>Sign up today</a></p>
								";
							}
						?>

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

<!-- About Us-->
	<section id="about" class="container services"style="padding-bottom:0px;">
		<div class="spliter"></div>
		<div class="divider"></div>
					<div class="row">
							<div class="col-lg-12 text-center">
								<h2 class="section-heading">About Us</h2>
							</div>
					</div>
					<br/>
						<div class="row text-center">
							<div class="service-box col-md-12">
								<p>Ifreecan Timepiece handcraft’s watches using an
ancient art and science.<br/> It’s widely inspired by
nature and Africa. <br/> IMore over the name Ifreecan
means if the Eye is free we can achieve greater
heights as Africans.</p>
								<br/>
								<a href="#"><button class="btn btn-primary btn-lg"type="button" name="button"><span class="glyphicon glyphicon-download"></span> Download Pdf</button></a>
							</div>
						</div>
						<div class="divider"></div>


	</section>

	<hr class="line_breaker"/>

	<!-- Services-->

		<section id="services" class="container services"style="padding-bottom:0px;">
				<div class="spliter"></div>
						<div class="row">
								<div class="col-lg-12 text-center">
									<h2 class="section-heading">SERVICES</h2>
								</div>
						</div>
						<br/>
							<div class="row text-center">
								<div class="service col-md-4">
									<span class="glyphicon-stack"  style="font-size:50px">
									<i class="glyphicon glyphicon-circle glyphicon-stack-2x"></i>
									<i class="glyphicon glyphicon-time glyphicon-stack glyphicon-stack-1x" style="color:white"></i>
									</span>
									<h4>Watches</h4>
									<div class="divider"></div>
									<p>yada ydyaydyyaydadyadyadaydyydydy<br/> a yydyay dayd adyadyadyay yad</p>
									<div class="divider"></div>
								</div>
								<div class="service col-md-4">
									<span class="glyphicon-stack"  style="font-size:50px">
									<i class="glyphicon glyphicon-circle glyphicon-stack-2x"></i>
									<i class="glyphicon glyphicon-road glyphicon-stack glyphicon-stack-1x" style="color:white"></i>
									</span>
									<h4>Free Shipping</h4>
									<div class="divider"></div>
									<p>yada ydyaydyyaydadyadyadaydyydydy a yydyay dayd adyadyadyay yad</p>
									<div class="divider"></div>
								</div>
								<div class="service col-md-4">
									<span class="glyphicon-stack"  style="font-size:50px">
									<i class="glyphicon glyphicon-circle glyphicon-stack-2x"></i>
									<i class="glyphicon glyphicon-phone glyphicon-stack glyphicon-stack-1x" style="color:white"></i>
									</span>
									<h4>Phone Covers</h4>
									<div class="divider"></div>
									<p>yada ydyaydyyaydadyadyadaydyydydy a yydyay dayd adyadyadyay yad</p>
									<div class="divider"></div>
								</div>
							</div>
		</section>
		<hr class="line_breaker"/>


	<section id="products" class="container">
		<div class="spliter"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">

					</div>
					<div >
						<div class="panel-heading text-center">
							<h2>OUR PRODUCTS</h2>
              <?php
  							if (isset($_SESSION["uid"])) {
  								echo "
                  <p class='header_paragraph'><i class='blue'>To place an order please Call us</i></p>

  								";
  							}else{

  								echo "
                  <p class='header_paragraph'><i class='blue'>Please ensure you log in to add to your wishlist</i></p>
  								";
  							}
  						?>
						</div>
						<div class="text-center panel-body">
							<div class="col-md-12 col-xs-12" id="product_msg">
							</div>
							<div id="get_display_product">
								<!--Here we get product jquery Ajax Request-->
							</div>
							<a href="store.php"><button class="btn btn-primary btn-lg"type="button" name="button"> Enter Store &nbsp; &nbsp;<span class="glyphicon glyphicon-arrow-right"></span></button></a>

						</div>
					</div>
				</div>
			</div>
	</section>
	<div class="spliter"></div>
	<footer class="footer-distributed">

		<div class="footer-left">

			<h3>Company<span>logo</span></h3>

			<p class="footer-links">
				<a href="index.php">Home</a>
				·
				<a href="#about">About Us</a>
				·
				<a href="#services">Services</a>
				·
				<a href="#products">Products</a>

				·
				<a href="store.php">Store</a>
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

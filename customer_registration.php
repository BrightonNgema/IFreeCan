<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:store.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>IFreeCan </title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/footer.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
				.divider{
					margin-bottom: 20px;
				}
			.form-control{
				box-shadow: 1px 3px 3px #ccc;
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
				<li><a href="#myCarousel" scroll><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="#about"><span class="glyphicon glyphicon-time"></span> About Us</a></li>
				<li><a href="#services"><span class="glyphicon glyphicon-user"></span> Services</a></li>
				<li><a href="#products"><span class="glyphicon glyphicon-phone"></span> Products</a></li>
				<!-- <li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li> -->
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span></a>
				</li>
				<?php if (isset($_SESSION["uid"])){
				echo"
				<li class=dropdown>
								<a href=# class=dropdown-toggle data-toggle=dropdown role=button aria-haspopup=true aria-expanded=false>"; ?><?php echo "Welcome,".$_SESSION['name']; ?> <?php echo "<span class=caret></span></a>
								<ul class=dropdown-menu>
									<li><a href=cart.php> Cart</a></li>
									<li role=separator class=divider></li>
									<li><a href=>Edit Profile</a></li>
									<li role=separator class=divider></li>
									<li><a href=logout.php>Logout</a></li>
									<li role=separator class=divider></li>
								</ul>
							</li>
				";
			}else{
					echo "
				<li><a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span>SignIn</a>
					<ul class='dropdown-menu'>
						<div style='width:300px;'>
							<div class='panel-body'>
								<div class='panel-heading'>Login</div>
								<div class='panel-heading'>
									<label for='email'>Email</label>
									<input type='email' class='form-control' id='email' required/>
									<label for='email'>Password</label>
									<input type='password' class='form-control' id='password' required/>
									<p><br/></p>
									<a href='#' style='color:black; list-style:none;'>Forgotten Password</a><input type='submit' class='btn btn-primary' style='float:right;' id='login' value='Login'>
								</div>
								<div class='panel-footer' id='e_msg'></div>
							</div>
						</div>
					</ul>
				</li>
				<li><a href='customer_registration.php'><span class='glyphicon glyphicon-user'></span>SignUp</a></li>

				";

			}
			?>
</ul>
		</div>
	</div>
</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading text-center"><h3>SIGNUP FORM</h3></div>
					<div class="divider"></div>
					<div class="panel-body">

					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" placeholder="John" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">

								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" placeholder="Doe" name="l_name"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" placeholder="johndoe@gmail.com" name="email"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">password</label>
								<input type="password" id="password" placeholder="*********" name="password"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter Password</label>
								<input type="password" id="repassword" placeholder="*********" name="repassword"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" placeholder="0712345678" name="mobile"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 1</label>
								<input type="text" id="address1" placeholder="21 June Street Tembisa" name="address1"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address Line 2</label>
								<input type="text" id="address2" placeholder="21 June Street Tembisa" name="address2"class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-lg-6">
								<a href="" style="float:right;">Already a Member?</a>
							</div>
							<div class="col-lg-6">
								<input style="float:left;" value="Sign Up" type="button" id="signup_button" name="signup_button"class="btn btn-primary">
							</div>
						</div>

					</div>
					</form>
				</div>
				<!-- <form class="" m>
				<div class="panel panel-primary">
					<div class="panel-heading text-center"><h3>SIGNIN FORM</h3></div>
					<div class="divider"></div>
					<div class="panel-body">
					<label for='email'>Email</label>
					<input type='email' class='form-control' id='email' required/>
					<label for='email'>Password</label>
					<input type='password' class='form-control' id='password' required/>
					<p><br/></p>
					<input type='submit' class='btn btn-primary' style='float:right;' id='login' value='Login'>
				</div>
			</div>
		</form> -->
			</div>

		</div>
	</div>
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

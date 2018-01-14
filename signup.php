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
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/forms.css"/>




				<script src="js/aclocation.js"></script>
				<script src="js/jquery2.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/main.js"></script>
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
				<li><a href="index.php" scroll><span class="glyphicon glyphicon-home"></span> Home</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="cart.php"><span class="glyphicon glyphicon-heart"></span> Wishlist <span class="badge">0</span></a>
				</li>
				<li><a href='signin.php'><span class='glyphicon glyphicon-user'></span>SignIn</a>
				</li>
				<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span>SignUp</a></li>

</ul>
		</div>
	</div>
</div>
<div id="map"></div>
	<p><br/></p>
	<p><br/></p>
	<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4">
							<br/><br/>
						<h1 class="text-center login-title">Welcome to IFREECAN</h1>
						<div class="account-wall">
								<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
										alt="">
									<form class="form-signin">
										<input type="text" id="f_name" placeholder="John" name="f_name" class="form-control">
										<input type="text" id="l_name" placeholder="Doe" name="l_name" class="form-control">
										<input type="text" id="email" placeholder="johndoe@gmail.com" name="email" class="form-control">
										<br/>
										<input type="password" id="password" placeholder="*********" name="password" class="form-control">
										<input type="password" id="repassword" placeholder="Repeat password" name="repassword" class="form-control">
										<br/>
										<input type="text" id="mobile" placeholder="0712345678" name="mobile"class="form-control">
										<input type="text" id="address1" placeholder="Physical Address" name="address1"class="form-control ad">
										<input type="text" id="address2" placeholder="Postal Address" name="address2"class="form-control ad">


												<div id="signup_msg"></div>
												<br/>
										<button class="btn btn-lg btn-primary btn-block" type="submit" id="signup_button">
												Sign Up</button>
												<a href="signin.php" class="text-center new-account" style="text-decoration:none">

													Already a member?
										</a>
										</label>
										<!-- <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span> -->
									 </</form>
						</div>
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
			<p class="footer-company-name">Developed & Designed by <a href="http://brightonngema.co.za" target="_blank">Brighton Ngema</a>&copy; 2015</p>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDllGgwsZEywCilrFEDgM_c8SlwvoYlc1c&libraries=places&callback=initMap"
		async defer></script>
</html>

<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:store.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/jquery2.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/forms.css"/>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


    </style>
  </head>
  <body>
		<!-- Navigation bar -->
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
	<p><br/></p>
	<p><br/></p>
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
							<br/><br/>
            <h1 class="text-center login-title">Welcome Back</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <div class="form-signin">
                <input type="text" class="form-control" id="email" placeholder="Email" required autofocus>
                <input type="password" class="form-control" id="password" placeholder="Password" required>

                    <div id="login_results"></div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="login">
                    Sign in</button>
										<a href="signup.php" class="text-center new-account" style="text-decoration:none">
											Need an account? 
								</a>
              </div>
            </div>
        </div>


    </div>
    <div class="text-center panel-body">
      <div class="col-md-12 col-xs-12" id="product_msg">
      </div>
    </div>
</div>
  </body>

</html>

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
    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
							<br/><br/>
            <h1 class="text-center login-title">Welcome to IFREECAN</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <div class="form-signin">
                <input type="text" class="form-control" id="email" placeholder="Email" required autofocus>
                <input type="password" class="form-control" id="password" placeholder="Password" required>

                    <div id="login_results"></div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="login">
                    Sign in</button>
                </label>
                <!-- <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span> -->
              </div>
            </div>
            <a href="signup.php" class="text-center new-account">Create an account </a>
        </div>


    </div>
    <div class="text-center panel-body">
      <div class="col-md-12 col-xs-12" id="product_msg">
      </div>
    </div>
</div>
  </body>

</html>

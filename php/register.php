<?php
include "db.php";

$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
$billing_address = $_POST["billing_address"];
$shipping_address = $_POST["shipping_address"];


$name = "/^[A-Z][a-zA-Z]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-])*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if (empty($f_name) || empty($l_name) || empty($email) || empty($password) ||
    empty($repassword) || empty($mobile) || empty($billing_address)
    || empty($shipping_address)) {

  echo "
      <div class='alert alert-warning'>

          <b> Please fill in all the fields</b>
      </div>
    ";
    exit();
}else{
  if(!preg_match($name, $f_name)){
      echo"
      <div class='alert alert-warning'>

          <b><i>$f_name</i></b> is not a valid entry
      </div>
      ";
      exit();
  }

  if(!preg_match($name, $l_name)){
    echo"
    <div class='alert alert-warning'>

        <b><i>$l_name</i></b> is not a valid entry
    </div>
    ";
      exit();
  }

  if(!preg_match($emailValidation, $email)){
    echo"
    <div class='alert alert-danger'>

        <b><i>$email</i></b> is not a valid entry
    </div>
    ";
      exit();
  }
  if(strlen($password) < 9){
    echo"
    <div class='alert alert-danger'>

        <b><i>$password</i></b> is too weak
    </div>
    ";
    exit();
  }
  if(strlen($repassword) < 9){
    echo"
    <div class='alert alert-danger'>

        <b><i>$password</i></b> is too weak
    </div>
    ";
    exit();
  }
  if($password != $repassword){
    echo"
    <div class='alert alert-warning'>

        <b><i>Passowrd doesn't Match</i></b>
    </div>
    ";
      exit();
  }
  if(!preg_match($number, $mobile)){
    echo"
    <div class='alert alert-danger'>

      Mobile number <b><i>$mobile</i></b> is not valid
    </div>
    ";

      exit();
  }if(!(strlen($mobile) ==10)){
    echo"
    <div class='alert alert-danger'>

        <b><i>Mobile number must be 10 digits long</i></b>
    </div>
    ";
    exit();
  }
    //exsiting email
    $sql = "SELECT user_id FROM user_info WHERE email='$email' LIMIT 1";
    $check_query = mysqli_query($con, $sql);
    $count_email = mysqli_num_rows($check_query);

    if($count_email > 0){
      echo"
      <div class='alert alert-warning'>

          <b><i>Email Already Registered</i></b>
      </div>
      ";
      exit();
    }else{
      $password = md5($password);
      $sql = "INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`)
      VALUES (NULL, '$f_name', '$l_name', '$email', '$password', '$mobile', '$billing_address', '$shipping_address');";

      $run_query = mysqli_query($con, $sql);
      if($run_query){
        echo"
        <div class='alert alert-success'>

            <b><i>You have successfully Registered</i></b>
        </div>

        ";
      }
    }
}


 ?>

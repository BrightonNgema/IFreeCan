<?php
include "db.php";
session_start();
//Login script

if(isset($_POST["userLogin"])){
  $email = mysqli_real_escape_string($con, $_POST["userEmail"]);
  $password = $_POST["userPassword"];

  $sql = "SELECT * FROM user_info WHERE email='$email' AND password='$password'";
  $run_query = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run_query);

  if($count == 1){
    $row = mysqli_fetch_array($run_query);

      $_SESSION["uid"] = $row["user_id"];
      $_SESSION["name"] = $row["first_name"];

      // echo"
      // <br/>
      //
      // <div class='alert alert-success'>
      //
      //     <b  style='font-size:12px;'>Welcome ".$_SESSION['name']. "</b>
      // </div>
      //
      // ";
      echo $_SESSION['name'] ;
  }
}
 ?>

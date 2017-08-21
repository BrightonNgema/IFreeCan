<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "ifreecan";

    //Create connection
    $con = mysqli_connect($servername, $username, $password, $db);

    //Check if connection
    if (!$con) {
      die("connection failed:" . mysqli_connect_error());
    }

?>

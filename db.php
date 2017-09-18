<?php

$servername = "localhost";
$username = "id2951553_ifreecan";
$password = "Bright0n123";
$db = "id2951553_ifreecan";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

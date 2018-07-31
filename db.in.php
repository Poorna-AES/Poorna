<?php
$dbserver="localhost";
$dbuser="alumnies";
$dbpwd="alumnies";
$dbname="alumnies";
$conn=mysqli_connect($dbserver,$dbuser,$dbpwd,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 ?>

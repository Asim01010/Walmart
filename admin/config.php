<?php
$hostname = "localhost";
$root = "root";
$password = "";
$database = "walmart";

$connection = mysqli_connect($hostname,$root,$password,$database) or die("connection fail" . mysqli_connect_error());
?>
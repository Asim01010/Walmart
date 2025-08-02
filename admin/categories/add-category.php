<?php
include '../config.php';
$name = mysqli_real_escape_string($connection,$_POST["name"]);
$filename = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

// store the image to the local storage


 

$insert = "INSERT INTO categories (name,image) VALUES ('{$name}','{$image}')";

$result = mysqli_query($connection,$insert);
?>
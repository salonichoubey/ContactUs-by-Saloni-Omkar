<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '', 'contact_us');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO `form` (`Id`, `name`, `email`, `number`, `message`) VALUES ('0', '$name', '$email', '$number', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	header('Location: contactUs.html');
}

?>
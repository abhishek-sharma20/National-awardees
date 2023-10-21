<?php
include("connection.php");

if (isset($_POST['signup'])) {
	$username = $_POST['username'];
	$gender = $_POST['ab'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$password = $_POST['password'];
	$sql = "insert into first (username,gender,dob,email,number,password) values ('$username','$gender','$dob','$email','$number','$password')";
	$result = mysqli_query($con, $sql);
	if ($result) {
		echo "Registration Successfully - click here to login".header('Location: login.html');
		;

	} else {
		echo'failed';
	}
	
}
?>
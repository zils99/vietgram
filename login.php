<?php 

include_once('connect.php');

$username = $_POST["username"];
$password = $_POST["password"];
$result = mysqli_query($conn, "SELECT * FROM user WHERE username= '$username'");


if (mysqli_num_rows($result) >0) {


	$row = mysqli_fetch_assoc($result);
	if ($password == $row["PASSWORD"]) {

        
		session_start();
		$_SESSION['username'] = $username; 

		header("location: feed.php");	
	} 
	
} else {
	header("location: index.php");
}

?>
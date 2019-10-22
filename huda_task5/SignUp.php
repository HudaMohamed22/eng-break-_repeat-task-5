<?php
    session_start();
    $FullName=$_GET["FullName"];
	$email=$_GET["email"];
	$age=$_GET["age"];
	$password=$_GET["password"];

	$link = mysqli_connect("localhost", "root", "hanaa12300", "signup");
	 
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	// Attempt insert query execution
	$sql = "INSERT INTO user (Name,Email,Age,Password) VALUES ('$FullName','$email','$age','$password')";
	if(mysqli_query($link, $sql)){
		 header("Location: SecPage.html");
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	// header("location:h.php");
	// Close connection
	 $_SESSION['email'] = $email;
	 $_SESSION['password'] = $password;
	mysqli_close($link);
?>
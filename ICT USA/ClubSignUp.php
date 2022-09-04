<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "clublog";

	$conn = mysqli_connect($server, $user, $pass, $database);

	if (!$conn) {
    	die("<script>alert('Connection Failed.')</script>");
	}
    
    error_reporting(0);

	session_start();

	if (isset($_SESSION['username'])) {
    	header("Location: login Form.html");
	}

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

    	if ($password == $cpassword) {
		$sql = "SELECT * FROM registration WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO registration (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				header("Location: welcome.php");
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	    } else {
			echo "<script>alert('Password Not Matched.')</script>";
		}
	}

?>
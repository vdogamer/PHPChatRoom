<?php
include 'database.php';

// Check if form was submitted

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($con, $_POST['user']);   // the mysqli function sanitizes the input.
	$message = mysqli_real_escape_string($con, $_POST['message']);
	
	// Set timezone 
	date_default_timezone_set('America/New_York');
	$time = date('h:i:s a', time());
	
	// Validate input
	if(!isset($user) || $user == '' || !isset($message) || $message == '') {
		 $error = "Please fill in your name and a message";
		 header("Location: index.php?error=".urlencode($error));
		 exit();
	} else {
		 $query = "INSERT INTO chats(user, message, time)
					VALUES ('$user', '$message', '$time')";	

		 if (!mysqli_query($con, $query)) {
			 die('Error!!!'.mysqli_error($con));
		 } else {
			 header("Location: index.php");
			 exit();
		 }
	}
}
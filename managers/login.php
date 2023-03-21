<?php
	if(ISSET ($_POST['login'])){
		$usernames = $_POST['username'];
		$password = $_POST['password'];
		$query = $conn->query("SELECT * FROM `managers` WHERE `username` = '$usernames' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			session_start();
			$_SESSION['managers_id'] = $fetch['managers_id'];
			header('location:index.php');
		}else{
			echo "<center><labe style = 'color:red;'>Invalid username or password</label></center>";
		}
	}
?>
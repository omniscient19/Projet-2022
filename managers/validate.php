<?php 
	session_start();
	if(!ISSET($_SESSION['managers_id'])){
		header("location:index.php");
	}
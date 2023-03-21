<?php
	require 'connect.php';
	$query = $conn->query("SELECT * FROM `managers` WHERE `managers_id` = '$_SESSION[managers_id]'") or die(mysqli_error());
	$fetch = $query->fetch_array();
	$name = $fetch['names'];
?>
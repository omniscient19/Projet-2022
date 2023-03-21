<?php
	session_start();
	session_unset(managers_id);
	header("location:index.php");
?>


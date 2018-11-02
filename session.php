<?php 
	session_start();
	$username=$_SESSION['uname'];
	if(!(isset($username)))
	{
		header('location:index.php');
	}
?>
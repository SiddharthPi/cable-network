<?php 
include('session.php'); 
include('con_db.php');
	$eqid=$_GET['id'];
	mysql_query("delete from `equipment` where `eq_id`='$eqid'");

		echo '<script>alert("Deleted Successfully..."); window.location="viewequip.php"; </script>';
?>
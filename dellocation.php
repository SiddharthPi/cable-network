<?php include('con_db.php');
	$lid=$_GET['loc'];
	$sql=mysql_query("delete from location where loc_id='$lid'") or die(mysql_error());
	if($sql){
		echo '<script>alert("Deleted successfully"); window.location="viewlocation.php"; </script>';
	}
	else{
		echo '<script>alert("Failed..Try again"); window.location="viewlocation.php"; </script>';
	}
?>
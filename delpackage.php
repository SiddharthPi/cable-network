
<?php include('session.php'); ?>
<?php include('con_db.php');
	$pid=$_GET['pack'];
	$sql=mysql_query("delete from package where p_id='$pid'") or die(mysql_error());
	if($sql){
		echo '<script>alert("Deleted successfully"); window.location="viewpackage.php"; </script>';
	}
	else{
		echo '<script>alert("Failed..Try again"); window.location="viewpackage.php"; </script>';
	}
?>
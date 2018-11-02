<?php include('session.php'); ?>
<?php include('con_db.php');
	$opid=$_GET['op'];
	$sql=mysql_query("delete from operator where op_id='$opid'") or die(mysql_error());
	if($sql){
		echo '<script>alert("Deleted successfully"); window.location="viewoperator.php"; </script>';
	}
	else{
		echo '<script>alert("Failed..Try again"); window.location="viewoperator.php"; </script>';
	}
?>
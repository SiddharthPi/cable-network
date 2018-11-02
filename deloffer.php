<?php include('session.php'); ?>
<?php include('con_db.php');
	$ofid=$_GET['off'];
	$sql=mysql_query("delete from offers where offer_id='$ofid'") or die(mysql_error());
	if($sql){
		echo '<script>alert("Deleted successfully"); window.location="offers.php"; </script>';
	}
	else{
		echo '<script>alert("Failed..Try again"); window.location="offers.php"; </script>';
	}
?>
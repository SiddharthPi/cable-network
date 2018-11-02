<?php include('session.php'); ?>
<?php include('con_db.php');
	$chid=$_GET['chn'];
	$sql=mysql_query("delete from channel where ch_id='$chid'") or die(mysql_error());
	if($sql){
		echo '<script>alert("Deleted successfully"); window.location="viewchannel.php"; </script>';
	}
	else{
		echo '<script>alert("Failed..Try again"); window.location="viewchannel.php"; </script>';
	}
?>
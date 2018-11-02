<?php include('con_db.php');
	$pid=$_GET['q'];
	$sql=mysql_query("SELECT * FROM package where p_id='$pid'");
	$row=mysql_fetch_array($sql);
	echo $row['amount'];

 ?>
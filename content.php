<?php include('con_db.php');
	$user_name=$_GET['q'];
	$sql=mysql_query("SELECT * FROM receipt where user_name='$user_name'");
	$row=mysql_fetch_array($sql);
	$locid=$row['loc_id'];
	$amt=$row['amount'];
	$p_id=$row['p_id'];
	$sq=mysql_query("SELECT * FROM location where loc_id='$locid'");
	$red=mysql_fetch_array($sq);
	$sq1=mysql_query("SELECT * FROM package where p_id='$p_id'");
	$red1=mysql_fetch_array($sq1);

	echo $row['contact'].'|'.$red['loc_name'].'|'.$locid.'|'.$red1['p_title'].'|'.$amt.'|'.$p_id;

 ?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('session.php');
$exp=$_GET['expdate'];
$uid=$_GET['uid'];
include('con_db.php');
$qr=mysql_query("INSERT INTO `notification`(`nid`, `uid`, `notification`, `date`, `status`) VALUES ('','$uid','Your subscription will end on ".$exp." Please renew soon. Thank you',now(),'sent')");
if($qr)
{
	echo '<script>alert("Notified"); window.location="report.php";</script>';
}

 ?>

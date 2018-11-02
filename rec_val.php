<?php include('con_db.php');
$rid=$_GET['rid'];
					if(isset($_POST['save']))
					{
						$rec_no=$_POST['recno'];
						$month=date('m');
						$amount=$_POST['amt'];

						$qry=mysql_query("INSERT INTO `receipt_pay`(`rpid`, `rid`, `r_no`, `month`, `amount`, `date`, `status`) VALUES ('','$rid','$rec_no','$month','$amount',now(),'paid')") or die(mysql_error());
						if($qry){
							echo '<script>alert("Saved successfully"); window.location="adminhome.php"; </script>';
						}
						else{
							echo '<script>alert("Failed to save"); window.location="genrate_rec.php"; </script>';
						}
					}
				 ?>
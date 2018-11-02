<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>Admin Dashboard</title>
	<meta name="keywords" content="Exclusive Business a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<link rel="stylesheet" href="css/chocolat.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	
	<!-- scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/easyResponsiveTabs.js"></script>
	<script src="js/numscroller-1.0.js"></script>
	<script type="text/javascript" src="js/jquery.chocolat.js"></script>
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
	<style>
		.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 130px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
	</style>
</head>
<body>
<!-- Navigation -->
	<?php include('adminmenulist.php'); ?>
<!-- //Navigation -->
<!-- Banner -->
	
<!-- //Banner -->
<!-- WELCOME SECTION -->
<!-- //WELCOME SECTION -->

<!-- Services columns -->
	<div class="container w3ls-service" id="service">
		<div class="row-agile">
			
			<div class="row">
						<div class="col-md-12">
							<form name="" method="post" action="">
								<div class="col-md-4">
								  <div class="row">
									<div class="form-group col-md-6">
										<label>Package: </label>
										<select name="pid" class="form-control">
									  		<option value="">Search Package wise</option>
									  		<?php include('con_db.php');
												$qr=mysql_query("select distinct p_title,package.`p_id` from package,subscription where subscription.p_id=package.p_id group by package.p_id") or die(mysql_error());
												while($rw=mysql_fetch_array($qr)) {
											 ?>
											 <option value="<?php echo $rw['p_id']; ?>"><?php echo $rw['p_title']; ?></option>
											 <?php } ?>
									  	</select>
									  </div>
									  <div class="form-group col-md-6">
									  <label>Month: </label>
									  	<select class="form-control input-sm" name="month">
											<option value ="01"> January </option>
											<option value ="02"> February </option>
											<option value ="03"> March </option>
											<option value ="04"> April </option>
											<option value ="05"> May </option>
											<option value ="06"> June </option>
											<option value ="07"> July </option>
											<option value ="08"> August </option>
											<option value ="09"> September </option>
											<option value ="10"> October </option>
											<option value ="11"> November </option>
											<option value ="12"> December </option>
											
										</select>
									   </div>
									   </div>
										<input type="submit" name="search_by_pack" class="btn btn-primary btn-block" value="Submit" >
									</div>
										
								
							</form>
									
									
							<form name="" method="post" action="">
								<div class="col-md-4">
									<label> Search By Equipment Purchase Date: </label>
										<input type="date" class="form-control input-sm" name="date" >
										<input type="submit" name="search_by_date" class="btn btn-primary btn-block" value="Submit" >
								</div>
										
								
							</form>
										
								<form name="" method="post" action="">
								<div class="col-md-4">
									<label> Search  By Receipt: </label>
										<select name="rec" class="form-control">
									  		<option value="">Search receipt wise</option>
									  		<?php include('con_db.php');
												$qr=mysql_query("select * from receipt,package where package.p_id=receipt.p_id") or die(mysql_error());
												while($rw=mysql_fetch_array($qr)) {
											 ?>
											 <option value="<?php echo $rw['rid']; ?>"><?php echo $rw['user_name']; ?>--<?php echo $rw['p_title']; ?></option>
											 <?php } ?>
									  	</select>
										<input type="submit" name="search_by_receipt" class="btn btn-primary btn-block" value="Submit" >
								</div>
							</form>
										
										
							
						</div>
						</div>
						
				<?php
					if(isset($_POST['search_by_date']))
					{
						$date = $_POST['date'];
				?>
				<table class="table table-hover table-bordered table-striped" id="example">
				<thead>
					<tr>
						<th>SL no</th>
						<th>Equipment</th>
						<th>Qty</th>
						
						<th>Price</th>
						<th>Total</th>
						
						
					</tr>
				</thead>
				
				<tbody>
					<?php
						include "con_db.php";
						$query = mysql_query("SELECT * FROM equipment where equipment.`p_date` = '$date' order by p_date desc");
						$i=1;
						while($row = mysql_fetch_array($query)){
					?>

					<tr>
						<td> <?php echo $i++; ?> </td>
						<td> <?php echo $row['eq_type']; ?> </td>
						<td> <?php echo $row['qty']; ?> </td>
					
						<td> <?php echo $row['uprice']; ?> </td>
						<td> <?php echo $row['total']; ?> </td>
						
						
						
					</tr>
					
					<?php } ?>
				<tbody>	
			</table>
			
			
			<?php 
					}
					else if(isset($_POST['search_by_pack']))
					{
						$pid = $_POST['pid'];
						$month=$_POST['month'];
				?>
				<table class="table table-hover table-bordered table-striped" id="example">
				<thead>
					<tr>
						<th>SL no</th>
						<th>Customer Name</th>
						<th>Contact</th>
						
						<th>Subscribe Date</th>
						<th>Expiry Date</th>
						<th>Action</th>
						
						
					</tr>
				</thead>
				
				<tbody>
					<?php
						include "con_db.php";
						$query = mysql_query("SELECT distinct package.`p_title`,package.`p_id`,ve_date,s_date,first_name,contact,subscription.`user_id`,ve_date FROM `package`,`subscription`,`user` WHERE package.p_id=subscription.p_id AND subscription.`p_id`='$pid' and user.user_id=subscription.user_id and month(s_date)= '$month' order by subscription.`ve_date` asc");
						$i=1;
						while($row = mysql_fetch_array($query)){
					?>

					<tr>
						<td> <?php echo $i++; ?> </td>
						<td> <?php echo $row['first_name']; ?> </td>
						<td> <?php echo $row['contact']; ?> </td>
					
						<td> <?php echo $row['s_date']; ?> </td>
						<td> <?php echo $row['ve_date']; ?> </td>
						<td><a href="notify.php?uid=<?php echo $row['user_id']; ?>&&expdate=<?php echo $row['ve_date']; ?>" class="btn btn-warning">Notify</a></td>
						
					</tr>
					
				
					<?php } ?>
				<tbody>	
			</table>

			<!-- /.row -->
			<?php 
					} if(isset($_POST['search_by_receipt']))
					{
						$rec= $_POST['rec'];
				?>
				<table class="table table-hover table-bordered table-striped" id="example">
				<thead>
					<tr>
						<th>SL no</th>
						<th>Customer Name</th>
						<th>Contact</th>
						
						<th>Amount</th>
						<th>Package</th>
						
						
					</tr>
				</thead>
				
				<tbody>
					<?php
						include "con_db.php";
						$query = mysql_query("SELECT * FROM `receipt`,`package` WHERE package.p_id=receipt.p_id AND rid = '$rec'");
						$i=1;
						while($row = mysql_fetch_array($query)){
					?>

					<tr>
						<td> <?php echo $i++; ?> </td>
						<td> <?php echo $row['user_name']; ?> </td>
						<td> <?php echo $row['contact']; ?> </td>
					
						<td> <?php echo $row['amount']; ?> </td>
						<td> <?php echo $row['p_title']; ?> </td>
						
						
						
					</tr>
					<?php } ?>
				<tbody>	
			</table>
				<?php } ?>	
               <!-- /.row -->

            </div>
		</div>
	</div>
	<!-- //Services columns -->
	
	<!-- Gallery chocolat -->
		<!-- //Gallery -->
	
	<!-- counter -->

	<!-- //counter -->
	
	<!-- Our Team -->
	
	<!-- //Our Team -->
	<!-- Service Grids -->
	
	<!-- //Service Grids -->
	<!-- map section -->
	
	<!-- //map section -->
	<!-- cotact section -->
	
	<!-- //footer -->
	<!-- Script chocolat -->
	<script>
		$(document).ready(function(){
			$('.chocolat-parent').Chocolat();
		});
	</script>
	<!-- //Script chocolat -->
	<!-- script responsive tabs -->
	  <script type="text/javascript">
    $(document).ready(function () {

        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
    
                $name.text($tab.text());
    
                $info.show();
            }
        });

 
    });
</script>
<script>
	function showTotal() {
		// body...
		var qty=parseFloat(document.getElementById('qty').value);
		var price=parseFloat(document.getElementById('price').value);
		var tot=qty* price;
		document.getElementById('total').value=tot;
	}
</script>
<script>
	function qtyValid(a)
	{
		if(a<=0)
		{
			alert('Please enter number greater than zero');
		}
		else if(a>=1)
		{
			return true;
		}
	}
</script>
	<!-- //script responsive tabs -->
	<!-- scrolling script -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 
	<script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
<!-- //scrolling script -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


</body>
</html>

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
		<div class="container">
			  <ul class="list-inline">
			    <li><a href="addpackage.php" class="btn btn-info">BACK</a></li>
			  </ul>
			</div>

			
			
			<div class="col-md-5 col-sm-5 col-xs-6 part1" style="background-color: #B7E4EB; border: 2px solid #0FA4BB; padding: 25px; border-radius: 8px; ">
				<h3 class="center">Add Offers</h3>
				<form action="" method="post">
				<div class="form-group col-md-6">
				  	<label>Title</label>
					<input type="text" name="title" pattern="^[A-Za-z\s,.+-\/]+" title="Alphanumeric character only" placeholder="Enter title" class="form-control" >
				  </div>

				   <div class="form-group col-md-6">
					  	<label>Select package</label>
					  	<select name="type" class="form-control">
					  		<?php include('con_db.php');
								$qr=mysql_query("select * from package") or die(mysql_error());
								while($rw=mysql_fetch_array($qr)) {
							 ?>
							 <option value="<?php echo $rw['p_id']; ?>"><?php echo $rw['p_title']; ?></option>
							 <?php } ?>
					  	</select>
					  </div>
				  <div class="form-group col-md-6">
				  	<label>Offer Amount</label>
					<input type="text" name="amt" pattern="^[0-9]{0,5}$" title="numeric only"  class="form-control" placeholder="Enter amount" required>
				  </div>

					<div class="form-group col-md-6">
				  	<label>Start date</label>
					<input type="date" name="sdate" min="<?php echo date('Y-m-d');?>" id="sdate" class="form-control"  required>
				  </div>

				  <div class="form-group col-md-6">
				  	<label>End Date</label>
					<input type="date" name="edate" min="<?php echo date('Y-m-d');?>" id="edate" onblur="validdate(this.value)"  class="form-control" required>
				  </div>

				  
				  <input type="submit" name="Add" class="btn btn-info col-md-6"  style="margin-top: 20px; margin-left: 100px;"value="Add"><br>
				</form>

				<?php include('con_db.php');
					if(isset($_POST['Add']))
					{
						$Title=$_POST['title'];
						$Pid=$_POST['type'];
						$OAmt=$_POST['amt'];
						$Sdate=$_POST['sdate'];
						$Edate=$_POST['edate'];

						
						$qry=mysql_query("INSERT INTO `offers`(`offer_id`, `title`, `p_id`, `offer_amt`, `offer_sdate`, `offer_edate`, `status`) VALUES ('','$Title','$Pid','$OAmt','$Sdate','$Edate','on')")or die(mysql_error());
						if($qry){
							echo '<script>alert("Inserted successfully");  </script>';
						}
						else{
							echo '<script>alert("Failed to insert"); </script>';
						}
					}
				 ?>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 part1 part3" style="background-color: #B7E4EB; border: 2px solid #0FA4BB; padding: 25px; border-radius: 8px; ">
				<h3 class="center">View Offers</h3> <br>
				<table class="table table-bordered table-striped table-hover" style="background-color: #fff;">
					<tr>
						<th> SI.No </th>
						<th>Offer Title</th>
						<th>Package</th>
						<th>Amount</th>
						<th>SDate</th>
						<th>EDate</th>
						<th> Action </th>

					</tr>
					<?php include('con_db.php');
						$a=1;
						$qr=mysql_query("select * from offers,package where package.p_id=offers.p_id") or die(mysql_error());
						while($fetch=mysql_fetch_array($qr))
						{
							?>
							<tr>
								<td><?php echo $a++; ?></td>
								<td><?php echo $fetch['title']; ?></td>
								<td><?php echo $fetch['p_title']; ?></td>
					        	<td><?php echo $fetch['offer_amt']; ?></td>
					        	<td><?php echo $fetch['offer_sdate']; ?></td>
								<td><?php echo $fetch['offer_edate'];?> </td>
								<td> <a href="deloffer.php?off=<?php echo $fetch['offer_id']; ?>" onclick="return deleteit();" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
							</tr>
					<?php		
						}
					 ?>
				</table>
				<script type="text/javascript">
		function deleteit()
		{
			return confirm("Really want to Delete....?");
		}
	</script>

			</div>
					</div>

			</div>
		</div>
	</div>
	
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
		function validdate(edate)
		{
			var sdate= document.getElementById('sdate').value;
			if(edate <= sdate)
			{
				alert('Your end date is not valid');
				document.getElementById('edate').value= '';
			}
			else
			{
				return true;
			}
		}
	</script>
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

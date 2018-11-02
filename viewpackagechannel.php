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
			    <li><a href="addpackage.php" class="btn btn-info">Add</a></li>
			  </ul>
			</div>
			  </ul>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-8 col-sm-8 col-xs-8 part1" style="background-color: #B7E4EB; border: 2px solid #0FA4BB; padding: 25px; border-radius: 8px; ">
				<h3 class="center">Package Channel</h3>
				<form action="" method="post">
				 <div class="row">
				 	<div class="form-group col-md-2">
				 		
				 	</div> 

					  <div class="form-group col-md-4">
					  	<label></label>
						<select name="pack" class="form-control">
							<option>Select channel</option>
							<?php include('con_db.php');
								$qr=mysql_query("select * from package") or die(mysql_error());
								while($rw=mysql_fetch_array($qr)) {
							 ?>
							 <option value="<?php echo $rw['p_id']; ?>"><?php echo $rw['p_title']; ?></option>
							 <?php } ?>
						</select>
					  </div>

					<input type="submit" name="Search" value="Search" class="btn btn-info col-md-3" style="margin-top: 40px; margin-left: 10px;">
				</div>
				</form>
				<?php include('con_db.php');
					if(isset($_POST['Search']))
					{
						$pid=$_POST['pack'];
						$sq1=mysql_query("select * from package where p_id='$pid'") or die(mysql_error());
						$fet=mysql_fetch_array($sq1); 
						$pamt=$fet['amount'];

						$sql1=mysql_query("select * from channel where p_id='$pid'") or die(mysql_error());
						$numrows=mysql_num_rows($sql1);

						$sql2=mysql_query("select * from channel where p_id='$pid' and type='sd'") or die(mysql_error());
						$numsd=mysql_num_rows($sql2);

						$sql3=mysql_query("select * from channel where p_id='$pid' and type='hd'") or die(mysql_error());
						$numhd=mysql_num_rows($sql3);
						if($numrows>0) 
						{
							?>
							<table class="table table-bordered table-striped table-hover" style="background-color: #fff;"">
								<tr>
									<th> SI.No </th>
									<th> Channel Name</th>
									<th>Channel No</th>
									<th> Type </th>
									<th> Action </th>


								</tr>
								<?php include('con_db.php');
									$a=1;
									while($fetch=mysql_fetch_array($sql1))
									{
										?>
										<tr>
											<td><?php echo $a++; ?></td>
											<td><?php echo $fetch['c_name']; ?></td>
								        	<td><?php echo $fetch['c_no']; ?></td>
								        	<td><?php echo $fetch['type']; ?></td>
											<td><a href="delchannel.php?chn=<?php echo $fetch['ch_id']; ?>" class="btn btn-danger"><i class="fa fa-window-close"></i></a></td>
										</tr>
								<?php		
									}
								 ?>
								 <tr>
								 	<th colspan="4" style="text-align: right; color: orange; ">Package Amount: </th>
								 	<td colspan="5"><?php echo $pamt?></td>
								 </tr>
								  <tr>
								 	<th colspan="4" style="text-align: right; color: orange;">Total HD Channels: </th>
								 	<td colspan="5"><?php echo $numhd?></td>
								 </tr>
								  <tr>
								 	<th colspan="4" style="text-align: right; color: orange;">Total SD Channels: </th>
								 	<td colspan="5"><?php echo $numsd?></td>
								 </tr>
								  <tr>
								 	<th colspan="4" style="text-align: right; color: orange;">Total No. of Channels: </th>
								 	<td colspan="5"><?php echo $numrows;?></td>
								 </tr>
							</table>
				<?php 
						} else { ?>
						<div style="text-align: center; color: red; font-size: 25px; ">Data Not Found</div>
				<?php 
					}
					}
				 ?>

			
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

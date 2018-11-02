<?php include "session.php"; ?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Supermarket| Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.php"> <h1>Bazaar Kart</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div>   end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<!--<div class="profile_details_left"><!--notifications of menu start -->
							
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p>Malorum</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
	<h2><center>REPORTS</center></h2>
	               <div class="row">
                    <div class="well">
						
					<div class="row">
						<div class="col-md-12">
							<form name="" method="post" action="">
								<div class="col-md-4">
									<div class="form-group">
										<label> Search By Date: </label>
										<input type="date" class="form-control input-sm" name="date" >
										<input type="submit" name="search_by_date" class="btn btn-primary btn-block" value="Submit" >
									</div>
								</div>
										
								
							</form>
									
									
							<form name="" method="post" action="">
								<div class="col-md-4">
									<label> Search By Month: </label>
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
										<input type="submit" name="search_by_month" class="btn btn-primary btn-block" value="Submit" >
								</div>
										
								
							</form>
										
								<form name="" method="post" action="">
								<div class="col-md-4">
									<label> Search  By Year: </label>
										<select class="form-control input-sm" name="year">
											<option value ="2010"> 2010 </option>
											<option value ="2011"> 2011 </option>
											<option value ="2012"> 2012 </option>
											<option value ="2013"> 2013 </option>
											<option value ="2014"> 2014 </option>
											<option value ="2015"> 2015 </option>
											<option value ="2016"> 2016 </option>
											<option value ="2017"> 2017 </option>
											<option value ="2018"> 2018 </option>
											<option value ="2019"> 2019 </option>
											<option value ="2020"> 2020 </option>
											<option value ="2021"> 2021 </option>
											<option value ="2022"> 2022 </option>
											<option value ="2023"> 2023 </option>
											<option value ="2024"> 2024 </option>
											<option value ="2025"> 2025 </option>
											
										</select>
										<input type="submit" name="search_by_year" class="btn btn-primary btn-block" value="Submit" >
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
						<th>Customer Name</th>
						<th>Product Name</th>
						
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th>Status</th>
						
						
					</tr>
				</thead>
				
				<tbody>
					<?php
						include "dbcon.php";
						$query = mysql_query("SELECT * FROM `order_details`,`product` WHERE order_details.pid=product.pid AND order_details.branchname='$b_name' AND order_details.odate = '$date'");
						$i=1;
						while($row = mysql_fetch_array($query)){
					?>

					<tr>
						<td> <?php echo $i++; ?> </td>
						<td> <?php echo $row['cname']; ?> </td>
						<td> <?php echo $row['product']; ?> </td>
					
						<td> <?php echo $row['price']; ?> </td>
						<td> <?php echo $row['quantity']; ?> </td>
						<td> <?php echo $row['total']; ?> </td>
						<td> <?php echo $row['delivery_status']; ?> </td>
						<td>
							<div class="btn-group">
							<?php 
								if($row['delivery_status'] == "Delivered"){
									echo "Delivered";
									
								}
								else if($row['delivery_status'] == ""){
									echo "Not Delivered";
								}
								
								
							?>
							</div>
						</td>
						
						
					</tr>
					
					<?php } ?>
				<tbody>	
			</table>
			
			<div class="well">
			<?php 
			$rr = mysql_query("SELECT SUM(total) FROM `order_details` WHERE branchname='$b_name' AND odate = '$date'");
			$sum = mysql_fetch_array($rr);
			$count = mysql_num_rows($query); ?>
			
				<p> Total Sales : <?php echo $count; ?></p>
				<p>Sum of all total Sales: <?php echo $sum[0]; ?></p>
			</div>
			<!-- /.row -->
			<?php 
					}
					else if(isset($_POST['search_by_month']))
					{
						$month = $_POST['month'];
				?>
				<table class="table table-hover table-bordered table-striped" id="example">
				<thead>
					<tr>
						<th>SL no</th>
						<th>Customer Name</th>
						<th>Product Name</th>
						
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th>Status</th>
						
						
					</tr>
				</thead>
				
				<tbody>
					<?php
						include "dbcon.php";
						$query = mysql_query("SELECT * FROM `order_details`,`product` WHERE order_details.pid=product.pid AND order_details.branchname='$b_name' AND month(odate) = '$month'");
						$i=1;
						while($row = mysql_fetch_array($query)){
					?>

					<tr>
						<td> <?php echo $i++; ?> </td>
						<td> <?php echo $row['cname']; ?> </td>
						<td> <?php echo $row['product']; ?> </td>
					
						<td> <?php echo $row['price']; ?> </td>
						<td> <?php echo $row['quantity']; ?> </td>
						<td> <?php echo $row['total']; ?> </td>
						<td> <?php echo $row['delivery_status']; ?> </td>
						<td>
							<div class="btn-group">
							<?php 
								if($row['delivery_status'] == "Delivered"){
									echo "Delivered";
									
								}
								else if($row['delivery_status'] == ""){
									echo "Not Delivered";
								}
								
								
							?>
							</div>
						</td>
						
						
					</tr>
					
				
					
					<?php } ?>
				<tbody>	
			</table>
			<div class="well">
			<?php 
			$rr = mysql_query("SELECT SUM(total) FROM `order_details` WHERE branchname='$b_name' AND month(odate) = '$month'");
			$sum = mysql_fetch_array($rr);
			$count = mysql_num_rows($query); ?>
			
				<p> Total Sales : <?php echo $count; ?></p>
				<p>Sum of all total Sales: <?php echo $sum[0]; ?></p>
			</div>
			<!-- /.row -->
			<?php 
					} if(isset($_POST['search_by_year']))
					{
						$year= $_POST['year'];
				?>
				<table class="table table-hover table-bordered table-striped" id="example">
				<thead>
					<tr>
						<th>SL no</th>
						<th>Customer Name</th>
						<th>Product Name</th>
						
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th>Status</th>
						
						
					</tr>
				</thead>
				
				<tbody>
					<?php
						include "dbcon.php";
						$query = mysql_query("SELECT * FROM `order_details`,`product` WHERE order_details.pid=product.pid AND order_details.branchname='$b_name' AND year(odate) = '$year'");
						$i=1;
						while($row = mysql_fetch_array($query)){
					?>

					<tr>
						<td> <?php echo $i++; ?> </td>
						<td> <?php echo $row['cname']; ?> </td>
						<td> <?php echo $row['product']; ?> </td>
					
						<td> <?php echo $row['price']; ?> </td>
						<td> <?php echo $row['quantity']; ?> </td>
						<td> <?php echo $row['total']; ?> </td>
						<td> <?php echo $row['delivery_status']; ?> </td>
						<td>
							<div class="btn-group">
							<?php 
								if($row['delivery_status'] == "Delivered"){
									echo "Delivered";
									
								}
								else if($row['delivery_status'] == ""){
									echo "Not Delivered";
								}
								
								
							?>
							</div>
						</td>
						
						
					</tr>
					<?php } ?>
				<tbody>	
			</table>
			<div class="well">
			<?php 
			$rr = mysql_query("SELECT SUM(total) FROM `order_details` WHERE branchname='$b_name' AND year(odate) = '$year'");
			$sum = mysql_fetch_array($rr);
			$count = mysql_num_rows($query); ?>
			
				<p> Total Sales : <?php echo $count; ?></p>
				<p>Sum of all total Sales: <?php echo $sum[0]; ?></p>
			</div>
			<!-- /.row -->
			<?php 
					}
			?>			
               <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->

<!--market updates end here-->
<!--mainpage chit-chating-->
<!--main page chit chating end here-->
<!--main page chart start here-->
<div class="main-page-charts">
  
<!--main page chart layer2-->
<div class="chart-layer-2">
	
	<div class="col-md-6 chart-layer2-right">
			<!--<div class="prograc-blocks">-->
		     <!--Progress bars-->
	       
	        
				<script src="js/bars.js"></script>

	      <!--//Progress bars-->
	      </div>
	</div>
	<div class="col-md-6 chart-layer2-left">
		<!--<div class="content-main revenue">			
					<h3>Total Revenue</h3>
					<canvas id="radar" height="300" width="300" style="width: 300px; height: 300px;"></canvas>
						<script>
							var radarChartData = {
								labels : ["","","","","","",""],
								datasets : [
									{
										fillColor : "rgba(104, 174, 0, 0.83)",
										strokeColor : "#68ae00",
										pointColor : "#68ae00",
										pointStrokeColor : "#fff",
										data : [65,59,90,81,56,55,40]
									},
									{
										fillColor : "rgba(236, 133, 38, 0.82)",
										strokeColor : "#ec8526",
										pointColor : "#ec8526",
										pointStrokeColor : "#fff",
										data : [28,48,40,19,96,27,100]
									}
								]
								
							};
							new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
						</script>
		</div>-->
	</div>
  <div class="clearfix"> </div>
</div>

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	<p>© 2018 Bazaar Kart. All Rights Reserved | Design by Akshay and Varun </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <?php include "sidebar.php";
     ?>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     
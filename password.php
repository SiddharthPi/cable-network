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
			   </ul>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4 col-sm-4 col-xs-6 part1" style="background-color: #B7E4EB; border: 2px solid #0FA4BB; padding: 25px; border-radius: 8px; ">
				<h3 class="center">Change Password</h3>
				<form action="" method="post">
				  <div class="form-group">
				  	<label>Current Password</label>
					<input type="password" name="cpassword" class="form-control" placeholder="Enter Current Password" required>
				  </div>
				  <div class="form-group">
				  	<label>New Password</label>
					<input type="password" name="npassword" class="form-control" placeholder="Enter new password" 
					<input type="password" name="cwpd" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*{2}" title="at least one number and one uppercase and lowercase letter, and at least 2  characters" required>
				  </div>
				  <div class="form-group">
				  	<label>Confirm Password</label>
					<input type="password" name="conpassword" class="form-control" placeholder="Enter Confirm password" 
					<input type="password" name="cwpd" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*{2}" title="at least one number and one uppercase and lowercase letter, and at least 2  characters" required>
				  </div>
                   <input type="submit" name="Add" class="btn btn-info " value="Change"><br>
				</form>
				<?php include('con_db.php');
					if(isset($_POST['Add']))
					{
						$password=$_POST['cpassword'];
						$npassword=$_POST['npassword'];
						$conp=$_POST['conpassword'];
						$qry=mysql_query("select * from admin where password='$password' and user_name='$username'") or die(mysql_error());
						$nrows=mysql_num_rows($qry);
						if($nrows==1)
						{
							if($npassword==$conp)
							{
								$sq1=mysql_query("update admin set password='$npassword' where user_name='$username'");
								if($sq1)
									{
										echo '<script>alert("Password changed"); window.location="adminhome.php"; </script>';
									}
									else{
										echo '<script>alert("Failed to change"); </script>';
									}
							}
							else{
								echo '<script>alert("Password Mismatch");  </script>';
							}
						}
						
					}
				 ?>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 part1 part3">
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

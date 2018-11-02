<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>User Page</title>
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
	
<!-- //Navigation -->
<!-- Banner -->
	
<!-- //Banner -->
<!-- WELCOME SECTION -->
<!-- //WELCOME SECTION -->

<!-- Services columns -->
	<div class="container w3ls-service" id="service">
		<div class="row-agile">
			<div class="col-md-2"></div>
		
			<div class="col-md-8" style="background-color: #5BD2B9; border: 2px solid #0FA4BB; padding: 25px; border-radius: 8px; ">
				<h3 class="center">User Registration</h3>
				<form action="" method="post">
				<div class="row">
				  <div class="form-group col-md-5" style="margin-left: 48px;">
				  	<label>First Name</label>
					<input type="text" name="fname" class="form-control" pattern="[A-Za-z]+" title="letters only" placeholder="First Name" required>
				  </div>
				  <div class="form-group col-md-5">
				  	<label>Last Name</label>
					<input type="text" name="lname" class="form-control" pattern="[A-Za-z]+" title="letters only" placeholder="Last Name" >
				  </div>
				 </div>
				 <div class="row">
				  <div class="form-group col-md-5" style="margin-left: 48px;">
				  	<label>Contact</label>
					<input type="tel" name="contact" class="form-control" pattern="[0-9]+" title="only numbers" placeholder="Enter contact number">
				  </div>
				  <div class="form-group col-md-5">
				  	<label>Address</label>
					<textarea name="address" class="form-control" pattern="[A-Za-z0-9\s.,/\]+" title="alphanumeric characters only" placeholder="Enter address" required></textarea>
				  </div>
				  </div>
				  <div class="row">
				  <div class="form-group col-md-5" style="margin-left: 48px;">
				  	<label>Location</label>
					<select name="loc" class="form-control">
							<option>Select Location</option>
							<?php include('con_db.php');
								$qr=mysql_query("select * from location") or die(mysql_error());
								while($rw=mysql_fetch_array($qr)) {
							 ?>
							 <option value="<?php echo $rw['loc_name']; ?>"><?php echo $rw['loc_name']; ?></option>
							 <?php } ?>
						</select>
				  </div>
				  <div class="form-group col-md-5">
				  	<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
				  </div>
				  </div>
				  <div class="row">
				  <div class="form-group col-md-5" style="margin-left: 48px;">
				  	<label>Password</label>
					<input type="password" name="pwd" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*{2}" title="at least one number and one uppercase and lowercase letter, and at least 2 or more characters" placeholder="Password" required>
				  </div>
				  <div class="form-group col-md-5">
				  	<label>Confirm Password</label>
					<input type="password" name="cwpd" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*{2}" title="at least one number and one uppercase and lowercase letter, and at least 2  characters" placeholder="Confirm Password" required>
				  </div>
				  </div>


					<input type="submit" name="Register" class="btn btn-primary col-md-4" style="margin-left: 248px;" value="Register">
					
				</form>
				<?php include('con_db.php');
					if(isset($_POST['Register']))
					{
						$FName=$_POST['fname'];
						$LName=$_POST['lname'];
						$cont=$_POST['contact'];
						$add=$_POST['address'];
						$Location=$_POST['loc'];
						$mail=$_POST['email'];
						$pass=$_POST['pwd'];
						$conpass=$_POST['cwpd'];
						if($pass==$conpass)
						{
                         $qry=mysql_query("INSERT INTO `user`(`first_name`, `last_name`, `contact`, `address`, `location`, `email`, `password`, `reg_date`) VALUES ('$FName','$LName','$cont','$add','$Location','$mail','$pass',now())") or die(mysql_error());
						
						if($qry){
							echo '<script>alert("Registered successfully"); window.location="userlogin.php"; </script>';
						}
						else{
							echo '<script>alert("Failed to Register"); </script>';
						}
					}
					else{
							echo '<script>alert("Password doesnt match,try again"); </script>';
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

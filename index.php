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
	<title>COMS</title>
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
	<?php include('menubar.php'); ?>
<!-- //Navigation -->
<!-- Banner -->
	<div class="c">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">

				<div class="item active">
					<img src="images/T2.jpg" alt="Los Angeles" style="width:100%;">
					<div class="carousel-caption">
						
						
					</div>
				</div>

				

			<!-- Left and right controls -->
			
<!-- //Banner -->
<!-- WELCOME SECTION -->
	<div class="agileits-welcome" id="about">
		<div class="container w3ls w3-welcome">
			<div class="w3-text">
			 <h3><span class="w3ag">~~~~~</span> Welcome to the Cable-O-Network <span class="w3ag">~~~~~</span></h3>
				<p>             Cable Operator Management System is integrated and automation software for cable operators. 
                 Cable operators will distribute TV channels to their customers for that they charge some money monthly.
            Customer can register for website and order for the service and he can view channel list, different packages offer for
            every month, if there is complaints regarding cable service he can register complaints to the 
            cable operator.
				</p>
				<!-- Trigger the modal with a button -->
				
				<!-- Modal -->
				
			
			
				<!-- bootstrap-pop-up -->
					
					<!-- //bootstrap-pop-up -->
			</div>
			<div class="w3-image">
				
				<div class="bestimg">
					<img src="images/office1.jpg" alt="Best image">
				</div>
				
			</div>
		</div>
	</div>
<!-- //WELCOME SECTION -->

<!-- Services columns -->
	
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
	<div class="w3ls-contact" id="contact">
		<div class="container agile-contact ">
			<div class="info col-md-4 col-sm-4 col-xs-6">
				<h4>Contact Information</h4>
				<ul>
					<li><span aria-hidden="true"></span>Hari Ram Complex, Mangalore</li>
						<li><span aria-hidden="true"></span>9343561127</li>
					<li><a href="mailto:abcd@yoursite.com"><span aria-hidden="true" ></span>praveen.ocn.mng@gmail.com</a></li>

				</ul>	
			</div>
			<div class="links col-md-4 col-sm-4 col-xs-6">
				<h4>Quick Links</h4>
				<ul>
					<li><a class="scroll" href="#"><span class="fa fa-long-arrow-right" aria-hidden="true"></span> HOME</a></li>
					<li><a class="scroll" href="#clients"><span class="fa fa-long-arrow-right" aria-hidden="true"></span> RESOURCES</a></li>
					<li><a class="scroll" href="#service"><span class="fa fa-long-arrow-right" aria-hidden="true"></span>SERVICES</a></li>
					<li><a class="scroll" href="#about"><span class="fa fa-long-arrow-right" aria-hidden="true"></span> ABOUT US</a></li>
					<li><a class="scroll" href="#contact"><span class="fa fa-long-arrow-right" aria-hidden="true"></span> CONTACT</a></li>
				</ul>
			</div>
			<div class="form col-md-4 col-sm-4 col-xs-12">
				<h4>Contact Us</h4>
				<form action="" method="post">
					<input type="text" name="name" placeholder="NAME" required pattern="[A-Za-z]+" title="letters only" ><br>
					<input type="email" name="email" placeholder="E-MAIL" required><br>
					<input type="text" name="phone" placeholder="PHONE" pattern="^\d{10}$" title="10 numeric characters only"  ><br>
					<textarea placeholder="MESSAGE" name="message" rows="3" cols="30" pattern="[A-Za-z0-9\s.,/\]+" title="alphanumeric characters only"></textarea><br>
					 <input type="SUBMIT" name="add" value="SUBMIT" ><br>
					<?php include('con_db.php');
					if(isset($_POST['add']))
					{
						$nm=$_POST['name'];
						$email=$_POST['email'];
						$phone=$_POST['phone'];
						$msg=$_POST['message'];

						$qry=mysql_query("INSERT INTO `contact`(`con_id`, `name`, `email`, `phone`, `message`, `date`) VALUES ('','$nm','$email','$phone','$msg',now())") or die(mysql_error());
						if($qry){
							echo '<script>alert("Submited successfully"); </script>';
						}
						else{
							echo '<script>alert("Failed to submit"); </script>';
						}
					}
				 ?>
				 
				</form>
			</div>
		</div>
	</div>
	
	<!-- //cotact section -->
	<!-- footer -->
	<div class="footer">
	<hr>
		<p>&copy;2017 Exclusive Business. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts.com</a></p>
	</div>
	
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

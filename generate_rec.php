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
			
			<div class="col-md-2"></div>
			<div class="col-md-10 col-sm-8 col-xs-8 part1" style="background-color: #B7E4EB; border: 2px solid #0FA4BB; padding: 25px; border-radius: 8px; ">
				<h3 class="center">Search Receiptent</h3> <br>
				<form action="" method="post">
				 <div class="row">
				 	<div class="form-group col-md-2">
				 		
				 	</div> 

					  <div class="form-group col-md-4">
					  	<label></label>
						<select name="rec" class="form-control">
							<option>Select receiptent</option>
							<?php include('con_db.php');
								$qr=mysql_query("select * from receipt") or die(mysql_error());
								while($rw=mysql_fetch_array($qr)) {
							 ?>
							 <option value="<?php echo $rw['rid']; ?>"><?php echo $rw['user_name']; ?></option>
							 <?php } ?>
						</select>
					  </div>

					<input type="submit" name="Search" value="Search" class="btn btn-info col-md-3" style="margin-top: 40px; margin-left: 10px;">
				</div>
				</form>
				<?php include('con_db.php');
				if(isset($_POST['Search']))
				{
						$rec=$_POST['rec'];
						$qr=mysql_query("select * from receipt,location where rid='$rec' and location.loc_id=receipt.loc_id") or die(mysql_error());
						$row=mysql_fetch_array($qr);
						 ?>
				<form action="rec_val.php?rid=<?php echo $rec; ?>" method="post">
				<div id='DivIdToPrint'>		
				<table class="table table-bordered table-striped table-hover" style="background-color: #fff;"">
					<tr>
						<th colspan="4" style="text-align: center; ">P R Satelite System</th>
					</tr>
					<tr>
						<th colspan="4" style="text-align: center; ">Hariram Complex, Mangaluru</th>
					</tr>
					<tr>
						<th>Receipt Number </th>
						<?php $st=mysql_query("select * from receipt_pay order by r_no desc limit 1");
							$res=mysql_num_rows($st); $red=mysql_fetch_array($st); $rno=$red['r_no'];
							if($res>0)
							{
								$rno= ++$rno;
							}
							else 
							{
								$rno= "REC001";
							}
						 ?>
						<td><input type="text" name="recno" class="form-control" style="width: 400px" readonly value="<?php echo $rno; ?>"></td>
					
						<th>Receipt Date </th>
						<td><input type="text" name="rdate" class="form-control" value="<?php date_default_timezone_set("Asia/Kolkata"); echo date('d-m-Y'); ?>"></td>
					</tr>

					<tr>
						<th>User Name </th>

						<td><input type="text" name="uname" class="form-control" style="width: 400px" readonly value="<?php echo $row['user_name']; ?>"></td>
					
						<th>Location </th>
						<td><input type="text" name="loc" class="form-control" value="<?php echo $row['loc_name']; ?>"></td>
					</tr>
					<tr>
						<th>In words </th>

						<td><input type="text" name="words" class="form-control" style="width: 400px" readonly value="<?php $amt=$row['amount'];  echo getIndianCurrency($amt) .' only'; ?>"></td>
					
						<th>Amount </th>
						<td><input type="text" name="amt" class="form-control" value="<?php echo $row['amount']; ?>"></td>
					</tr>
				</table>
				</div>
				<input type='submit' class="btn btn-success btn-sm" name="save" value='Save'>
				</form>
				<input type='button' class="btn btn-primary btn-sm" id='btn' value='Print' onclick='printDiv();'>
				<?php } ?>
				 
				
			</div>
					</div>
	</div>
	<?php

function getIndianCurrency($number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'rupees ' : '') . $paise;
}
    ?>

	<script>
	function printDiv() 
	{
	 var aa = confirm("Are you sure want to Print?");
	 if(aa)
	 {
	 	 var divToPrint=document.getElementById('DivIdToPrint');

	    var htmlToPrint = '<head><title></title><style media="print" >tr{page-break-inside: avoid; }</style><link rel="stylesheet" type="text/css" media="screen,print" href="css/bootstrap.css"><link href="font-awesome/css/font-awesome.min.css" media="screen,print" rel="stylesheet" type="text/css"><link href="css/style.css" media="screen,print" rel="stylesheet"><link href="css/bootstrap.min.css" media="screen,print" rel="stylesheet"></head><body>';

	    htmlToPrint += divToPrint.outerHTML;
	    newWin = window.open("");
	    newWin.document.write(htmlToPrint);
	   newWin.focus();
	  
	 	setTimeout(function() {
      newWin.print();
      newWin.close();
                    }, 100);
	}

	}

</script>
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

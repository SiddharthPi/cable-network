	<?php include('con_db.php');
		$form=$_GET['q'];
		if($form=='new'){
	 ?>
	<form action="" method="post">
				  <div class="form-group col-md-6">
				  	<label>User name</label>
					<input type="text" name="uname" class="form-control" placeholder="Enter user name" pattern="[A-Za-z]+" title="letters only"  required>
				  </div>
				  <div class="form-group col-md-6">
				  	<label>Contact</label>
					<input type="tel" name="contact" class="form-control" placeholder="Enter contact" pattern="^\d{10}$" title="10 numeric characters only" placeholder required>
				  </div>

					 <div class="form-group col-md-6">
					  	<label>Location</label>
						<select name="loc" class="form-control col-md-6">
							<option>Select Location</option>
							<?php include('con_db.php');
								$qr=mysql_query("select * from location") or die(mysql_error());
								while($rw=mysql_fetch_array($qr)) {
							 ?>
							 <option value="<?php echo $rw['loc_id']; ?>"><?php echo $rw['loc_name']; ?></option>
							 <?php } ?>
						</select>
					  </div>

					  <div class="form-group col-md-6 ">
					  	<label>Package</label>
						<select name="pid" onblur="showAmt(this.value)" class="form-control col-md-6">
							<option>Select Package</option>
							<?php include('con_db.php');
								$qr=mysql_query("select * from package") or die(mysql_error());
								while($rw=mysql_fetch_array($qr)) {
							 ?>
							 <option value="<?php echo $rw['p_id']; ?>"><?php echo $rw['p_title']; ?></option>
							 <?php } ?>
						</select>
					  </div>

					   <div class="form-group col-md-6">
				  	<label>Amount</label>
					<input type="text" name="amt" class="form-control" id="pamt" placeholder="Package Amount" readonly>
				  </div>

					<input type="submit" name="Add" class="btn btn-info col-md-4" style="margin-top: 40px; margin-left: 20px" value="Insert"><br>
				</form>
		<?php } else if($form=='exist') {?>
			<form action="" method="post">
				  <div class="form-group col-md-6">
				  	<label>User name</label>
					<select name="uname" onblur="showContent(this.value)" class="form-control col-md-6">
							<option>Select User</option>
							<?php include('con_db.php');
								$qr=mysql_query("select * from receipt group by `user_name`") or die(mysql_error());
								while($rw=mysql_fetch_array($qr)) {
							 ?>
							 <option value="<?php echo $rw['user_name']; ?>"><?php echo $rw['user_name']; ?></option>
							 <?php } ?>
						</select>
				  </div>
				  <div class="form-group col-md-6">
				  	<label>Contact</label>
					<input type="text" name="contact" class="form-control" id="contact" readonly>
				  </div>

					 <div class="form-group col-md-6">
					  	<label>Location</label>
						<input type="text" name="location" class="form-control" id="loc" readonly>
						<input type="hidden" name="loc" class="form-control" id="locid" readonly>
					  </div>

					  <div class="form-group col-md-6 ">
					  	<label>Package</label>
						<input type="text" name="package" class="form-control" id="ptitle" readonly>
						<input type="hidden" name="pid" class="form-control" id="pid" readonly>
					  </div>

					   <div class="form-group col-md-6">
				  	<label>Amount</label>
					<input type="text" name="amt" class="form-control" id="amt" readonly>
				  </div>

					<input type="submit" name="Add" class="btn btn-info col-md-4" style="margin-top: 40px; margin-left: 20px" value="Insert"><br>
				</form>

		<?php } ?>
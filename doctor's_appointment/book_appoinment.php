<!DOCTYPE html>

<?php include('Dashboard.php'); ?>
<?php include('patient_login.php'); ?>

	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Booking Appoinment</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
		<form enctype="multipart/form-data" method="post" class="text-center">
			 <div class="col-md-12">
				  
			 		<label>
					   Name: <input type="text" name="name" value="" placeholder="Full name" required>
					</label><br><br>

					<label>
						Email: <input type="email" name="email"  value="" placeholder="email" required>
					</label><br><br>
					
					<label>
						Phone: <input type="number" name="contact"  placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
 					<label>
						Address: <input type="text" name="address" value="" placeholder="address" required>
					</label><br><br>
					
					
					<label>
						Date: <input type="date" name="date" placeholder="choose ur date" >	
					</label><br><br>
					
					
					<button name="submit" type="submit" style="margin-left:60px;width: 85px;border-radius: 3px;">Check</button> <br>
				
				<label>
						<select name="time">
									<option value="">-select time-</option>
									<option value="9.00am-10.00am">09.00am-10.00am</option>
									<option value="10.00am-11.00am">10.00am-11.00am</option>
									<option value="11.00am-12.00pm">11.00am-12.00pm</option>
									<option value="12.00pm-01.00pm">12.00pm-01.00pm</option>
									<option value="03.00pm-04.00pm">03.00pm-04.00pm</option>
									<option value="04.00pm-05.00pm">04.00pm-05.00pm</option>
									<option value="05.00pm-06.00pm">05.00pm-06.00pm</option>
									<option value="07.00pm-08.00pm">07.00pm-08.00pm</option>
									<option value="08.00pm-09.00pm">08.00pm-09.00pm</option>
      
    						  </select>
									
					</label><br>		

				
			</div>	
			</form>
			</div>




	</div>

	<script src="js/bootstrap.min.js"></script>
			<?php
						
							include('../connet.php');
							if(isset($_POST['submit'])){

							$sql = "SELECT dates, time FROM bookings";

							if () {
							    
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					?> 

</body>
</html>
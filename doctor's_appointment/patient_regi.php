
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" align="center" style="background-color:#272327;color: #fff;">Patient Registration</h3>

		<div class="formstyle" style="float: center;padding:25px;border: 1px solid lightgrey;margin-center:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
		<form enctype="multipart/form-data" method="post" class="text-center">
			 <div class="col-md-12">
				  
			 		<label>
						Your Name: <input type="text" name="name" value="" placeholder="Full name" required>
					</label><br><br>

					<label>
						Age: <input type="number" name="age"  placeholder="age" title="please enter valid age"/>
					</label><br><br>
					<label>
						Mobile: <input type="text" name="contact"  placeholder="contact no" required="required" title="please enter mobile no."/>
					</label><br><br>
 					
 					<label>
						Address: <input type="text" name="address" value="" placeholder="address">
					</label><br><br>
					<br><br>
					<label>
						Email: <input type="email" name="email"  value="" placeholder="email" required>
					</label><br><br>
					<label>
						Password: <input type="password" name="password"  value="" placeholder="password" required>
					</label><br><br>
					
					
					<button name="submit" type="submit" align="center" style="margin-left:60px;width: 85px;border-radius: 3px;">Register</button> <br>
				
			</div>


				</form>
			</div>




	</div>


	<script src="js/bootstrap.min.js"></script>

	<?php
						include('connet.php');
						if(isset($_POST['submit'])){

						$sql1 = "SELECT * FROM patient WHERE email='".$_POST["email"]."' ";
             		    $result = $conn->query($sql1);	
             		    if ($result->num_rows > 0) {
			                  echo "<script>alert('Sorry, user already exist!');</script>";
			             }
						else{
							$sql = "INSERT INTO patient (name,address,email,age,contact,password)
							VALUES ('" . $_POST["name"] ."','" . $_POST["address"] . "','" . $_POST["email"] . "','" .$_POST["age"]. "','" . $_POST["contact"]  . "','".$_POST["password"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<h1>Congratulations your membership has beeen created successful</h1>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					}
	?> 

</body>
</html>
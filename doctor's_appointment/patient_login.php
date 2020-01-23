<?php session_start();  ?>

<html>
<body>
	<div class="login" align="center" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Patient Login</h3>
			<div class="formstyle"   align="center"style="float: right;padding:150px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:150px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<label>
						 <input type="email" name="email"  placeholder="email" required>
					</label><br><br>
					<label>
						 <input type="password" name="password"  placeholder="password" required>
					</label><br><br>
					<button name="submit" type="submit" align="center" style="margin-left: -26px;width: 85px;border-radius: 3px;">Login</button> <br>

					<h3>Not a member yet? <a href="patient_regi.php" title="create a account" >Sign Up</a> <br>


			
			<?php 
					$_SESSION['patient']="";							
							include('connet.php');
							if(isset($_POST["submit"])){

							$sql= "SELECT * FROM patient WHERE email= '" . $_POST["email"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["email"]= $_POST["email"];
											
											$_SESSION['patient']= "yes";
										    echo "<script>location.replace('patient/dashboard.php');</script>";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
			
		</form>
	</div>
	
	
</div>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>


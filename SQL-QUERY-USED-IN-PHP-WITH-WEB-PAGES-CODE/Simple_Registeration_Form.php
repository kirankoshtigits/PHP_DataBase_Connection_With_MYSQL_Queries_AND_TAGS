<?php
	require 'dbconfig/config.php';
?>
<html>
	<head>
		<title>Registration Page</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<div  id="container8">
		<div id="header8">
			<ul>
				<li><a href="index.php"><input type="button" class="ind_btn8" value="Home"></a></li>
				<li><a href="admin.php"><input type="button" class="ind_btn8" value="Admin"></a></li>
				<li><a href="user.php"><input type="button" class="ind_btn8" value="User"></a></li>
				<li><a href="register.php"><input type="button" class="ind_btn8" value="Register"></a></li>
			</ul>
		</div>
		<div>
			<form class="form6" action="register.php" method="post">
				<p class="Add1">Register</p><br>
				
				<label class="label3">Name</label>
					<input 
						name="name" 
						type="text" 
						class="text3" 
						pattern="[A-Za-z]{3,20} [A-Za-z]{3,20} [A-Za-z]{3,20}"
						title="Please Enter Valid Full Name Ex.Sushant Appaso Mali"
						placeholder="Enter Full Name" 
						required
					><br><br>
				
				<label class="label3">Age</label>
					<input 
						name="age" 
						type="text" 
						class="text3" 
						pattern="[0-9]{1,2}"
						title="Please Enter Valid Age Ex.20"
						placeholder="Enter Age";
						required
					><br><br>
				
				<label class="label3">E-mail</label>
					<input 	
						name="email" 
						type="Email" 
						class="text3" 
						placeholder="User E-mail" 
						title="Plaese Enter Valid Email Ex.Hello@gmail.com"
						placeholder="Enter E-mail" 
						required
					><br><br>
				
				<label class="label3">Phone Number</label>
					<input 
						name="phoneno" 
						type="text" 
						class="text3" 
						pattern="[0-9]{6,10}"
						title="Please Enter Valid Mobile Number Ex.9922199289"
						placeholder="Enter Phone Number" 
						required
					><br><br>
				
				<label class="label3">Address</label>
					<input 
						name="address" 
						type="text" 
						class="text3" 
						placeholder="User Address" 
						required
					><br><br>
				
				<label class="label3">Password</label>
					<input 
						name="password" 
						type="Password" 
						class="text3" 
						placeholder="Enter Password" 
						required
					><br><br>
				
				<label class="label3">Conform Password</label>
					<input 
						name="password1" 
						type="Password" 
						class="text3" 
						placeholder="Enter Conform Password" 
						required
					><br>
					__________________________________________________________________________________<br><br>
				
					<label class="labels">Answer the below</label><br><br>
					<li class="li">Would you like to go to the Beach ?
						<select name="ans1" class="select1" required>
							  <option value="">Select</option>
							  <option value="Yes">Yes</option>
							  <option value="No">No</option>
						</select>
					</li><br>
					<li class="li">Would you like to visit Hill Station ?
						<select name="ans2" class="select1" required>
							  <option value="">Select</option>
							  <option value="Yes">Yes</option>
							  <option value="No">No</option>
						</select>
					</li><br>
					___________________________________________________________________________________<br>
					<input name="submit_btn2" type="submit" class="submit_btn2" value="Submit">
					<a href="index.php"><input type="reset" class="reset_btn4" value="Cancel"></a><br>	
			</form>
			<?php
				if(isset($_POST['submit_btn2']))
				{
					//echo '<script type="text/javascript"> alert("Sign Up Button Clicked") </script>';
					
					$name=$_POST['name'];
					$age=$_POST['age'];
					$email=$_POST['email'];
					$phoneno=$_POST['phoneno'];
					$address=$_POST['address'];
					$password=$_POST['password'];
					$password1=$_POST['password1'];
					$ans1=$_POST['ans1'];
					$ans2=$_POST['ans2'];
					
						if($password==$password1)
						{
							$query="select * from user WHERE email='$email'";
							$query_run=mysqli_query($con,$query);
							
							if(mysqli_num_rows($query_run)>0)
							{
								//ther is already a user with the same username
								echo '<script type="text/javascript"> alert("Email is already use try to another") </script>';
							}
							else
							{
								//insert value on database
								$query="insert into user values('','$name','$age','$email','$phoneno','$address','$password','$ans1','$ans2')";
								$query_run=mysqli_query($con,$query);
								if($query_run)
								{
									echo '<script type="text/javascript"> alert("Successfull Register") </script>';
								}
							}
						}
						else
						{		
								echo '<script type="text/javascript"> alert("Password And Conform Password does not match") </script>';
						}
				}
			?>
		</div>
	</div>
	</body>
</html>
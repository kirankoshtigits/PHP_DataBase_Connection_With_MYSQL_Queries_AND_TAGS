<html>
	<head>
		<title>
			Hello Java Programming
		</title>
	</head>
	<div>
	<body>
		<form method="post" action="">
			<label>Gender</label> 
					<input type="radio" class="radiobtns" name="gender" value="Male" checked required>Male
					<input type="radio" class="radiobtns" name="gender" value="Female" required>Female
			
			<label>Hello</label> 
					<input type="radio" class="radiobtns" name="gender1" value="Male" checked required>Male
					<input type="radio" class="radiobtns" name="gender1" value="Female" required>Female
				
			<label>Gender1</label> 
					<input type="radio" class="radiobtns" name="gender2" value="Male" checked required>Male
					<input type="radio" class="radiobtns" name="gender2" value="Female" required>Female	
			
			<label>Gender3</label> 
					<input type="radio" class="radiobtns" name="gender3" value="Male" checked required>Male
					<input type="radio" class="radiobtns" name="gender3" value="Female" required>Female
					
			<label>Gender4</label> 
					<input type="radio" class="radiobtns" name="gender4" value="Male" checked required>Male
					<input type="radio" class="radiobtns" name="gender4" value="Female" required>Female
					
			<label>Gender5</label> 
					<input type="radio" class="radiobtns" name="gender5" value="Male" checked required>Male
					<input type="radio" class="radiobtns" name="gender5" value="Female" required>Female
				
			<label>Gender6</label> 
					<input type="radio" class="radiobtns" name="gender6" value="Male" checked required>Male
					<input type="radio" class="radiobtns" name="gender6" value="Female" required>Female
					
			<label>Gender7</label> 
					<input type="radio" class="radiobtns" name="gender7" value="Male" checked required>Male
					<input type="radio" class="radiobtns" name="gender7" value="Female" required>Female
					
			<label>Gender8</label> 
					<input type="radio" class="radiobtns" name="gender8" value="Male" checked required>Male
					<input type="radio" class="radiobtns" name="gender8" value="Female" required>Female	

					
				<input name="submit" type="submit" id="signup_btn" Value="Submit">
		</form>
		<?php
		require 'dbconfig/config.php';
				if(isset($_POST['submit']))
				{
					//echo '<script type="text/javascript"> alert("Sign Up Button Clicked") </script>';
					

					$gender=$_POST['gender'];
					$gender1=$_POST['gender1'];
					$gender2=$_POST['gender2'];
					$gender3=$_POST['gender3'];
					$gender4=$_POST['gender4'];
					$gender5=$_POST['gender5'];
					$gender6=$_POST['gender6'];
					$gender7=$_POST['gender7'];
					$gender8=$_POST['gender8'];
						
						$query="insert into hello values('','$gender','$gender1','$gender2','$gender3','$gender4','$gender5','$gender6','$gender7','$gender8')";
						$query_run=mysqli_query($con,$query);
			?>
		</div>
	</body>
</html>
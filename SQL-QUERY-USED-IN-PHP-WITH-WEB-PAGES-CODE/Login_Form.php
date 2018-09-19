<?php
	session_start();
	require 'dbconfig/config.php';
?>
<html>
	<head>
		<title>Login Form</title>
	</head>
	<body>
	<div  id="container7">
		<div class="form4">
				<form method="post" action="user.php"  class="form5" name="form5">
					<p class="user">User Login</p>
						<label class="login1">Username</label>
							<input  
								name="username" 
								type="Email" 
								class="text" 
								placeholder="User Username Or Email - id" 
								name="form" 
								required
							><br><br>
						<label class="login1">Password</label>
							<input  
								name="password" 
								type="password" 
								class="text" 
								placeholder="User Password" 
								name="form" 
							required><br>
				<input name="login_btn1" type="submit" class="login_btn1" value="Login">
				</form>
				<?php
					
					if(isset($_POST['login_btn1']))
					{
						//echo '<script type="text/javascript">alert("Login Button Clicked") </script>';
						
							$email=$_POST['username'];
							$password=$_POST['password'];
							
					    	$query="SELECT * FROM user WHERE email='$email' AND password='$password'";
							
							$query_run=mysqli_query($con,$query);
							$counts=mysqli_num_rows($query_run);
							if($counts>0)
							{
								$_SESSION['username']=$email;
								header('location:userlogin.php');
							}
							else
							{
									echo'<script type="text/javascript">alert("Wrong Username/Password")</script>';
							}
					}		
				?>
			</div>
	</div>
	</body>
</html>
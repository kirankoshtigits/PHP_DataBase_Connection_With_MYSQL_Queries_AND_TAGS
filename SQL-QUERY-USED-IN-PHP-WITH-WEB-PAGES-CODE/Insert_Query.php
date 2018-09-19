<html>
	<head>
		<title>Simple Delete Query</title>
	<head>
	<body>
		<form method="post">
			Name:<input type="text" name="name">
			Address:<input type="text" name="address">
			Mobile No:<input type="text" name="mobileno">
			City:<input type="text" name="city">
			<input type="submit" name="button1">
		</form>
		<?php
			
			$con=mysqli_connect("localhost","root","","dailywork");
			if($con)
			{
				echo'<script>alert("Connection is Successfull")</script>';
			}
			else
			{
				echo'<script>alert("Connection is not Successfull")</script>';
			}
			if(isset($_POST['button1']))
			{
				$name=$_POST['name'];
				$address=$_POST['address'];
				$mobileno=$_POST['mobileno'];
				$city=$_POST['city'];
				
				$query="insert into student values('','$name','$address','$mobileno','$city')";
				$query_run=mysqli_query($con,$query);
				if($query_run)
				{
					echo'<script>alert("Information is Successfull Submit")</script>';
				}
				else
				{
					echo'<script>alert("Information is not submit Successfull")</script>';
				}
			}
		?>
	</body>
<html>
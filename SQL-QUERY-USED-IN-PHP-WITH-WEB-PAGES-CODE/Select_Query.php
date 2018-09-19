<html>
	<head>
		<title>Simple Show Query</title>
	<head>
	<body>
		<form method="post">
			<input type="submit" name="button1" value="Select">
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
				$query="SELECT id,name,address,mobile_no,city FROM student";
				$query_run=mysqli_query($con,$query);
				while($row=mysqli_fetch_assoc($query_run))
				{
					echo $row['name']."<br>";
					echo $row['address']."<br>";
					echo $row['mobile_no']."<br>";
					echo $row['city'];
				}
				
			}
		?>
	</body>
<html>
<html>
	<head>
		<title>Simple Update Query</title>
	<head>
	<body>
		<form method="post">
			Id To Update:<input type="text" name="id">
			Name:<input type="text" name="name">
			Address:<input type="text" name="address">
			Mobile No:<input type="text" name="mobileno">
			City:<input type="text" name="city">
			<input type="submit" name="button1" value="Update">
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
				$id=$_POST['id'];
				$name=$_POST['name'];
				$address=$_POST['address'];
				$mobileno=$_POST['mobileno'];
				$city=$_POST['city'];
				
				$query = "UPDATE `student` SET '`name`='".$name."',`address`='".$address."',`mobileno`=$mobileno WHERE `id` = '$id'";
				$query_run=mysqli_query($con,$query);
				if($query_run)
				{
					echo'<script>alert("Data is Update Successfull")</script>';
				}
				else
				{
					echo'<script>alert("Data is not Update Successfull")</script>';
				}
				
			}
		?>
	</body>
<html>
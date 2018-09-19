<html>
	<head>
		<title>Simple Delete Query</title>
	<head>
	<body>
		<form method="post">
			Id:<input type="text" name="id">
			
			<input type="submit" name="button1" value="Delete">
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
				
				$query="delete from student where id='$id'";
				$query_run=mysqli_query($con,$query);
				if($query_run)
				{
					echo'<script>alert("Information is Successfull Delete")</script>';
				}
				else
				{
					echo'<script>alert("Information is not Delete Successfull")</script>';
				}
			}
		?>
	</body>
<html>
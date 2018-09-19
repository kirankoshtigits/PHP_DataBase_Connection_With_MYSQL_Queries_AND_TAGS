<html>
<head>
	<title>Hello Searching</title>
</head>
<body>
	<div>
		<form  method="post">
			<lable></lable>
			<h1> Searching Table</h1>
			<lable>Starting Date</lable>
			
				<input type="text"  name="first" placeholder="1/10/2019">
			<lable>End DateDate</lable>
			
			<input type="text"  name="second" placeholder="30/10/2019"><br><br>
			<input name="submit" type="submit" Value="Search">
		</form>
		<?php
				require 'dbconfig/config.php';
				
				if(isset($_POST['submit']))
				{
				
					$first=$_POST['first'];
					$second=$_POST['second'];
					
						$query="Select * from hello1 WHERE date BETWEEN '$first' and '$second'";
						
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							$name=$row['name'];
							
							echo "<br>".$name;
						}
				}
			?>
	</div>
	
</body>
</html>

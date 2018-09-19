<?php
	require 'dbconfig/config.php';
?>
<html>
	<head>
		<title>View Users</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div  id="container5">
			<div id="header5">
				<ul>
					<li><a href="addplace.php"><input type="button" class="ind_btn5" value="Add Places"></a></li>
					<li><a href="viewplace.php"><input type="button" class="ind_btn5" value="View Places"></a></li>
					<li><a href="viewusers.php"><input type="button" class="ind_btn5" value="View Users"></a></li>
					<li><a href="viewfeedback.php"><input type="button" class="ind_btn5" value="View Feedback"></a></li>
					<li><a href="index.php"><input type="button" class="ind_btn5" value="LogOut"></a></li>
				</ul>
			</div>
			<div>
				<p class="user1">View User</p>
			</div>
			<div class="placedata">
			<?php
					$query1=mysqli_query($con,"SELECT * FROM user");
					$fetch=mysqli_fetch_assoc($query1);
					echo "<table border='1' cellspacing='0'>";
						echo "<tr>";
							echo "<th width='30'>";
								echo"Id";
							echo "</th>";
							
							echo "<th width='200'>";
								echo"Name";
							echo "</th>";
							
							echo "<th width='200'>";
								echo"Email";
							echo "</th>";
							
							echo "<th width=120'>";
								echo"PhoneNo";
							echo "</th>";
							
							echo "<th width='300'>";
								echo"Address";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"Ans1";
							echo "</th>";
							
							echo "<th width='70'>";
								echo"Ans2";
							echo "</th>";
						echo "</tr>";
						while($fetch=mysqli_fetch_assoc($query1))
						{
							echo "<tr>";
								echo"<td>".$fetch['id']."</td>";
								echo"<td>".$fetch['name']."</td>"; 
								echo"<td>".$fetch['email']."</td>";
								echo"<td>".$fetch['phoneno']."</td>";
								echo"<td>".$fetch['address']."</td>";
								echo"<td>".$fetch['ans1']."</td>";
								echo"<td>".$fetch['ans2']."</td>";
							echo "</tr>";
						}
					echo"</table>";
			?>
			</div>
		</div>
	</body>
</html>
<?php
	require 'dbconfig/config.php';
?>
<html>
	<head>
		<title>View Places</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div  id="container4">
			<div id="header4">
				<ul>
					<li><a href="addplace.php"><input type="button" class="ind_btn4" value="Add Places"></a></li>
					<li><a href="viewplace.php"><input type="button" class="ind_btn4" value="View Places"></a></li>
					<li><a href="viewusers.php"><input type="button" class="ind_btn4" value="View Users"></a></li>
					<li><a href="viewfeedback.php"><input type="button" class="ind_btn4" value="View Feedback"></a></li>
					<li><a href="index.php"><input type="button" class="ind_btn4" value="LogOut"></a></li>
				</ul>
			</div>
			<div class="places">
				<p class="title1">View Places</p>
			</div>
			<div class="placedata">
			<?php
					$query=mysqli_query($con,"SELECT * FROM addplace");
					$fetch=mysqli_fetch_assoc($query);
					echo "<table border='1' cellspacing='0'>";
						echo "<tr>";
							echo "<th width='150'>";
								echo"Image";
							echo "</th>";
							echo "<th width='30'>";
								echo"Id";
							echo "</th>";
							echo "<th width='200'>";
								echo"Name";
							echo "</th>";
							echo "<th width='100'>";
								echo"City";
							echo "</th>";
							echo "<th width='300'>";
								echo"Descreption";
							echo "</th>";
						echo "</tr>";
						while($fetch=mysqli_fetch_assoc($query))
						{
							echo "<tr>";
								$image=$fetch['img'];
								echo"<td>".'<img src="'.$image.'" height="200" width="300">'."</td>";
								echo"<td>".$fetch['id']."</td>"; 
								echo"<td>".$fetch['name']."</td>";
								echo"<td>".$fetch['tags']."</td>";
								echo"<td>".$fetch['desc']."</td>";
							echo "</tr>";
						}
					echo"</table>";
			?>
			</div>
		</div>
	</body>
</html>
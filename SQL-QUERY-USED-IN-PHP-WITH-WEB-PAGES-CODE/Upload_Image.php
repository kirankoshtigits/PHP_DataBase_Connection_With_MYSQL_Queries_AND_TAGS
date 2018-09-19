<?php
	require 'dbconfig/config.php';
?>
<html>
	<head>
		<title>Add Places</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
		<div  id="container3">
			<div id="header3">
				<ul>
					<li><a href="addplace.php"><input type="button" class="ind_btn3" value="Add Places"></a></li>
					<li><a href="viewplace.php"><input type="button" class="ind_btn3" value="View Places"></a></li>
					<li><a href="viewusers.php"><input type="button" class="ind_btn3" value="View Users"></a></li>
					<li><a href="viewfeedback.php"><input type="button" class="ind_btn3" value="View Feedback"></a></li>
					<li><a href="index.php"><input type="button" class="ind_btn3" value="LogOut"></a></li>
				</ul>
			</div>
			<div class="addplace">
				<form class="form3" enctype="multipart/form-data" action="addplace.php" method="post" name="form3">
					<p class="Add">Add Places</p>
					
					<label class="label1">Place Name</label>
						<input 
							name="name" 
							type="text" 
							class="text1"
							placeholder="Enter Place Name"
							required
						/><br><br>
						
					<label class="label1">Image</label>
						<input 
							name="img" ;
							class="img" ;
							type="file";
						/><br><br>
						
					<label class="label1">Address</label>
						<input 
							name="address"
							type="text" 
							class="text1"
							placeholder="Enter Place Address" 
							required
						/><br><br>
					
					<label class="label1">Area</label>
						<input 
							name="place" 
							type="text" 
							class="text1" 
							placeholder="Enter Place Area" 
							required
						/><br><br>
					
					<label class="label1">City</label>
						<input 
							name="tags" 
							type="text" 
							class="text1" 
							placeholder="Enter City" 
							required
						/><br><br>
					
					<label class="label1">Description</label>
						<input 
							name="desc" 
							type="text" 
							class="text1" 
							placeholder="Enter Place Description" 
							required
						/><br><br>
					
					<input name="submit_btn1" type="submit" class="submit_btn1" value="Submit">
					<a href="adminlogin.php"><input type="reset" class="reset_btn1" value="Cancel"></a>
				</form>
				<?php
				if(isset($_POST['submit_btn1']))
				{
					//echo '<script type="text/javascript"> alert("Sign Up Button Clicked") </script>';
					
					$name=$_POST['name'];
					$address=$_POST['address'];
					$place=$_POST['place'];
					$tags=$_POST['tags'];
					$desc=$_POST['desc'];
				   
					$img_name=$_FILES['img']['name'];
					$img_size=$_FILES['img']['size'];
					$imp_tmp=$_FILES['img']['tmp_name'];
					
					$directory='uploads/';
					$target_file=$directory.$img_name;
					move_uploaded_file($imp_tmp,$target_file);
					
					//insert value on database
				    $query="insert into addplace values('','$name','$target_file','$address','$place','$tags','$desc')";
					$query_run=mysqli_query($con,$query);
					echo '<script type="text/javascript"> alert("Successfull AddPlace") </script>';
				}
			?>
			</div>
		</div>
	</body>
</html>
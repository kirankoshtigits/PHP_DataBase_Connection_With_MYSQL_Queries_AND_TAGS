<html>
	<head>
		<title>AITG</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<style>
#slider
{
	width:100%;
	height:576px;
	margin:0 auto;
	position:relative;
	margin-top:0px;
}
#slider img
{
	width:100%;
	height:100%;
	position:absolute;
}
#slider .btn
{
	position:absolute;
	width:50px;
	height:50px;
	border:none;
	border-radius:25px;
	top:200px;
	background:black;
	color:white;
	font-size:20px;
}
#slider #btn1:hover
{
		box-shadow:10px 0px 20px 0px black;
}
#slider #btn2:hover
{
		box-shadow:-10px 0px 20px 0px black;
}
#slider #btn2
{
	position:relative;
	float:right;
}
	</style>
	<body>
	<div  id="container">
		<div id="header">
			<ul>
				<li><a href="index.php"><input type="button" class="ind_btn" value="Home"></a></li>
				<li><a href="admin.php"><input type="button" class="ind_btn" value="Admin"></a></li>
				<li><a href="user.php"><input type="button" class="ind_btn" value="User"></a></li>
				<li><a href="register.php"><input type="button" class="ind_btn" value="Register"></a></li>
			</ul>
		</div>
		<div id="slider">
			<img class="slider1" src="img/Img1.PNG">
			<img class="slider1" src="img/Img2.JPEG">
			<img class="slider1" src="img/Img3.JPEG">
			<img class="slider1" src="img/Img4.JPEG">
			<img class="slider1" src="img/Img5.JPEG">
			<img class="slider1" src="img/Img6.JPEG">
			<img class="slider1" src="img/Img7.JPEG">
			<img class="slider1" src="img/Img8.JPEG">
			<img class="slider1" src="img/Img9.JPEG">
			<img class="slider1" src="img/Img10.JPEG">
			<button class="btn" onclick="plusindex(-1)" id="btn1">&#10094;</button>
			<button class="btn" onclick="plusindex(1)" id="btn2">&#10095;</button>
		</div>
	</div>
	</body>
	<script>
		var index=1;
		function plusindex(n)
		{
			index=index+n;
			ShowImage(index);
		}
		 autoSlide();
		function autoSlide()
		{
			var i;
			
			var x=document.getElementsByClassName("slider1");
			
			for(i=0;i<x.length;i++)
			{
				x[i].style.display="none";
			}
			if(index>x.length){index=1;}
			x[index-1].style.display="block";
			index++;
			setTimeout(autoSlide,2000);
		}
		
	</script>
</html>
<?php 
session_start();
if (!isset($_SESSION['pass'],$_SESSION['name'])) {
	header("location:index.php");
}
$name=$_SESSION['name'];
$pwd=$_SESSION['pass'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>K & K HOME DESIGN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,100;1,300;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.top h1{
		font-size: 45px;
	text-align: center;
	color: white;
	}
</style>
<script >
	var navLinks=document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right="0";
	}
	function hideMenu(){
		navLinks.style.right="-300px";
	}
</script>

</head>
<body >
	<section class="header">
		<nav>
			<a href=""><img src="log.jpg"></a>
			<div class="top"><h1>K & K Home Design</h1></div>
				
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>

					
					<li><a href="#footers">ABOUT</a></li>
					<li><a href="ContactUs.php">CONTACT</a></li>
					<li><a href="logout.php">LOGOUT</a></li>

				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>	
				<div class="text-box">
			
			<marquee><p>Making design is now one of the easiest thing for interior and exterior design. Design is brightness of our environments.	
			</p></marquee>
		
		</div>
		
		
<div>
	<?php 
         include "visitus.php";
		 ?>
</div>

	</section>
	
	

 
</body>
</html>
<?php
include'../config.php';
$new=0;
session_start();
if(!isset($_SESSION['username'])){$new=1;};
if(isset($_SESSION['username'])) {
	$buttonText1 = $_SESSION['username'];
	$buttonHref1 = "../index.php";
} else {
    $buttonText1 = "Sign In";
	$buttonHref1 = "../login.php";
}
if(isset($_SESSION['username'])) {
    $buttonText2 = "Log Out";
	$buttonHref2 = "../logout.php";
} else {
    $buttonText2 = "Sign Up";
	$buttonHref2 = "../register.php";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="shortcut icon" href="../images/logo1.png" type="png">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>C++ Tutorials</title>
	<link rel="stylesheet" href="../css/course.css?v=<?=$version?>">
	<script type="text/javascript" src="../fun1.js?v=<?=$version?>"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function () {
			if ($(window).scrollTop()) {
				$('nav').addClass('black');
			} else {
				$('nav').removeClass('black');
			}
		})
	</script>
</head>

<body>
	<!-- Navigation Bar -->
	<header id="header">
		<nav class="navbar">
			<a class="logo1" href="../index.php"><img class="logo_img" src="../images/logo.png" alt="Logo"></a>
			<ul class="navbar-menu">
				<li><a href="../index.php">Home</a></li>
				<li><a href="python.php">Python</a></li>
				<li><a href="java.php">Java</a></li>
				<li><a href="c.php">C</a></li>
				<li><a class="active">C++</a></li>
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
			<div class="navbar-right">
				<form class="search-form">
					<input type="text" placeholder="Search">
					<button type="submit"><i class="fas fa-search"></i></button>
				</form>
				<a href="<?php echo $buttonHref1; ?>"><button class="get-started">
						<?php echo $buttonText1; ?>
					</button></a>
				<a href="<?php echo $buttonHref2; ?>"><button class="get-started">
						<?php echo $buttonText2; ?>
					</button></a>
					</div>
				<img src="../images/icons/moon1.png" alt="moon" class="moon" id="theme">
				<img src="../images/icons/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="../images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="../images/raja.jpg" alt="Username">
				<p>Raja Sawarn</p>
			</div>
			<ul>
			<li><a class="../index.php" href="">Home</a></li>
				<li><a class="active" href="">Python</a></li>
				<li><a href="java.php">Java</a></li>
				<li><a href="c.php">C</a></li>
				<li><a href="c++.php">C++</a></li>
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
		</div>
	</header>


	<div class="topic"><h1>C++ language Tutorial:-</h1></div>
	<iframe src="c++.pdf" width="95%" height="1000" frameborder="10px" class="pdf"></iframe>

	<!-- Contact Us -->
	<div class="title2" id="contactus_section">
		<center><span>
				<p style="font-size: 50px; padding: 40px; padding-bottom: 10px; color: var(--secondary-color);">Contact
					Us</p>
			</span></center>
		<div class="shortdesc2">
			<center>
				<p>Please reach to us for any queries.</p>
			</center>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:imrajastark@gmail.com" method="post" enctype="text/plain">
				<label>Your Name</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email id</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Message</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
		</div>
	</div>

	<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right,rgb(42, 6, 6), var(--tertiary-color) ); margin-top: 50px;"
		direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="18">
		<div class="marqu">“Education is the passport to the future, for tomorrow belongs to those who prepare for it
			today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is
			expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and
			change.”</div>
	</marquee>
	<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="images/logo1.png" style="width: 200px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="../images/icons/fb.webp"></a>
					<a href="#"><img src="../images/icons/insta.webp"></a>
					<a href="#"><img src="../images/icons/twitter.png"></a>
					<a href="#"><img src="../images/icons/linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2023 Created By Raja Babu, Banti kumar, Gaurav Kumar and Aviraj All
					Rights Reserved.</p>
				<br>
				<p class="loc"><img src="../images/icons/location.png"> Muzaffarpur Institute of Technology<br>Muzaffarpur,
					<Bihar-842003></Bihar-842003>
				</p>
				<br>
				<p class="phone"><img src="../images/icons/phone.svg"> +91-7250319466<br><img
						src="../images/icons/email.svg">&nbsp;
					imrajastark@gmail.com</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Latest Notifications</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>

	<script>
		var theme = document.getElementById("theme");
		theme.onclick = function () {
			document.body.classList.toggle("dark-theme");
			if (document.body.classList.contains("dark-theme")) {
				theme.src = "../images/icons/sun1.png";
			}
			else
				theme.src = "../images/icons/moon1.png";
		}
	</script>
</body>

</html>
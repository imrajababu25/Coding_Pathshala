<?php
include'config.php';
$new=0;
session_start();
if(!isset($_SESSION['username'])){$new=1;};
if(isset($_SESSION['username'])) {
	$buttonText1 = $_SESSION['username'];
	$buttonHref1 = "index.php";
} else {
    $buttonText1 = "Sign In";
	$buttonHref1 = "login.php";
}
if(isset($_SESSION['username'])) {
    $buttonText2 = "Log Out";
	$buttonHref2 = "logout.php";
} else {
    $buttonText2 = "Sign Up";
	$buttonHref2 = "register.php";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="shortcut icon" href="images/logo1.png" type="png">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coding Pathshala</title>
	<link rel="stylesheet" href="css/style1.css?v=<?=$version?>">
	<script type="text/javascript" src="fun1.js?v=<?=$version?>"></script>
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
			<a class="logo1" href="index.php"><img class="logo_img" src="images/logo.png" alt="Logo"></a>
			<ul class="navbar-menu">
				<li><a class="active" href="">Home</a></li>
				<li><a href="#courses_section">Courses</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
				<li><a href="#services_section">Services</a></li>
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
				<img src="images/icons/moon1.png" alt="moon" class="moon" id="theme">
				<img src="images/icons/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>"Coding is the language of the future, speak it fluently."</p>
				<h5>"Through coding, you have the power to turn your ideas into reality and shape the world around you."

					<br>Coding can be a challenging and rewarding journey. Embrace the process, stay motivated,
					and never stop learning. The possibilities are endless!
				</h5>
			</div>
			<div class="svg-image">
				<img src="images/third.jpg" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="images/raja.jpg" alt="Username">
				<p>Raja Sawarn</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				<li><a href="#feedBACK">Feedback</a></li>
			</ul>
		</div>
	</header>

	<!-- Some Popular Subjects -->
	<div class="title" id="courses_section">
		<span>Popular Subjects on Coding Pathshala</span>
	</div>
	<br><br>
	<div class="ccard">
		<center>
			<div class="ccardbox">
				<div class="dcard">
					<a href="courses/python.php" target="_blank">
						<div class="fpart"><img src="images/subjects/python.png"></div>

						<center>
							<div class="spart">Python Tutorials</div>
						</center>
					</a>
				</div>
				<div class="dcard">
					<a href="courses/java.php" target="_blank">
						<div class="fpart"><img src="images/subjects/java.png"></div>
						<center>
							<div class="spart">Java Tutorials</div>
						</center>
					</a>
				</div>
				<div class="dcard">
					<a href="courses/c++.php" target="_blank">
						<div class="fpart"><img src="images/subjects/c++.png"></div>
						<center>
							<div class="spart">C++ Tutorials </div>
						</center>
					</a>
				</div>
				<div class="dcard">
					<a href="courses/c.php" target="_blank"></a>
					<div class="fpart"><img src="images/subjects/c.png"></div>
					<center>
						<div class="spart">C Tutorials</div>
					</center>
					</a>
				</div>
			</div>

	</div>

	<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center>
			<p style="font-size: 50px; padding-top: 150px;">About</p>
		</center>
		<div class="about-content">
			<div class="side-image">
				<img class="sideImage" src="images/front.jpg">
			</div>
			<div class="side-text">
				<h2>What you think about us ?</h2>
				<p>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values,
					beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and
					directed research.<br> Educational website can include websites that have games, videos or topic
					related resources that act as tools to enhance learning and supplement classroom teaching. These
					websites help make the process of learning entertaining and attractive to the student, especially in
					today's age. <br>Using HTML(HyperText Markup Language), CSS(Cascading Style Sheet), JavaScript, we
					can make learning more easier and in a interesting way.</p>
			</div>
		</div>
	</div>

	<!-- PORTFOLIO -->
	<div class="diffSection" id="portfolio_section">
		<center>
			<p style="font-size: 50px; padding: 100px; padding-bottom: 40px;">Portfolio</p>
		</center>
		<div class="content">
			<p>
				“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your
				attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try
				ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”
			</p>
		</div>
	</div>
	<div class="extra">
		<p>We're increasing this data every year</p>
		<div class="smbox">
			<span>
				<center>
					<div class="data">4</div>
					<div class="det">Total Courses</div>
				</center>
			</span>
			<span>
				<center>
					<div class="data">100+</div>
					<div class="det">Total Tutorials</div>
				</center>
			</span>
			<span>
				<center>
					<div class="data">500+</div>
					<div class="det">Placement Questions</div>
				</center>
			</span>
			<span>
				<center>
					<div class="data">40</div>
					<div class="det">Total Quizess</div>
				</center>
			</span>
		</div>
	</div>

	<!-- TEAM -->
	<div class="diffSection" id="team_section">
		<center>
			<p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px;">We're the Developers</p>
		</center>
		<div class="totalcard">
			<div class="card" id="card1">
				<center><img src="images/gaurav.jpg"></center>
				<center>
					<div class="card-title">Gaurav Kumar</div>
					<div id="detail">
						<p>“Hey Learners! In my studies what i found most difficult was to understand any simple programming topic in one pf the most easiest ways possible. Our effort towards Coding Pathshala is one such step towards teaching essential programming concepts via easy standards, examples and own experience.<br> Wish you all great jouney ahead! “</p>
						<div class="duty"></div>
						<a href="#" target="_blank"><button class="btn-gaurav">Follow +</button></a>
					</div>
				</center>
			</div>
			<div class="card" id="card2">
				<center><img src="images/raja.jpg"></center>
				<center>
					<div class="card-title">Raja Babu</div>
					<div id="detail">
						<p>“Hey Learners! In my studies what i found most difficult was to understand any simple programming topic in one pf the most easiest ways possible. Our effort towards Coding Pathshala is one such step towards teaching essential programming concepts via easy standards, examples and own experience.<br> Wish you all great jouney ahead! “</p>
						<div class="duty"></div>
						<a href="https://www.linkedin.com/in/raja-babu-5819911a7/" target="_blank" style="text-align:center;"><button
								class="btn-raja" >Follow +</button></a>
					</div>
				</center>
			</div>
			<div class="card" id="card3">
				<center><img src="images/teghla.jpg"></center>
				<center>
					<div class="card-title">Banti Kumar</div>
					<div id="detail">
						<p>“Hey Learners! In my studies what i found most difficult was to understand any simple programming topic in one pf the most easiest ways possible. Our effort towards Coding Pathshala is one such step towards teaching essential programming concepts via easy standards, examples and own experience.<br> Wish you all great jouney ahead! “</p>
						<div class="duty"></div>
						<a href="https://www.linkedin.com/in/banti-kumar-35289a16a/" target="_blank"><button
								class="btn-banti">Follow +</button></a>
					</div>
				</center>
			</div>
			<div class="card" id="card4">
				<center><img src="images/aviraj.jpg"></center>
				<center>
					<div class="card-title">Aviraj</div>
					<div id="detail">
						<p>“Hey Learners! In my studies what i found most difficult was to understand any simple programming topic in one pf the most easiest ways possible. Our effort towards Coding Pathshala is one such step towards teaching essential programming concepts via easy standards, examples and own experience.<br> Wish you all great jouney ahead! “</p>
						<div class="duty"></div>
						<a href="https://www.linkedin.com/in/aviraj-982b0bab/" target="_blank"><button
								class="btn-aviraj">Follow +</button></a>
					</div>
				</center>
			</div>
		</div>
	</div>

	<!-- SERVICES -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
			<center>
				<p style="font-size: 50px; padding: 80px; padding-bottom: 40px; color:white;">Services</p>
			</center>
		</div>
		<a href="#">
			<div class="s-card"><img src="images/icons/onilnecourses.jpg">
				<p>Free Online Programming Courses</p>
			</div>
		</a>
		<a href="#">
			<div class="s-card"><img src="images/icons/concepts.png">
				<p>Building Concepts for Competitive Exams</p>
			</div>
		</a>
		<a href="#">
			<div class="s-card"><img src="images/icons/tut.jpg">
				<p>Online Tutorials</p>
			</div>
		</a>
		<a href="#">
			<div class="s-card"><img src="images/icons/papers.png">
				<p>Sample Papers of Various Competitive Exams</p>
			</div>
		</a>
		<a href="#">
			<div class="s-card"><img src="images/icons/placement.png">
				<p>Placement Preparation</p>
			</div>
		</a>
		<a href="#contactus_section">
			<div class="s-card"><img src="images/icons/discussion.jpg">
				<p>Discussion with Our Tutors & Mentors</p>
			</div>
		</a>
		<a href="#">
			<div class="s-card"><img src="images/icons/quiz.webp">
				<p>Quiz Questions to Improve IQ</p>
			</div>
		</a>
		<a href="#">
			<div class="s-card"><img src="images/icons/support.png">
				<p>24x7 Online Support</p>
			</div>
		</a>
	</div>


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
				<img src="images/logo.png" style="width: 150px; height: 100px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="images/icons/fb.png"></a>
					<a href="#"><img src="images/icons/insta.png"></a>
					<a href="#"><img src="images/icons/twitter.png"></a>
					<a href="#"><img src="images/icons/linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2023 Created By Raja Babu, Banti kumar, Gaurav Kumar and Aviraj All
					Rights Reserved.</p>
				<br>
				<p class="loc"><img src="images/icons/location.png"> Muzaffarpur Institute of Technology<br>Muzaffarpur,
					<Bihar-842003></Bihar-842003>
				</p>
				<br>
				<p class="phone"><img src="images/icons/phone.svg"> +91-7250319466<br><img
						src="images/icons/email.svg">&nbsp;
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
				theme.src = "images/icons/sun1.png";
			}
			else
				theme.src = "images/icons/moon1.png";
		}
	</script>
</body>

</html>
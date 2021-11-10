<!doctype html>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="We are a small family-run local business, operating in Bowen since 2012, hoping to improve our business by getting on the Internet. Our cafe is located at 223 Powell St in Bowen, Queensland.We as a professional in making bakery item for many years.">
		<meta name="keywords" content="sun and moon cafe, sun and moon, SUN AND MOON, SUN AND MOON CAFE">
		<meta name="author" content="phani sanjay varma">
		<title> Sun and Moon Cafe </title>
		<link href="stylesheet.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="banner-bg">
			<div class="banner">
				<div class="nav-menu">
					<div class="logo-block">
						<h3>Sun and Moon Cafe</h3>
					</div>
					<div class="nav-block">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about-us.html">About Us</a></li>
							<li><a href="menu.html">Menu</a></li>
							<li><a href="special-page.html">Special Page</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="banner-title">
					<h2> Form Submission </h2>
				</div>
			</div>
		</div>
		<div class="news-success">
			<p>Thank you forsigning up for the Sun and Moon Cafe Weekly newsletter.</p>
			<p>We have added the following information to our files regarding your interests:</p>
			<p>Name: <?php echo $_POST["name"]; ?></p>
			<p>Email: <?php echo $_POST["email"]; ?></p>
			<p>product: <?php echo $_POST["product"]; ?></p>
			<p>Birthday: <?php echo $_POST["day"]; ?>/<?php echo $_POST["month"]; ?></p>
			
		</div>
		<div class="footer-links">
			<h3> QUICK LINKS</h3>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about-us.html">About Us</a></li>
				<li><a href="menu.html">Menu</a></li>
				<li><a href="special-page.html">Special Page</a></li>
				<li><a href="contact.html">Contact Us</a></li>	
			</ul>
		</div>
		<div class="footer">
			<p> Contacts: 0455 9999 555</p>
			<p> Catering: 0433 3333 999</p>
			<p>	Address: 223 Powell St in Bowen, Queensland</p>
		</div>
	</body>
</html>
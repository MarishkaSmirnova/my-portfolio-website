<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142146623-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-142146623-1');
		</script>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Hello, I’m Marina Smirnova. I'm a Web Designer and Developer based in Vancouver, British Columbia. I create modern web designs and write accurate, accessible, and SEO friendly code. I'm right along in a process of learning and trying new technologies and can easily adapt myself to project needs.">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="icon" type="image/png" href="images/favicon.png">
		<title>Marina Smirnova | Web Design and Development</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Playfair+Display:700i&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="styles/styles.css">
	</head>
	 <!-- <?php 
		include 'head.php';
		?>  -->
	<body>
		<header>
			<div class="menu-container">
				<!-- logo -->
				<div class="logo-container">
					<a href="index.html">
						<img src="images/LOgo.png" class="logo">
					</a>
					<a href="index.html" class="text-logo">
						<h1>Marina Smirnova</h1>
						<h2>Web Design & Development</h2>
					</a>
				</div>
				<!--end of logo-->
				<!-- popup-content -->
				<button class="menu" id="menu">
					<span class="button-content" tabindex="-1">
						<span class="text">Menu</span>
						<span class="bar"></span>
					</span>
				</button>
				<!-- end popup-content -->
				<nav id="main-navigation">
					<ul>
						<li class="link-hover nav-link">
							<a href="about.html" class="link active">about</a>
						</li>
						<li class="link-hover nav-link">
							<a href="portfolio.html" class="link ">portfolio</a>
						</li>
						<li class="link-hover nav-link">
							<a href="contact.php" class="link ">contact</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- <?php include 'header.php'; ?>  -->

		<main>
			<div class="container">
				<div class="left-side left-side-contact" id="left-side">
					<div class="contact-left">
							<p class="greering-text">If you have any questions or comments, feel free to contact me!</p>
							<a href="mailto:hello@msmirnova.ca">hello@msmirnova.ca</a>
							<p>(604) 499 1172</p>
							<p><i class="fas fa-map-marker-alt"></i></p>
							<p>Vancouver, Beautiful British Columbia :)</p> 
							<a href="https://www.linkedin.com/in/marina-smirnova-4a0a9a114/?locale=en_US">
								<img src="images/linkedin-logo.png" alt="linkedIn link">
							</a>
							<a href="https://github.com/MarishkaSmirnova">
								<img src="images/github-logo.png" alt="gitHub">
							</a>
					</div>
					<form action="contact-form.php" method="post" name="intro" class="form-intro" id="form-intro">
						<div class="basic-info">
							<h2 class="form-title">
								<div class="circle1">.</div>Feel free to contact me!
							</h2>
							<div class="name">
								<label for="name">Name: </label>
								<br>
								<input placeholder="Enter your name" type="text" name="name" class="input">
								<br>
							</div>
							<div class="email">
								<label for="email">Email: </label>
								<br>
								<input placeholder="Enter your email" type="email" name="email" class="input">
								<br>
							</div>
							<div class="message">
								<label for="message">Message:</label>
								<br>
								<textarea placeholder="Enter your message" name="message" id="message" cols="30" rows="10" class="textarea"></textarea>
								<br>
							</div>
							<div class="button-submit">
								<input type="submit" name="submit" value="Submit" class="sign_up_button btn filter-button">
							</div>
						</div>	
					</form>
				</div>
				
				<div class="right-side"">
					<div class="contact-right">
					<!-- <?php @session_start();
						if(isset($_SESSION['errormessage'])){
						echo "<b>" . $_SESSION['errormessage'] . "</b>";
						unset($_SESSION['errormessage']);
						}
						if(isset($_SESSION['success'])){
							echo "<b>" . $_SESSION['success'] . "</b>";
							unset($_SESSION['success']);
							}
						?> -->
						<form action="contact-form.php" method="post" name="intro" class="form-intro" id="form-intro">
							<div class="basic-info">
								<h2 class="form-title">
									<div class="circle1">.</div>Let's get in touch:
								</h2>
								<div class="name">
									<label for="name">Name: </label>
									<br>
									<input placeholder="Enter your name" type="text" name="name" class="input">
									<br>
								</div>
								<div class="email">
									<label for="email">Email: </label>
									<br>
									<input placeholder="Enter your email" type="email" name="email" class="input">
									<br>
								</div>
								<div class="message">
									<label for="message">Message:</label>
									<br>
									<textarea placeholder="Enter your message" name="message" id="message" cols="30" rows="10" class="textarea"></textarea>
									<br>
								</div>
								<div class="button-submit">
									<input type="submit" name="submit" value="Submit" class="sign_up_button btn filter-button">
								</div>
							</div>	
						</form>
					</div>
				</div>
			</div> 
		</main>
		 <footer>
			<p>@Marina Smirnova, 2020</p>
		</footer> 
		<!-- <?php include 'footer.php'; ?>  -->

		<script src="scripts/script-menu-overlay.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="scripts/filter.js"></script>
	</body>
</html>
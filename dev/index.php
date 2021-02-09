<!DOCTYPE html>
<html lang="en">
	<?php 
		include 'head.php';
		?>
	<body onload="myFunction()">
		<div class="all-main-page" id="main" style="display:none;">
			<?php 
				include 'header.php';
				?>
			<main>
				<div class="container">
					<div class="left">
						<div class="home-main-info">
							<h2 class="email-title">
								<div class="circle1">.</div>
								<a href="mailto:hello@msmirnova.ca">hello@msmirnova.ca</a>
							</h2>
							<h3 class="animate__animated animate__zoomIn">Hello, I'm Marina</h3>
							<h1 class="animate__animated animate__zoomIn animate__delay-1s">web developer & <br>UX designer</h1>
							<h2 class="animate__animated animate__zoomIn animate__delay-2s">based in Vancouver, BC</h2>
							<div class="social-media-links animate__animated animate__zoomIn animate__delay-2s"> 
								<a href="https://www.linkedin.com/in/marina-smirnova-4a0a9a114/?locale=en_US">
									<img src="images/linkedin-logo.png" alt="linkedIn link">
								</a>
								<a href="https://github.com/MarishkaSmirnova">
									<img src="images/github-logo.png" alt="gitHub">
								</a>
								<a href="https://twitter.com/MarinaSmirnov7">
									<img src="images/twitter.png" alt="gitHub">
								</a>
							</div>
							<!-- <p class="animated backInDown">I'm a digital marketer who generates ideas and put it into beautiful and crafted web experiences.</p> -->
						</div>
						
					</div>
					<div class="right">
						<div class="home-project_box">
							<a class="hompage-project-link animate__animated animate__zoomIn animate__delay-3s" href="project1.php">  
								<p>website for</br>the lawyer</p>
								<div class="project-image image3">
									<img  src="images/jeff-front.png" data-aos="zoom-in" lt="project wordpress web developer vancouver">
									<img class="img-top" src="images/jeff.png" alt="project web developer vancouver">
								</div>		
							</a> 
						</div>
						<div class="home-project_box">
							<a class="hompage-project-link animate__animated animate__zoomIn animate__delay-3s" href="project2.php">  
								<p>react.js projects<br> collection</p>
								<div class="project-image image">
									<img  src="images/girl-front.png" data-aos="zoom-in" alt="project wordpress web developer vancouver">
									<img class="img-top" src="images/girl.png" alt="project web developer vancouver">
								</div>		
							</a> 
						</div>
						<div class="home-project_box box1">
							<a class="hompage-project-link animate__animated animate__zoomIn animate__delay-3s" href="project3.php">  
								<p>wordpress website</br>for students</p>
								<div class="project-image image">
									<img  src="images/paperclip-front.png" data-aos="zoom-in" alt="project wordpress web developer vancouver">
									<img class="img-top" src="images/paperclip.png" alt="project web developer vancouver">
								</div>
							</a> 
						</div>
						<div class="home-project_box box3">
							<a class="hompage-project-link animate__animated animate__zoomIn animate__delay-3s" href="project4.php">  
								<p>javascript</br> color game</p>
								<div class="project-image image2">
									<img  src="images/rbggame-front.png" data-aos="zoom-in" alt="javascript project web developer vancouver">
									<img class="img-top" src="images/rbggame1.png" alt="bcit project web developer vancouver">
								</div>
							</a> 
						</div>
						<!-- <div class="home-project_box box2">
							<a class="hompage-project-link" href="project5.php">  
								<p>React News</br> Database</p>
								<div class="project-image image">
									<img  src="images/news-front.png" alt="react project web developer vancouver">
									<img class="img-top" src="images/news.png" alt="react project web developer vancouver">
								</div>
							</a> 
						</div> -->
						<div class="home-project_box box5">
							<a class="hompage-project-link animate__animated animate__zoomIn animate__delay-3s" href="project6.php">  
								<p>web design </br>in photoshop</p>
								<div class="project-image image">
									<img  src="images/background-front.png" data-aos="zoom-in" alt="photoshop project web developer vancouver">
									<img class="img-top" src="images/background.png" alt="photoshop project web developer vancouver">
								</div>
							</a> 
						</div>
						<div class="home-project_box box4">
							<a class="hompage-project-link animate__animated animate__zoomIn animate__delay-3s" href="project7.php">  
								<p>PHP database</p>
								<div class="project-image image2">
									<img  src="images/php-front.png" data-aos="zoom-in" alt="php project web developer vancouver">
									<img class="img-top" src="images/php.png" alt="bcit php project web developer vancouver">
								</div>
							</a> 
						</div>
						<div class="home-project_box box6">
							<a class="hompage-project-link animate__animated animate__zoomIn animate__delay-3s" href="project8.php">  
								<p>portfolio</br> website</p>
								<div class="project-image image">
									<img  src="images/heart-front.jpg" data-aos="zoom-in" alt="javascript sass project web developer vancouver">
									<img class="img-top" src="images/heart.jpg" alt="javascript sass project web developer vancouver">
								</div>
							</a> 
						</div>
						<div class="wrapper-scroll-button">
							<span>
								<span class="mainpage-scroll-btn">Up</span>
							</span>
						</div>
					</div>
				</div><!--end of container-->
			</main>
			<?php 
			include 'footer.php';
			?>
			<script src="scripts/loading-page.js"></script>
			<script src="scripts/script-menu-overlay.js"></script>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="scripts/scroll-btn.js"></script>
		</div> <!--end of all-main-page-->
		<!--loading page code-->
		<div class="spinner" id="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
	    </div>
	<!--end of loading page code-->
	</body>

</html>
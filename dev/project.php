<!DOCTYPE html>
<html lang="en">
	<?php 
	include 'head.php';
	?>
	<body>
		<?php 
			include 'header.php';
			?>
		<main>
			<div class="container">
				<div class="left-side" id="left-side">
					<div class="project-me-left">
						<section class="project-info left-section about-section" id="project">
							<div class="project-textpart">
								<div class="next-prev-buttons">
									<a href="project3.php" class="prev-button">
										<span class="prev-btn">Prev</span>
										<i class="fas fa-arrow-left"></i>
									</a>	
									<a href="project2.php"class="next-button">
										<span class="next-btn">Next</span>
										<i class="fas fa-arrow-right"></i>
									</a>	
								</div>
								<h3>About the project</h3>
								<div class="tools-in-project">
									<h5>Tools used:</h5>
									<div class="all-tool-icons">
										<img class="tool-icon" src="images/html-logo.jpg" alt="html logo">
										<img class="tool-icon" src="images/css-logo.png" alt="css logo">
										<img class="tool-icon" src="images/sass-logo.png" alt="sass logo">
										<img class="tool-icon" src="images/jquery-logo.png" alt="sass logo">
										<img class="tool-icon" src="images/js-logo.png" alt="js logo">
										<img class="tool-icon" src="images/google-logo.png" alt="google  analytics logo">
									</div> 
								</div>	
								<p>During the TWD course in BCIT among my first experiences with web design and development was this landing page. I created simple, yet effective site that showcases some featured projects from the course. .</p>
							</div>
							<img class="about-project-image" src="images/landing_page.png" alt="" class="projectpiece">
						</section>
						<section class="project-info left-section" id="design">
							<div class="project-textpart">
								<h3>Design Process</h3>
								<p>Learning process is like an adventure with different types of emotions, discoveries and breakthrough. That's why I wanted my BCIT landing page to be very bright and colourful. My idea was to create site with some unique design features and at the same time I did my best to provide user friendly experience.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/landingdes2.png" alt="" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section" id="development">
							<div class="project-textpart">
								<h3>Development Process</h3>
								<div class="sourse-code">
									<i class="fab fa-github"></i>
									<a href="#">sourse code</a>
								</div>
								<p>This project highlights my first steps in web development, as well as SEO practise skills. Website provides fully responsive user experience, written with clean, efficient and reusable code. in terms of SEO I used such search optimization tools like sitemap, ///and Google Analytics. The last provides on-site analytics of visitor's behaviour on website, like number of visits, page view's, referrals, bounce rate and others.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/landingdev1.png" alt="" class="projectpiece"></div>
								<div><img src="images/landingdev2.png" alt="" class="projectpiece"></div>
							</div>
						</section>
						
						<button class="project-magic-button magic-button btn filter-button" id="project-magic">
							<a href="http://msmirnova.bcitwebdeveloper.ca/">View Live</a>
						</button>
						<?php 
						include 'scroll-button.php';
						?>
					</div>
				</div>

				<div class="right-side">
					<div class="project-right">
						<h2>Project stages:</h2>
						<div class="project-timeline timeline">
							<div class="history-tl-container">
								<ul class="tl">
									<li class="tl-item test1">
										<a href="#project" class="item-title" id="title-project">About this project</a>
									</li>
									<li class="tl-item test2">
										<a href="#design" class="item-title">Design process</a>
									</li>
									<li class="tl-item test3">
										<a href="#development" class="item-title" id="link">Development process</a>
									</li>
									<li class="tl-item test4">
										<a href="#project-magic" class="item-title " id="link">View live</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>	
		</main>
		<?php 
			include 'footer.php';
			?>
		<script src="scripts/script-menu-overlay.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="slick/slick/slick.min.js"></script> 
		<script src="scripts/slickslider.js"></script>
		<script src="scripts/scroll-btn.js"></script>
	</body>
</html>
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
									<a href="project7.html" class="prev-button">
										<span class="prev-btn">Prev</span>
										<i class="fas fa-arrow-left"></i>
									</a>	
									<a href="project1.html"class="next-button">
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
										<img class="tool-icon" src="images/js-logo.png" alt="js logo">
										<img class="tool-icon" src="images/jquery-logo.png" alt="jquery logo">
										<img class="tool-icon" src="images/google-logo.png" alt="google analytjics">
									</div> 
								</div>	
								<p>This portfolio website highlights some featured projects I’ve done during TWD and React and Modern JS courses in BCIT as well as my personal projects.</p>
							</div>
							<img class="about-project-image" src="images/portfoliolaptop.jpg" alt="portfolio laptop view" class="projectpiece">
						</section>
						<section class="project-info left-section" id="design">
							<div class="project-textpart">
								<h3>Design Process</h3>
								<p>The first stage of designing process was to create sitemap with all the content I want to have on my website. After I created wireframes in Balsamiq in both mobile and desktop views, organized all content on each page, planned over all the functionality I want to have.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/portfoliodes1.jpg" alt="" class="projectpiece"></div>
								<div><img src="images/portfoliodes2.jpg" alt="" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section" id="development">
							<div class="project-textpart">
								<h3>Development Process</h3>
								<div class="sourse-code">
									<i class="fab fa-github"></i>
									<a href="https://github.com/MarishkaSmirnova/my-portfolio-website" target="_blank">sourse code</a>
								</div>
								<p>During developing process I brought to live my ideas about half page scrolling, filtering and slider show functionality.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/portfoliodev1.png" alt="portfolio development code snippet" class="projectpiece"></div>
								<div><img src="images/portfoliodev2.png" alt="portfolio development code snippet" class="projectpiece"></div>
								<div><img src="images/portfoliodev3.png" alt="portfolio development code snippet" class="projectpiece"></div>
							</div>
						</section>	
					</div>
					<?php 
						include 'scroll-button.php';
						?>
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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="slick/slick/slick.min.js"></script> 
		<script src="scripts/slickslider.js"></script>
		<script src="scripts/scroll-btn.js"></script>
	</body>
</html>
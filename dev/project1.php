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
						<section class="project-info left-section about-section animate__animated animate__fadeIn" 
								id="project">
							<div class="project-textpart">
								<div class="next-prev-buttons">
									<a href="project8.php" class="prev-button">
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
										<img class="tool-icon" src="images/invision-logo.jpg" alt="invision logo">
										<img class="tool-icon" src="images/photoshop-logo.png" alt="photoshop logo">
										<img class="tool-icon" src="images/google-logo.png" alt="google  analytics logo">
									</div>  
								</div>
								<p>This website was created for the private lawyer based in Minnesota, US. He requested a website which will represent his expertise and the broad spectrum of Law Fields he can work with. 
									I met with the client over Zoom and discussed our possible routes and design.<br>
									During the meeting we discussed: <br>
										- Objective of the site<br>
										- Priorities to consider for the development of the site<br>
										- Users or target audience<br>
										- The primary task users are looking to accomplish when using site<br>
										- Competitors<br>
										- Design features<br>
										- Brand guideline/colors/typefaces<br>
										- Style/tone or imagery to consider<br>
									The design and development of this project provides a clean, easy to navigate, and mobile friendly site that is accessible by all devices.
								</p>
							</div>
							<img class="about-project-image" src="images/jefflaptop.jpg" data-aos="zoom-in" alt="client project laptop view" class="projectpiece">
						</section>
						<section class="project-info left-section animate__animated animate__fadeIn" 
								id="design">
							<div class="project-textpart">
								<h3>Design Process</h3>
								<p>After the meeting over Zoom, I made a note in Google Docs with all the info discussed and gave a client access to edit it to be sure that we’re on the same page and he can add his ideas and changes any time. I also made a Google file folder with possible color combination, sitemap of the website for approval and examples of ideas about future logo. The client provided the text and photos for the website. After some time I made a wireframes in InVision and design examples of the pages in Photoshop. As it happens a lot I guess, I got new photos from the client after that and we decided to change it dramatically and came up with the ideas that is now implemented.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/jeff-tabphone.jpg" alt="client project jeff lin lawyer" class="projectpiece"></div>
								<div><img src="images/jeff-patlette.jpg" alt="client project palette" class="projectpiece"></div>
								<div><img src="images/jeff-googledocs.jpg" alt="client project googledocs" class="projectpiece"></div>
								<div><img src="images/jeff-invision1.jpg" alt="client project invision" class="projectpiece"></div>
								<div><img src="images/jeff-invision2.jpg" alt="client project invision" class="projectpiece"></div>
								<div><img src="images/jeff-invision3.jpg" alt="client project invision" class="projectpiece"></div>
								<div><img src="images/jeff-designes.jpg" alt="client project design" class="projectpiece"></div>
								<div><img src="images/jeff-photoshop.jpg" alt="client project photoshop" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section animate__animated animate__fadeIn" 
									id="development">
							<div class="project-textpart">
								<h3>Development Process</h3>
								<div class="sourse-code">
									<i class="fab fa-github"></i>
									<a href="https://github.com/MarishkaSmirnova/lawyers-website" target="_blank">sourse code</a>
								</div>
								<p>After having the initial designs approved, we moved into the development stage, which is generally my favourite part. I used SASS for this project which was very helpful to keep the fonts, colours and mixins consistent. Developing the website, I used such libraries as JQuery for creation of filter on Practice area page and modal navigation bar, and Slick Slider library for sliders in the Testimonials section on the main page. As well as Adaptive Images library for making images responsive to the all screen sizes and AOS library for animation. Contact form is written using PHP.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/jeff-code1.jpg" alt="client project development marina smirnova" class="projectpiece"></div>
								<div><img src="images/jeff-code2.jpg" alt="developer marina smirnova" class="projectpiece"></div>
							</div>
						</section>
						
						<button class="project-magic-button magic-button btn filter-button animate__animated animate__slideInUp" id="project-magic">
							<a href="projects/Jeff/dev/index.html" target="_blank">View Live</a>
						</button>
					</div>
					<?php 
						include 'scroll-button.php';
						?>
				</div>

				<div class="right-side">
					<div class="project-right animate__animated animate__fadeIn animate__delay-1s">
						<h2>Project stages to choose:</h2>
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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="slick/slick/slick.min.js"></script> 
		<script src="scripts/slickslider.js"></script>
		<script src="scripts/scroll-btn.js"></script>
	</body>
</html>
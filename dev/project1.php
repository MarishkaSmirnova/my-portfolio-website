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
								<h3>About</h3>
								<div class="tools-in-project">
									<h5>Tools used:</h5>
									<div class="all-tools">
										<div class="tool-column">
											<div class="tool-list">
												<p>HTML5</p>
												<p>Sass</p>
												<p>JavaScript</p>
											</div>
											<div class="tool-list">
												<p>PHP</p>
												<p>InVision</p>
												<p>Adobe Photoshop</p>
											</div>
										</div>
										<div class="tool-column">
											<div class="tool-list">
												<p>Google Analytics</p>
												<p>Git</p>
												<p>GitHub</p>	
											</div>
											<div class="tool-list">
												<p>MAMP</p>
												<p>Visual Studio Code </p>
											</div>
										</div>				
									</div>	
								</div>
								<p>This website was created for the private lawyer based in Minnesota, US. He requested a website which will represent his expertise and the broad spectrum of Law Fields he can work with. 
									I met with the client over Zoom and discussed our possible routes and design.</p>
								<p>During the meeting we discussed:</p>
								<ul>
									<li>Objective of the site.</li>
									<li>Priorities to consider for the development of the site.</li>
									<li>Target audience.</li>
									<li>The primary task users are looking to accomplish when using site.</li>
									<li>Competitors.</li>
									<li>Design and developmet features.</li>
									<li>Brand guideline/colors/typefaces.</li>
									<li>Logo creation.</li>
									<li>Style/tone or imagery to consider.</li>
								</ul>	
								<p>The design and development of this project provides a clean, easy to navigate, and mobile friendly site that is accessible by all devices.</p>
							</div>
							<img class="about-project-image" src="images/jefflaptop.jpg" data-aos="zoom-in" alt="client project laptop view" class="projectpiece">
						</section>
						<section class="project-info left-section design animate__animated animate__fadeIn" 
								id="design">
							<div class="project-textpart">
								<h3>Design</h3>
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
						<section class="project-info left-section development animate__animated animate__fadeIn" 
									id="development">
							<div class="project-textpart">
								<h3>Development</h3>
								<div class="sourse-code">
									<i class="fab fa-github"></i>
									<a href="https://github.com/MarishkaSmirnova/lawyers-website" target="_blank">sourse code</a>
								</div>
								<p>After having the initial designs approved, we moved into the development stage, which is generally my favourite part. I used SASS for this project which was very helpful to keep the fonts, colours and mixins consistent. Developing the website, I used such libraries as JQuery for creation of filter on Practice area page and modal navigation bar, and Slick Slider library for sliders in the Testimonials section on the main page. As well as Adaptive Images library for making images responsive to the all screen sizes and AOS library for animation. Contact form is written using PHP.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/jeff-code1.png" alt="client project development marina smirnova" class="projectpiece"></div>
								<div><img src="images/jeff-code2.png" alt="developer marina smirnova" class="projectpiece"></div>
							</div>
						</section>
						
						<button class="project-magic-button magic-button btn filter-button animate__animated animate__fadeIn" id="project-magic">
							<a href="projects/Jeff/dev/index.html" target="_blank">View Live</a>
						</button>
					</div>
					<?php 
						include 'scroll-button.php';
						?>
				</div>

				<div class="right-side">
					<?php 
						include 'project-stages.php';
						?> 
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
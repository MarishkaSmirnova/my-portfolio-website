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
									<a href="project2.php" class="prev-button">
										<span class="prev-btn">Prev</span>
										<i class="fas fa-arrow-left"></i>
									</a>	
									<a href="project4.php"class="next-button">
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
												<p>WordPress</p>
												<p>JavaScript</p>
											</div>
										</div>
										<div class="tool-column">
											<div class="tool-list">
												<p>PHP</p>
												<p>Google Analytics</p>	
												<p>MAMP</p>
												<p>Visual Studio Code </p>
											</div>
										</div>				
									</div>	
								</div>
								<p>Collaborated with classmates, we designed and developed a Wordpress website for BCIT students of Office Administration with Technology program. We began with a meeting with the Lead Instructor of OAT course and went over everything about our client's program and student needs, the main purpose of the site, and her ideas of what she wanted the site to be.</p>
							</div>
							<img class="about-project-image" src="images/oat-laptop.jpg" alt="client project laptop view" class="projectpiece">
						</section>
						<section class="project-info left-section animate__animated animate__fadeIn" 
								id="design">
							<div class="project-textpart">
								<h3>Design</h3>
								<p>After our meeting we mapped out the content she wanted on it, and made wireframes in Balsamiq to demonstrate the content arrangement. We also prepared a lot of examples with website designs to learn client’s design preferences. Next step was the creation of design prototype in Photoshop and after matching clients wishes the coding part has started.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/cldes.jpeg" alt="client project sitemap" class="projectpiece"></div>
								<div><img src="images/cpplanning.jpeg" alt="client project sitemap" class="projectpiece"></div>
								<div><img src="images/clplanning2.jpeg" alt="client project sitemap" class="projectpiece"></div>
								<div><img src="images/clientsitemap.png" alt="client project sitemap" class="projectpiece"></div>
								<div><img src="images/oatdesign1.png" alt="" class="projectpiece"></div>
								<div><img src="images/clientdes1.png" alt="" class="projectpiece"></div>
								<div><img src="images/oatdesign2.png" alt="" class="projectpiece"></div>
								<div><img src="images/oatdesign3.png" alt="" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section animate__animated animate__fadeIn" 
								id="development">
							<div class="project-textpart">
								<h3>Development</h3>
								<div class="sourse-code">
									<i class="fab fa-github"></i>
									<a href="https://github.com/htpwebdesign/OATProgram" target="_blank">sourse code</a>
								</div>
								<p>This website is fully customized using Underscore starter theme. I used Advanced Custom Fields in multiple pages as well as taxonomies for Program page. To create slider for the main page Slick slider is used. For the creation of Schedule page Table Press plugin was chosen. With the help of REST API we created Job Postings section with latest job postings from Indeed.com, Job Bank BC and Craigslist Jobs.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/clientdev1.png" alt="client project development marina smirnova" class="projectpiece"></div>
								<div><img src="images/clientdev2.png" alt="developer marina smirnova" class="projectpiece"></div>
								<div><img src="images/clientdev3.png" alt="code marina smirnova vancouver " class="projectpiece"></div>
								<div><img src="images/clientgit.png" alt="code marina smirnova vancouver " class="projectpiece"></div>
							</div>
						</section>
						
						<button class="project-magic-button magic-button btn filter-button animate__animated animate__fadeIn" 
								id="project-magic">
							<a href="http://oatprogram.bcitwebdeveloper.ca/" target="_blank">View Live</a>
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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="slick/slick/slick.min.js"></script> 
		<script src="scripts/slickslider.js"></script>
		<script src="scripts/scroll-btn.js"></script>
	</body>
</html>
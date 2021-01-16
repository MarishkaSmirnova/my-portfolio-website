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
									<a href="project1.php" class="prev-button">
										<span class="prev-btn">Prev</span>
										<i class="fas fa-arrow-left"></i>
									</a>	
									<a href="project3.php"class="next-button">
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
												<p>CSS3</p>
											</div>
										</div>	
										<div class="tool-column">	
											<div class="tool-list">
												<p>React.js</p>
												<p>InVision</p>
											</div>
										</div>	
									</div>				
								</div>
							</div>	
								<p>After graduation from React.js and Modern JavaScript BCIT course, I decided that the best way to demonstrate my accomplishments is to create a small App with exercises and assignments I did during this course.</p>
						
							<img class="about-project-image" src="images/react-laptop.jpg" alt="client project laptop view" class="projectpiece">
							</div>
						</section>
						<section class="project-info left-section animate__animated animate__fadeIn" 
								id="design">
							<div class="project-textpart">
								<h3>Design</h3>
								<p>The design process was pretty simple and straightforward. I made a quick sketch using InVision App to get a clear idea of the look, content and order of the projects.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/react-wireframes.jpg" alt="client project sitemap" class="projectpiece"></div>
								<div><img src="images/react-design.png" alt="client project sitemap" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section animate__animated animate__fadeIn" 
								id="development">
							<div class="project-textpart">
								<h3>Development</h3>
								<div class="sourse-code">
									<i class="fab fa-github"></i>
									<a href="https://github.com/MarishkaSmirnova/react-portfolio-project" target="_blank">sourse code</a>
								</div>
								<p>Creating all those projects and exercises gave me hands-on experience with working with react components, children elements, different kinds of component lifecycles and event handlers, creating forms, making asynchronous requests, working with JSON data, fetching data from multiple APIs and many more. During the creation of this particular project, I’ve learned how to use the popular library used by React Applications - React Router.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/react-dev.jpg" alt="client project development marina smirnova" class="projectpiece"></div>
							</div>
						</section>
						
						<button class="project-magic-button magic-button btn filter-button animate__animated animate__fadeIn" 
								id="project-magic">
							<a href="projects/reactCourse/" target="_blank">View Live</a>
						</button>
					</div>
					
					<?php 
						include 'scroll-button.php';
						?>

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
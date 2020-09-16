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
						<section class="project-info left-section about-section" 
								id="project"
								data-aos="zoom-in">
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
								<h3>About the project</h3>
								<div class="tools-in-project">
									<h5>Tools used:</h5>
									<div class="all-tool-icons">
										<img class="tool-icon" src="images/html-logo.jpg" alt="html logo">
										<img class="tool-icon" src="images/css-logo.png" alt="css logo">
										<img class="tool-icon" src="images/react.png" alt="react logo">
										<img class="tool-icon" src="images/invision-logo.jpg" alt="invision logo">
									</div>  
								</div>
								<p>After graduation from React and Modern Javascript  BCIT course, I decided  that the best way to demonstrate my accomplishments is to create a small App with exercises and assignments I did during this course.</p>
							</div>
							<img class="about-project-image" src="images/react-laptop.jpg" alt="client project laptop view" class="projectpiece">
						</section>
						<section class="project-info left-section" 
								id="design"
								data-aos="zoom-in">
							<div class="project-textpart">
								<h3>Design Process</h3>
								<p>The design process was pretty simple and straightforward. I made a quick sketch using InVision App to get a clear idea of the look, content and order of the projects.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/react-wireframes.jpg" alt="client project sitemap" class="projectpiece"></div>
								<div><img src="images/react-design.png" alt="client project sitemap" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section" 
								id="development"
								data-aos="zoom-in">
							<div class="project-textpart">
								<h3>Development Process</h3>
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
						
						<button class="project-magic-button magic-button btn filter-button" 
								id="project-magic"
								data-aos="zoom-in">
							<a href="projects/reactCourse/" target="_blank">View Live</a>
						</button>
					</div>
					<?php 
						include 'scroll-button.php';
						?>
				</div>

				<div class="right-side">
					<div class="project-right" data-aos="zoom-in">
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
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script>
			AOS.init({once:"true"});
		</script>	
		<script src="scripts/script-menu-overlay.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="slick/slick/slick.min.js"></script> 
		<script src="scripts/slickslider.js"></script>
		<script src="scripts/scroll-btn.js"></script>
	</body>
</html>
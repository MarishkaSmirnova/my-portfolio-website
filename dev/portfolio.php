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
					<div class="portfolio-left">
						<h2>Projects:</h2>
						<div class="portfolio-left-filter">
							<h2>Tools filter:</h2>
							<div class="portfolio-left-filter-buttons" id="myBtnContainer">
								<button class="btn filter-button active" onclick="filterSelection('all')"> See All</button>
								<button class="btn filter-button" onclick="filterSelection('sass')">SASS</button>
								<button class="btn filter-button" onclick="filterSelection('js')">JavaScript</button>
								<button class="btn filter-button" onclick="filterSelection('jquery')">JQuery</button>
								<button class="btn filter-button" onclick="filterSelection('react')">React</button>
								<button class="btn filter-button" onclick="filterSelection('php')">PHP</button>
								<button class="btn filter-button" onclick="filterSelection('photoshop')">Photoshop</button>
								<button class="btn filter-button" onclick="filterSelection('invision')">InVision</button>
								<button class="btn filter-button" onclick="filterSelection('balsamiq')">Balsamiq</button>
								<button class="btn filter-button" onclick="filterSelection('google')">Google Analytics</button>
							</div>
						</div>
						<div class="all-projects grid">
		<!-- PROJECT 1                    -->
							<div class="portfolio-item js"> 
								<a href="project1.php" class="project-link filterDiv js php invision photoshop sass jquery google portfolio-item ">
									<figure>
										<img class="project-image" src="images/jeff-main.jpg" alt=" bcit landing page marina smirnova">
										<figcaption>
											<p>Lawyer's Website</p>
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
										</figcaption>
									</figure>
								</a>
							</div>
		<!-- PROJECT 2                    -->   
							<div class="portfolio-item js"> 
								<a href="project2.php" class="project-link filterDiv react invision portfolio-item ">
									<figure>
										<img class="project-image" src="images/react-main.png" alt=" bcit landing page marina smirnova">
										<figcaption>
											<p>React App with Projects</p>
											<div class="all-tool-icons">
												<img class="tool-icon" src="images/html-logo.jpg" alt="html logo">
												<img class="tool-icon" src="images/css-logo.png" alt="css logo">
												<img class="tool-icon" src="images/react.png" alt="react logo">
												<img class="tool-icon" src="images/invision-logo.jpg" alt="invision logo">
											</div>
										</figcaption>
									</figure>
								</a>
							</div>
		<!-- PROJECT 3                    --> 
							<div class="portfolio-item js"> 
								<a href="project3.php" class="project-link filterDiv js php jquery sass balsamiq google">
									<figure>
										<img class="project-image" src="images/oat-main.jpg" alt="client project bcit oat">
										<figcaption>
											<p>OAT Program Website</p>
											<div class="all-tool-icons">
												<img class="tool-icon" src="images/wordpress-logo.png" alt="wordpress logo">
												<img class="tool-icon" src="images/js-logo.png" alt="js logo">
												<img class="tool-icon" src="images/jquery-logo.png" alt="jQuery logo">
												<img class="tool-icon" src="images/sass-logo.png" alt="sass logo">
												<img class="tool-icon" src="images/php-logo.jpg" alt="php logo">
												<img class="tool-icon" src="images/google-logo.png" alt="google-logo">
											</div>  
										</figcaption>
									</figure>
								</a>
							</div>
		<!-- PROJECT 4                    -->  
							<div class="portfolio-item react"> 
								<a href="project4.php" class="project-link filterDiv js portfolio-item ">
									<figure>
										<img class="project-image" src="images/jsdesign1.png" alt="java script project">
										<figcaption>
											<p>JS RBG Color Game</p>
											<div class="all-tool-icons">
												<img class="tool-icon" src="images/html-logo.jpg" alt="html logo">
												<img class="tool-icon" src="images/css-logo.png" alt="css logo">
												<img class="tool-icon" src="images/js-logo.png" alt="js">
											</div>  
										</figcaption>
									</figure>
								</a>
							</div>	
		<!-- PROJECT 5                    -->     
							 <div class="portfolio-item react"> 
								<a href="project5.php" class="project-link filterDiv react ">
									<figure>
										<img class="project-image" src="images/react-project.png" alt="react project">
										<figcaption>
											<p>React News Website</p>
											<div class="all-tool-icons">
												<img class="tool-icon" src="images/html-logo.jpg" alt="html logo">
												<img class="tool-icon" src="images/css-logo.png" alt="css logo">
												<img class="tool-icon" src="images/react.png" alt="react logo">
											</div>
										</figcaption>
									</figure>
								</a>
							</div>
		<!-- PROJECT 6                    -->  
							<div class="portfolio-item photoshop"> 
								<a href="project6.php" class="project-link filterDiv photoshop ">
								<figure>
									<img class="project-image" src="images/photoshop.png" alt="photoshop project web design marina smirnova">
									<figcaption>
										<p>Photoshop Design Project</p>
										<div class="all-tool-icons">
											<img class="tool-icon" src="images/photoshop-logo.png" alt="photoshop logo">
										</div>
									</figcaption>
								</figure>
								</a>
							</div>
		<!-- PROJECT 7					 -->
							<div class="portfolio-item js"> 
								<a href="project7.php" class="project-link filterDiv php portfolio-item ">
									<figure>
										<img class="project-image" src="images/php-main.jpg" alt="php project marina smirnova">
										<figcaption>
											<p>PHP Students Database</p>
											<div class="all-tool-icons">
												<img class="tool-icon" src="images/html-logo.jpg" alt="html logo">
												<img class="tool-icon" src="images/css-logo.png" alt="css logo">
												<img class="tool-icon" src="images/php-logo.jpg" alt="php logo">
												
											</div>
										</figcaption>
									</figure>
								</a>
							</div>
		<!-- PROJECT 8 -->
							<div class="portfolio-item ">                       
								<a href="project8.php" class="project-link filterDiv sass js php jquery balsamiq google">
									<figure>
										<img class="project-image" src="images/portfolio-main.png" alt="portfolio site image">
										<figcaption>
										<p>Portfolio Website</p>
										<div class="all-tool-icons">
											<img class="tool-icon" src="images/html-logo.jpg" alt="html logo">
											<img class="tool-icon" src="images/css-logo.png" alt="css logo">
											<img class="tool-icon" src="images/js-logo.png" alt="js logo">
											<img class="tool-icon" src="images/jquery-logo.png" alt="jquery logo">
											<img class="tool-icon" src="images/sass-logo.png" alt="sass logo">
											<img class="tool-icon" src="images/google-logo.png" alt="google analytjics">
										</div>
									</figcaption>
									</figure>
								</a>
							</div>
						</div><!--end of all-projects grid-->
					</div>
					<div class="wrapper-scroll-button">
						<span>
							<span class="scroll-btn">Up</span>
						</span>
					</div>
				</div>
			
				<div class="right-side">
					<div class="portfolio-right" id="myBtnContainer">
						<h2>Tools filter:</h2>
						<button class="btn filter-button active" onclick="filterSelection('all')"> See All</button>
						<button class="btn filter-button" onclick="filterSelection('sass')">SASS</button>
						<button class="btn filter-button" onclick="filterSelection('js')">JavaScript</button>
						<button class="btn filter-button" onclick="filterSelection('jquery')">JQuery</button>
						<button class="btn filter-button" onclick="filterSelection('react')">React</button>
						<button class="btn filter-button" onclick="filterSelection('php')">PHP</button>
						<button class="btn filter-button" onclick="filterSelection('photoshop')">Photoshop</button>
						<button class="btn filter-button" onclick="filterSelection('invision')">InVision</button>
						<button class="btn filter-button" onclick="filterSelection('balsamiq')">Balsamiq</button>
						<button class="btn filter-button" onclick="filterSelection('google')">Google Analytics</button>
					</div>
				</div>
			</div> 
		</main>
		<?php 
			include 'footer.php';
			?>
		<script src="scripts/script-menu-overlay.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="scripts/filter.js"></script>
		<script src="scripts/scroll-btn.js"></script>
	</body>
</html>
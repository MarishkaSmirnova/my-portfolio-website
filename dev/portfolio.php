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
					<div class="portfolio-left animate__animated animate__zoomIn">
						<h2 class="main-title">Projects:</h2>
						<div class="portfolio-left-filter">
							<h2>Tools filter:</h2>
							<div class="portfolio-left-filter-buttons" id="myBtnContainer">
								<?php 
									include 'filter-buttons.php';
									?>
							</div>
						</div>
						<div class="all-projects grid">
		<!-- PROJECT 1                    -->
							<div class="portfolio-item js"> 
								<div href="project1.php" class="hovereffect project-link filterDiv js php invision photoshop sass jquery google portfolio-item">
									<img class="project-image" src="images/jeff-main.png" alt="bcit landing page marina smirnova">
										<div class="overlay">
											<h2 class="project-name">Lawyer's Website</h2>
											<p> html5|sass|js|jquery|invision|
												<br>
												adobe photoshop|google analytics</p>
											<p>
												<a href="project1.php">see project</a>
											</p>
										</div>
								</div>
							</div>
		<!-- PROJECT 2                    -->   
							<div class="portfolio-item js"> 
								<div href="project2.php" class="hovereffect project-link filterDiv react invision portfolio-item portfolio-item">
									<img class="project-image" src="images/react-main.png" alt="bcit react landing page marina smirnova">
										<div class="overlay">
											<h2 class="project-name">React.js projects</h2>
											<p> html5|css3|react.js|invision|</p>
											<p>
												<a href="project2.php">see project</a>
											</p>
										</div>
								</div>
							</div>
		<!-- PROJECT 3                    --> 
							<div class="portfolio-item js"> 
								<div href="project3.php" class="hovereffect project-link filterDiv wordpress js php jquery sass balsamiq google portfolio-item">
									<img class="project-image" src="images/oat-main.png" alt="client project bcit oat">
										<div class="overlay">
											<h2 class="project-name">WordPress OAT Website</h2>
											<p> wordpress|php|sass|js|
												<br>
												jquery|google analytics</p>
											<p>
												<a href="project3.php">see project</a>
											</p>
										</div>
								</div>
							</div>
		<!-- PROJECT 4                    -->  
							<div class="portfolio-item js"> 
								<div href="project4.php" class="hovereffect filterDiv project-link js ">
									<img class="project-image" src="images/jsdesign1.png" alt="javascript project">
										<div class="overlay">
											<h2 class="project-name">JS Color Game</h2>
											<p> html5|css3|js<p>
												<a href="project4.php">see project</a>
											</p>
										</div>
								</div>
							</div>
		<!-- PROJECT 5                    -->     
							<div class="portfolio-item js"> 
								<div href="project5.php" class="hovereffect project-link filterDiv react">
									<img class="project-image" src="images/react-project.png" alt="react project">
										<div class="overlay">
											<h2 class="project-name">React.js News Website</h2>
											<p> html5|css3|react.js<p>
												<a href="project5.php">see project</a>
											</p>
										</div>
								</div>
							</div>
		<!-- PROJECT 6                    -->  
							<div class="portfolio-item js"> 
								<div href="project6.php" class="hovereffect project-link photoshop filterDiv">
									<img class="project-image" src="images/photoshop.png" alt="photoshop project web design marina smirnova">
										<div class="overlay">
											<h2 class="project-name">Photoshop Design Project</h2>
											<p> adobe photoshop<p>
												<a href="project6.php">see project</a>
											</p>
										</div>
								</div>
							</div>
		<!-- PROJECT 7					 -->
							<div class="portfolio-item js"> 
								<div href="project7.php" class="hovereffect project-link photoshop filterDiv">
									<img class="project-image" src="images/php-main.jpg" alt="php project marina smirnova">
										<div class="overlay">
											<h2 class="project-name">PHP Students Database</h2>
											<p>html5|css3|php<p>
												<a href="project7.php">see project</a>
											</p>
										</div>
								</div>
							</div>
		<!-- PROJECT 8 -->
							<div class="portfolio-item js"> 
								<div href="project8.php" class="hovereffect project-link filterDiv sass js php jquery photoshop balsamiq google">
									<img class="project-image" src="images/portfolio-main.png" alt="portfolio site image">
										<div class="overlay">
											<h2 class="project-name">Portfolio Website</h2>
											<p>html5|sass|js|php|jquery|
												<br>
												adobe photoshop|google analytics
											</p>
											<p>
												<a href="project8.php">see project</a>
											</p>
										</div>
								</div>
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
					<div class="portfolio-right animate__animated animate__zoomIn animate__delay-1s" id="myBtnContainer">
					<h2>Tools filter:</h2>
					<?php 
						include 'filter-buttons.php';
						?>
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
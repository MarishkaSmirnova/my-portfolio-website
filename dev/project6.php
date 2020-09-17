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
						<section class="project-info left-section about-section animate__animated animate__zoomIn" 
								id="project">
							<div class="project-textpart">
								<div class="next-prev-buttons">
									<a href="project4.php" class="prev-button">
										<span class="prev-btn">Prev</span>
										<i class="fas fa-arrow-left"></i>
									</a>	
									<a href="project7.php"class="next-button">
										<span class="next-btn">Next</span>
										<i class="fas fa-arrow-right"></i>
									</a>	
								</div>
								<h3>About the project</h3>
								<div class="tools-in-project">
									<h5>Tools used:</h5>
									<div class="all-tool-icons">
										<img class="tool-icon" src="images/photoshop-logo.png" alt="photoshop logo">
									</div> 
								</div>	
								<p>One of the assignments on my TWD BCIT course was to create website design with the help of Adobe Photoshop and Adobe XD.</br>
									Anti-stress colouring pictures are really trendy nowadays and I came up with an idea to make a website where you can do colouring paintings online as well as order books with colouring pictures.</p>
							</div>
							<img class="about-project-image" src="images/phlaptop.jpg" alt="laptop photoshop project" class="projectpiece">
						</section>
						<section class="project-info left-section animate__animated animate__zoomIn" 
								id="design">
							<div class="project-textpart">
								<h3>Design Process</h3>
								<p>I made clean user friendly design with main accents on colouring pictures.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/photoshopdes1.png" alt="" class="projectpiece"></div>
								<div><img src="images/photoshopdes.png" alt="" class="projectpiece"></div>
								<div><img src="images/photoshopdes2.png" alt="" class="projectpiece"></div>
								<div><img src="images/photoshopdes3.png" alt="" class="projectpiece"></div>
								<div><img src="images/photoshopdes4.png" alt="" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section animate__animated animate__zoomIn" 
								id="development">
							<div class="project-textpart">
								<h3>Development Process</h3>
								<p>I’m planning to develop this website in future.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/coming-soon.jpg" alt="" class="projectpiece"></div>
								<div><img src="images/coming-soon.jpg" alt="" class="projectpiece"></div>
								<div><img src="images/coming-soon.jpg" alt="" class="projectpiece"></div>
							</div>
						</section>
					</div>
					<?php 
						include 'scroll-button.php';
						?>	
				</div>

				<div class="right-side">
					<div class="project-right animate__animated animate__zoomIn animate__delay-1s">
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
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
									<a href="project5-1.php" class="prev-button">
										<span class="prev-btn">Prev</span>
										<i class="fas fa-arrow-left"></i>
									</a>	
									<a href="project7.php"class="next-button">
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
												<p>Adobe Photoshop</p>
												<p>Adobe XD</p>
											</div>
										</div>				
									</div>
								</div>	
								<p>One of the assignments on my TWD BCIT course was to create style guide and website design with the help of Adobe Photoshop and Adobe XD.</br>
									Anti-stress colouring pictures are really trendy nowadays and I came up with an idea to make a website where you can do colouring paintings online as well as order books with colouring pictures.</p>
							</div>
							<img class="about-project-image" src="images/styleguide.jpg" alt="style guide photoshop project" class="projectpiece"> 
						</section>
						<section class="project-info left-section design animate__animated animate__fadeIn" 
								id="design">
							<div class="project-textpart">
								<h3>Design</h3>
								<p>I made clean user friendly design with main accents on colouring pictures in Adobe photoshop and website desktop prototype in Invision.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/photoshopdes1.png" alt="" class="projectpiece"></div>
								<div><img src="images/photoshopdes.png" alt="" class="projectpiece"></div>
								<div><img src="images/photoshopdes2.png" alt="" class="projectpiece"></div>
								<div><img src="images/photoshopdes3.png" alt="" class="projectpiece"></div>
								<div><img src="images/photoshopdes4.png" alt="" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section development animate__animated animate__fadeIn" 
								id="development">
							<div class="project-textpart">
								<h3>Development</h3>
								<p>This project is design only.</p>
							</div>
							<!-- <div class="slick-slider">
								<div><img src="images/coming-soon.jpg" alt="" class="projectpiece"></div>
								<div><img src="images/coming-soon.jpg" alt="" class="projectpiece"></div>
								<div><img src="images/coming-soon.jpg" alt="" class="projectpiece"></div>
							</div> -->
						</section>
						<button class="project-magic-button magic-button btn filter-button animate__animated animate__fadeIn" 
								id="project-magic">
							<a href="https://marina689143.invisionapp.com/console/share/FU26WB3LKX/521055922" target="_blank">View Live</a>
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
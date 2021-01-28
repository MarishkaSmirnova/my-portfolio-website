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
									<a href="project4.php" class="prev-button">
										<span class="prev-btn">Prev</span>
										<i class="fas fa-arrow-left"></i>
									</a>	
									<a href="project6.php"class="next-button">
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
												<p>Debut theme</p>
												<p>Liquid</p>
											</div>
										</div>				
									</div>
								</div>	
								<p>This Shopify shop was partially created during my front-end development course in BCIT and was finalized with custom Liquid code later this year after completing Liquid development course on Udemy.
									It is made for real gingerbread cooker who enjoy doing it as a hobby.</p>
							</div>
							<img class="about-project-image" src="images/gingerlaptop.jpg" alt="gingershop project" class="projectpiece" alt="ginger shop shopify project image">
						</section>
						<section class="project-info left-section animate__animated animate__fadeIn" 
								id="design">
							<div class="project-textpart">
								<h3>Design</h3>
								<p>Design part is based on Debut theme customazation capabilities and my own ideas created with Liquid code.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/ginger-tabphone.jpg" alt="ginger project design" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section animate__animated animate__fadeIn" 
								id="development">
							<div class="project-textpart">
								<h3>Development</h3>
								<p> After completing Liquid Development code I enjoed doing some custom settings on "About" and "Contacts" pages.
								</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/ginger-code.png" alt="ginger code" class="projectpiece"></div>
								<div><img src="images/ginger-code2.png" alt="ginger code" class="projectpiece"></div>
							</div>
						</section>
						<button class="project-magic-button magic-button btn filter-button animate__animated animate__fadeIn" 
								id="project-magic">
							<a href="https://bcit-7788.myshopify.com" target="_blank">View Live</a>
						</button>
						<?php 
						include 'scroll-button.php';
						?>
					</div>
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
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
												<p>Adobe Photoshop</p>
												<p>InVision</p>
											</div>
										</div>			
									</div>
								</div>	
								<p>This design project was created in Adobe Photoshop for further file transition to InVision and creating interactive experience by adding links to menu pages.</p>
							</div>
							<img class="about-project-image" src="images/deco-main.png" alt="gingershop project" class="projectpiece" alt="ginger shop shopify project image">
						</section>
						<section class="project-info left-section design animate__animated animate__fadeIn" 
								id="design">
							<div class="project-textpart">
								<h3>Design</h3>
								<p class="one-line">For creating a website prototype in InVision I made a quick draft of handmade jewellery shop in Adobe photoshop.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/deco2.png" alt="deco project design" class="projectpiece"></div>
								<div><img src="images/deco3.png" alt="deco project design" class="projectpiece"></div>
								<div><img src="images/deco4.png" alt="deco project design" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section development animate__animated animate__fadeIn" 
								id="development">
							<div class="project-textpart">
								<h3>Development</h3>
								<p class="one-line">This project is website design prototype only.</p>
							</div>
							<!-- <div class="slick-slider">
								<div><img src="images/ginger-code.png" alt="ginger code" class="projectpiece"></div>
								<div><img src="images/ginger-code2.png" alt="ginger code" class="projectpiece"></div>
							</div> -->
						</section>
						<button class="project-magic-button magic-button btn filter-button animate__animated animate__fadeIn" 
								id="project-magic">
							<a href="https://projects.invisionapp.com/d/main?origin=v7#/console/16617940/344611139/preview?scrollOffset=0" target="_blank">View Live</a>
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
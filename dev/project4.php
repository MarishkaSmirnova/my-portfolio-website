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
									<a href="project3.php" class="prev-button">
										<span class="prev-btn">Prev</span>
										<i class="fas fa-arrow-left"></i>
									</a>	
									<a href="project5.php"class="next-button">
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
												<p>SASS</p>
											</div>
										</div>
										<div class="tool-column">
											<div class="tool-list">
												<p>JavaScript</p>
												<p>jQuery</p>
											</div>
										</div>				
									</div>
								</div>	
								<p>This game is a great way for web developers and designers to train RGB color model skills.
									RGB colour system is not really intuitive at first and very different from most color systems that people used to work with. This system is based on that there are 3 primary colours : red, green and blue. The amount of each one ranges from 0 to 255 and all that we need are those 3 colours in different combinations ( from 0 to 255) to make any color that we could ever want.</p>
							</div>
							<img class="about-project-image" src="images/jslaptop.jpg" alt="" class="projectpiece">
						</section>
						<section class="project-info left-section animate__animated animate__fadeIn" 
								id="design">
							<div class="project-textpart">
								<h3>Design</h3>
								<p>The base of this game has been done by me during one of the Web Developer Bootcamp on Udemy. I added and styled  the starting page by myself and changed the design of the game to match the main page.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/jsdesign2.png" alt="" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section animate__animated animate__fadeIn" 
								id="development">
							<div class="project-textpart">
								<h3>Development</h3>
								<div class="sourse-code">
									<i class="fab fa-github"></i>
									<a href="https://github.com/MarishkaSmirnova/color-game-js" target="_blank">sourse code</a>
								</div>
								<p>When you push ‘Start’ button, the page with the game is loaded and we see six random colours. These are always random and one of those colours is listed on the top in numbers. Our job is to pick which one.
									If we choose the wrong color it disappears and we see ‘Try again!’ message. When we choose the right color, the message says ‘Correct!’ and all circles plus top background color part changes to this color.
									There’s an Easy mode also, where the player has to pick from 3 color instead of 6.
									We also can reset the game at two points of the game: by choosing ’New colours’ during the game and by choosing ‘Try again’ after the player has chosen the correct color. 
									The game page is responsive. However the main page made with HTML Canvas works only on screen from 1700px wide and more.
								</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/js1.png" alt="js game" class="projectpiece"></div>
								<div><img src="images/js2.png" alt="js code" class="projectpiece"></div>
								<div><img src="images/js3.png" alt="javascript game" class="projectpiece"></div>
							</div>
						</section>
						<button class="project-magic-button magic-button btn filter-button animate__animated animate__fadeIn" 
								id="project-magic">
							<a href="projects/jsGame/index.html" target="_blank">View Live</a>
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
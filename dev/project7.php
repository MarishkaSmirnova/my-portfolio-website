<!DOCTYPE html>
<html lang="en">

	<?php 
		include 'head.php';
		?>
	<body>
		<!-- <?php 
			include 'header.php';
			?> -->
		<main>
			<div class="container">
				<div class="left-side" id="left-side">
					<div class="project-me-left">
						<section class="project-info left-section about-section" id="project">
							<div class="project-textpart">
								<div class="next-prev-buttons">
									<a href="project6.php" class="prev-button">
										<span class="prev-btn">Prev</span>
										<i class="fas fa-arrow-left"></i>
									</a>	
									<a href="project8.php"class="next-button">
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
										<img class="tool-icon" src="images/php-logo.jpg" alt="php logo">

									</div>  
								</div>
								<p>This project is one of the assignments I had during TWD course in BCIT. I created a table with students IDs, first names and last names, and added 2 buttons to to each student  which enables to delete or edit info.</p>
							</div>
							<img class="about-project-image" src="images/phplaptop.jpg" alt="client project laptop view" class="projectpiece">
						</section>
						<section class="project-info left-section" id="design">
							<div class="project-textpart">
								<h3>Design Process</h3>
								<p>Design part were given to copy from instructor’s example.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/php-design.jpg" alt="php design" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section" id="development">
							<div class="project-textpart">
								<h3>Development Process</h3>
								<div class="sourse-code">
									<i class="fab fa-github"></i>
									<a href="https://github.com/MarishkaSmirnova/php-students-database" target="_blank">sourse code</a>
								</div>
								<p>I made a web application that allows a user to administer the students table on the students database. The user is able to view the current state of the table, as well as add, delete or edit a record. 
									Main PHP page displays the entire students table as an HTML table, one record per row. The background color of each row is alternated. There is an “Add Student” link above the table. There’re also two additional data cells per row, one containing a “Delete” and the other a “Update” link. 
									The Update and Delete links send record-specific information via a GET query string to the scripts responsible for updating and deleting from the database.</p>
							</div>
							<div class="slick-slider">
								<div><img src="images/php-development.jpg" alt="php development marina smirnova" class="projectpiece"></div>
							</div>
						</section>
						
						<button class="project-magic-button magic-button btn filter-button" id="project-magic">
							<a href="projects/php-students-database/index.php">View Live</a>
						</button>
					</div>
					<?php 
						include 'scroll-button.php';
						?>
				</div>

				<div class="right-side">
					<div class="project-right">
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
		<script src="scripts/script-menu-overlay.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="slick/slick/slick.min.js"></script> 
		<script src="scripts/slickslider.js"></script>
		<script src="scripts/scroll-btn.js"></script>
	</body>
</html>
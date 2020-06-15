<!DOCTYPE html>
<html lang="en">
	<?php 
		include 'head.php';
		?>
	<body>
		<header>
			<div class="menu-container">
				<!-- logo -->
				<div class="logo-container">
					<a href="index.html">
						<img src="images/LOgo.png" class="logo">
					</a>
					<a href="index.html" class="text-logo">
						<h1>Marina Smirnova</h1>
						<h2>Web Design & Development</h2>
					</a>
				</div>
				<!--end of logo-->
				<!-- popup-content -->
				<button class="menu" id="menu">
					<span class="button-content" tabindex="-1">
						<span class="text">Menu</span>
						<span class="bar"></span>
					</span>
				</button>
				<!-- end popup-content -->
				<nav id="main-navigation">
					<ul>
						<li class="link-hover nav-link">
							<a href="about.html" class="link active">about</a>
						</li>
						<li class="link-hover nav-link">
							<a href="portfolio.html" class="link ">portfolio</a>
						</li>
						<li class="link-hover nav-link">
							<a href="contact.php" class="link ">contact</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
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
									<a href="project4.html" class="prev-button">
										<span class="prev-btn">Prev</span>
										<i class="fas fa-arrow-left"></i>
									</a>	
									<a href="project6.html"class="next-button">
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
									</div>  
								</div>
								<p>This News Website was created as one of the assignments on React course in BCIT. 
									The goal of this project was to create news website using News API.
								</p>
							</div>
							<img class="about-project-image" src="images/react-laptop-image.jpg" alt="react project photo" class="projectpiece">
						</section>
						<section class="project-info left-section" id="design">
							<div class="project-textpart">
								<h3>Design Process</h3>
								<p>I used SASS to organize css files and used grid system to create the layout.</p>
								<p>The design task for this assignment included:<br/> 
									- show the publishedAt date in a nicely formatted manner.<br/>
									- display nicely formatted titles, descriptions and urls.</p>
							</div>
							<div class="slick-slider">
							<div><img src="images/reactdesign1.png" alt="react design project" class="projectpiece"></div>
							</div>
						</section>
						<section class="project-info left-section" id="development">
							<div class="project-textpart">
								<h3>Development Process</h3>
								<div class="sourse-code">
									<i class="fab fa-github"></i>
									<a href="https://github.com/MarishkaSmirnova/news-database-react" target="_blank">sourse code</a>
								</div>
								<p>The development task for this assignment included:<br/>

									- to use the React Routing to create menu in the header which allows navigation between the Main and the About page. This About page does not to be fancy, you can just include the information about the developer.<br/>
									- to apply formatting to each news image with a child component. You may want to apply size or border styling or some other type of formatting.<br/>
									- allow the user to enter and submit a news topic in the search box to change the news article listed. Use onClick() for this.<br/>
									- the latest news topic submitted should be stored in a cookie and this topic is always used when the user revisits your application.<br/>
									- give credits to newsapi.org in the footer of your application.<br/>
									- use the setCookie() and getCookie() functions in a separate service file. </p>
							</div>
							<div class="slick-slider">
								<div><img src="images/react1.png" alt="react code" class="projectpiece"></div>
								<div><img src="images/react2.png" alt="react code snippet" class="projectpiece"></div>
								<div><img src="images/react3.png" alt="react" class="projectpiece"></div>
							</div>
						</section>
						
						<button class="project-magic-button magic-button btn filter-button" id="project-magic">
							<a href="projects/newsApp/" target="_blank">View Live</a>
						</button>
						<?php 
						include 'scroll-button.php';
						?>
					</div>
				</div>
				<div class="right-side">
					<div class="project-right">
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
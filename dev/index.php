<!DOCTYPE html>
<html lang="en">
	<?php 
		include 'head.php';
		?>
	<body onload="myFunction()">
		<div class="all-main-page" id="main" style="display:none;">
			<?php 
				include 'header.php';
				?>
			<main >
				<div class="container">
					<div class="left">
						<div class="home-main-info" data-aos="zoom-in">>
							<h2 class="email-title">
								<div class="circle1">.</div>
								<a href="mailto:hello@msmirnova.ca">hello@msmirnova.ca</a>
							</h2>
							<h1 class="main-title animated fadeIn">Creative web designer <br> and web developer</h1>
							<p class="animated backInDown">I'm a digital marketer who generates ideas and put it into beautiful and crafted web experiences.</p>
						</div>
						
					</div>
					<div class="right">
						<div class="home-project_box">
							<a class="hompage-project-link" href="project1.php">  
								<p>Website for</br> the lawyer</p>
								<div class="project-image image3">
									<img  src="images/jeff-front.png" data-aos="zoom-in" lt="project wordpress web developer vancouver">
									<img class="img-top" src="images/jeff.png" alt="project web developer vancouver">
								</div>		
							</a> 
						</div>
						<div class="home-project_box">
							<a class="hompage-project-link" href="project2.php">  
								<p>BCIT React<br> course projects</p>
								<div class="project-image image">
									<img  src="images/girl-front.png" data-aos="zoom-in" alt="project wordpress web developer vancouver">
									<img class="img-top" src="images/girl.png" alt="project web developer vancouver">
								</div>		
							</a> 
						</div>
						<div class="home-project_box box1">
							<a class="hompage-project-link" href="project3.php">  
								<p>AOT program </br>students website</p>
								<div class="project-image image">
									<img  src="images/paperclip-front.png" data-aos="zoom-in" alt="project wordpress web developer vancouver">
									<img class="img-top" src="images/paperclip.png" alt="project web developer vancouver">
								</div>
							</a> 
						</div>
						<div class="home-project_box box3">
							<a class="hompage-project-link" href="project4.php">  
								<p>JavaScript</br> Color Game</p>
								<div class="project-image image2">
									<img  src="images/rbggame-front.png" data-aos="zoom-in" alt="javascript project web developer vancouver">
									<img class="img-top" src="images/rbggame1.png" alt="bcit project web developer vancouver">
								</div>
							</a> 
						</div>
						<!-- <div class="home-project_box box2">
							<a class="hompage-project-link" href="project5.php">  
								<p>React News</br> Database</p>
								<div class="project-image image">
									<img  src="images/news-front.png" alt="react project web developer vancouver">
									<img class="img-top" src="images/news.png" alt="react project web developer vancouver">
								</div>
							</a> 
						</div> -->
						<div class="home-project_box box5">
							<a class="hompage-project-link" href="project6.php">  
								<p>Photoshop</br> Web Design</p>
								<div class="project-image image">
									<img  src="images/background-front.png" data-aos="zoom-in" alt="photoshop project web developer vancouver">
									<img class="img-top" src="images/background.png" alt="photoshop project web developer vancouver">
								</div>
							</a> 
						</div>
						<div class="home-project_box box4">
							<a class="hompage-project-link" href="project7.php">  
								<p>PHP Database</p>
								<div class="project-image image2">
									<img  src="images/php-front.png" data-aos="zoom-in" alt="php project web developer vancouver">
									<img class="img-top" src="images/php.png" alt="bcit php project web developer vancouver">
								</div>
							</a> 
						</div>
						<div class="home-project_box box6">
							<a class="hompage-project-link" href="project8.php">  
								<p>Portfolio</br> Website</p>
								<div class="project-image image">
									<img  src="images/heart-front.jpg" data-aos="zoom-in" alt="javascript sass project web developer vancouver">
									<img class="img-top" src="images/heart.jpg" alt="javascript sass project web developer vancouver">
								</div>
							</a> 
						</div>
						<div class="wrapper-scroll-button">
							<span>
								<span class="mainpage-scroll-btn">Up</span>
							</span>
						</div>
					</div>
				</div><!--end of container-->
			</main>
			<?php 
			include 'footer.php';
			?>
			<script src="scripts/loading-page.js"></script>
			<script src="scripts/script-menu-overlay.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="scripts/scroll-btn.js"></script>
			<script src="scripts/active.js"></script>
		
		</div> <!--end of all-main-page-->
		<!--loading page code-->
		<div class="spinner" id="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
	    </div>
	<!--end of loading page code-->
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script>
			AOS.init({once:"true"});
		</script>
	</body>

</html>
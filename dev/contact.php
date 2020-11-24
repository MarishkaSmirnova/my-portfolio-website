<!DOCTYPE html>
<html lang="en">
	<?php 
		include 'head.php';
		?>  
	<body>
		 <?php include 'header.php'; ?> 
		<main>
			<div class="container">
				<div class="left-side left-side-contact" id="left-side">
					<div class="contact-left animate__animated animate__zoomIn">
							<p class="greering-text">If you have any questions or comments, feel free to contact me!</p>
							<a href="mailto:hello@msmirnova.ca">hello@msmirnova.ca</a>
							<!-- <p><i class="fas fa-map-marker-alt"></i></p> -->
							<!-- <p><i class="fas fa-map-marker-alt"></i>Vancouver, Beautiful British Columbia :)</p>  -->
							<a href="https://www.linkedin.com/in/marina-smirnova-4a0a9a114/?locale=en_US">
								<img src="images/linkedin-logo.png" alt="linkedIn link">
							</a>
							<a href="https://github.com/MarishkaSmirnova">
								<img src="images/github-logo.png" alt="gitHub">
							</a>
							<a href="https://twitter.com/MarinaSmirnov7">
								<img src="images/twitter.png" alt="gitHub">
							</a>
					</div>
					<form action="contact-form.php" 
							method="post" 
							name="intro" 
							class="form-intro animate__animated animate__zoomIn animate__delay-1s" 
							id="form-intro">
						<div class="basic-info">
							<h2 class="form-title">
								<div class="circle1">.</div>Feel free to contact me!
							</h2>
							<div class="name">
								<label for="name">Name: </label>
								<br>
								<input placeholder="Enter your name" type="text" name="name" class="input">
								<br>
							</div>
							<div class="email">
								<label for="email">Email: </label>
								<br>
								<input placeholder="Enter your email" type="email" name="email" class="input">
								<br>
							</div>
							<div class="message">
								<label for="message">Message:</label>
								<br>
								<textarea placeholder="Enter your message" name="message" id="message" cols="30" rows="10" class="textarea"></textarea>
								<br>
							</div>
							<div class="button-submit">
								<input type="submit" name="submit" value="Submit" class="sign_up_button btn filter-button">
							</div>
						</div>	
					</form>
				</div>
				
				<div class="right-side">
					<div class="contact-right">
					<?php @session_start();
						if(isset($_SESSION['errormessage'])){
						echo "<b>" . $_SESSION['errormessage'] . "</b>";
						unset($_SESSION['errormessage']);
						}
						if(isset($_SESSION['success'])){
							echo "<b>" . $_SESSION['success'] . "</b>";
							unset($_SESSION['success']);
							}
						?> 
						<form action="contact-form.php" method="post" name="intro" class="form-intro" id="form-intro">
							<div class="basic-info">
								<h2 class="form-title">
									<div class="circle1">.</div>Let's get in touch:
								</h2>
								<div class="name">
									<label for="name">Name: </label>
									<br>
									<input placeholder="Enter your name" type="text" name="name" class="input">
									<br>
								</div>
								<div class="email">
									<label for="email">Email: </label>
									<br>
									<input placeholder="Enter your email" type="email" name="email" class="input">
									<br>
								</div>
								<div class="message">
									<label for="message">Message:</label>
									<br>
									<textarea placeholder="Enter your message" name="message" id="message" cols="30" rows="10" class="textarea"></textarea>
									<br>
								</div>
								<div class="button-submit">
									<input type="submit" name="submit" value="Submit" class="sign_up_button btn filter-button">
								</div>
							</div>	
						</form>
					</div>
				</div>
			</div> 
		</main>
		 <?php include 'footer.php'; ?> 
		<script src="scripts/script-menu-overlay.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="scripts/filter.js"></script>
	</body>
</html>
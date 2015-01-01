<?
	$page = "home";
	$pageTitle = "";
	$pageDesc = "Harris Christiansen is an accomplished software developer, hardware hacker, and problem solver from Salt Lake City, Utah. He is currently attending Purdue University studying Computer Science.";
	$pageKeywords = "Harris, Christiansen, Software Developer, Planet Maelstrom, Forumzbb, Harris C, Utah, Salt Lake City, Purdue, Portfolio, Hackathons, PHP, Python, OpenCV, Java, Vuforia, Quadcopter, Drone, iDrone, Javascript, Unity, C#, Maya";
	require($_SERVER['DOCUMENT_ROOT']."/header.php");
?>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Harris Christiansen</h2>
					<p>Hardware Hacker. Software Developer. Project Leader.</p>
				</div>
			</section>

		<!-- One -->
			<section id="about" class="wrapper style1 special">
				<div class="container">
						<header class="major">
							<h2>Born and Raised<br />
							In Salt Lake City, Utah</h2>
						</header>
						<p style="padding-bottom: 4em;">Today I attend Purdue University in West Lafayette, Indiana. I spend my time traveling the nation attending hackathons, solving problems and exploring new ideas. I am currently working on developing the future of drone technologies with the startup, iDrone.</p>
				</div>
			</section>
		
		<!-- Showcase -->
			<section id="showcase" class="wrapper style2 special">
				<div class="container">
					<header class="major">
						<h2>Recent Projects</h2>
					</header>
					<div class="row">
						<div class="4u 12u(2)">
							<section class="image-feature">
								<a href="http://challengepost.com/software/ifollow-quadcopter" target="_blank">
									<header>
										<h3>iFollow</h3>
									</header>
									<span class="image fit"><img src="images/projects/hacksc.jpg" alt="HackSC iFollow Quadcopter" /></span>
									<footer>
										<p>Nov 2014 - Vision processing on a quadcopter for follow me and search+rescue.</p>
									</footer>
								</a>
							</section>
						</div>
						<div class="4u 12u(2)">
							<section class="image-feature">
								<a href="http://challengepost.com/software/virtual-builder" target="_blank">
									<header>
										<h3>Virtual Builder</h3>
									</header>
									<span class="image fit"><img src="images/projects/hackrpi.png" alt="HackRPI Virtual Builder" /></span>
									<footer>
										<p>Nov 2014 - Create your map in the real world, explore it in 3D in our app.</p>
									</footer>
								</a>
							</section>
						</div>
						<div class="4u 12u(2)">
							<section class="image-feature">
								<a href="/projects">
									<header>
										<h3>Planet Maelstrom</h3>
									</header>
									<span class="image fit"><img src="images/projects/pm.png" alt="Planet Maelstrom" /></span>
									<footer>
										<p>June 2014 - 3D MMORPG Video Game Builder, Made Using Unity Engine</p>
									</footer>
								</a>
							</section>
						</div>
					</div>
				</div>
			</section>
		
		<!-- Bullet Points -->
			<section id="skills" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Skills</h2>
					</header>
					<div class="row">
						<div class="6u 12u$(2)">
							<section class="feature">
								<i class="icon fa-gears"></i>
								<h3>Embedded Software</h3>
								<h5 class="advanced">Experience: Advanced</h5>
								<p style="padding-bottom: 0.2em;">Arduino, Python, Java</p>
								<h5 class="beginner">Beginner: C++</h5>
							</section>
						</div>
						<div class="6u$ 12u$(2)">
							<section class="feature">
								<i class="icon fa-eye"></i>
								<h3>Computer Vision</h3>
								<h5 class="intermediate">Experience: Intermediate</h5>
								<p>OpenCV and Qualcomm FastCV+Vuforia</p>
							</section>
						</div>
						<div class="6u 12u$(2)">
							<section class="feature">
								<i class="icon fa-newspaper-o"></i>
								<h3>Frontend Web Development</h3>
								<h5 class="intermediate">Experience: Intermediate</h5>
								<p>HTML5, CSS3, Javascript, JQuery, and Ajax</p>
							</section>
						</div>
						<div class="6u$ 12u$(2)">
							<section class="feature">
								<i class="icon fa-cloud"></i>
								<h3>Backend Web Development</h3>
								<h5 class="advanced">Experience: Advanced</h5>
								<p style="padding-bottom: 0.2em;">PHP + experience with a variety of web hosting platforms.</p>
								<h5 class="beginner">Beginner: NodeJS</h5>
							</section>
						</div>
						<div class="6u 12u$(2)">
							<section class="feature">
								<i class="icon fa-mobile"></i>
								<h3>Mobile</h3>
								<h5 class="beginner">Experience: Beginner</h5>
								<p>iOS (Swift) and Android</p>
							</section>
						</div>
						<div class="6u$ 12u$(2)">
							<section class="feature">
								<i class="icon fa-gamepad"></i>
								<h3>Game Development</h3>
								<h5 class="intermediate">Experience: Intermediate</h5>
								<p>Unity Engine and C#</p>
							</section>
						</div>
						<div class="6u 12u$(2)">
							<section class="feature">
								<i class="icon fa-paint-brush"></i>
								<h3>Design</h3>
								<h5 class="intermediate">Experience: Intermediate</h5>
								<p>Autodesk Maya and Inventor, Adobe Photoshop and Illustrator, and Apple Final Cut.</p>
							</section>
						</div>
						<div class="6u$ 12u$(2)">
							<section class="feature">
								<i class="icon fa-briefcase"></i>
								<h3>Tools</h3>
								<h5 class="advanced">Experience: Advanced</h5>
								<p>GitHub</p>
							</section>
						</div>
					</div>
					<a href="/resume_HarrisChristiansen.pdf" class="button special small"><i class="icon fa-download"></i> Download Resume</a>
				</div>
			</section>
			
		<!-- Contact -->
			<section id="contact" class="wrapper style4 special">
				<div class="container 75%">
					<header class="major">
						<h2>Contact</h2>
					</header>
					<form method="post" action="/contact">
						<div class="row uniform 50%">
							<div class="6u 12u(3)"><input type="text" name="name" id="name" placeholder="Name" /></div>
							<div class="6u 12u(3)"><input type="email" name="email" id="email" placeholder="Email" /></div>
						</div>
						<div class="row uniform 50%">
							<div class="12u"><textarea name="message" id="message" placeholder="Message" rows="8"></textarea></div>
						</div>
						<div class="row uniform">
							<div class="12u">
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>			

<?
	require($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>
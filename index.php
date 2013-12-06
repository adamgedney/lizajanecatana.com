<?php require_once 'controllers/mailer.php'; ?>
<!DOCTYPE html>
<html lang="en">
<!-- Thanks for checking out my code!!


	Copyright Adam Gedney 11/8/13
	contact: adam.gedney@gmail.com
	http://adamgedney.com

"Good UI design is humble.” – Jono DiCarlo -->
<head>
	<title>Liza Jane Catana</title>

	<!-- meta -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width"/>

	<!-- favicon & humans.txt -->
	<link type="text/plain" rel="author" href="/humans.txt" />
	<link rel="shortcut icon" href="http://adamshields.com/favicon.ico" />

	<!-- Googel fonts -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
	

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/jquery.sidr.dark.css" />

	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/lightbox.css" />

</head>
	<body>

		<header>
			<h1>Liza Jane Catana</h1>

			<a class="menu-button" id="menu" href="#sidr" ><img src="images/menu.png" alt="menu button"/></a>

			<div id="sidr">
				<nav>
					<ul>
						<li><a class="slow-jump" id="bio-nav" href="#bio">Bio</a></li>
						<li><a class="slow-jump" href="#videos">Videos</a></li>
						<li><a class="slow-jump" href="#photos">Photos</a></li>
						<li><a class="slow-jump" href="#contact">Contact</a></li>
					</ul>
				</nav>
			</div> <!-- /#sidr-->

		</header>

			

				<div class="page landing">


					<div class="page-inner">

						<ul class="scene" id="scene">

							<li class="layer anim" data-depth="0.60"><img id="fog-right" src="images/scene/4-rightInnerFog.png" alt="scene layer"/></li>
							<li class="layer anim" data-depth="0.65"><img id="fog-left" src="images/scene/5-leftInnerFog.png" alt="scene layer"/></li>
							
							

							<div class="scene-inner">
								<li class="layer" data-depth="0.10"><img src="images/scene/1-rearCurtain.png" alt="scene layer"/></li>
								<li class=" swing" data-depth="0.15"><img src="images/scene/2-chandShadow.png" alt="scene layer"/></li>
								<li class="chandelier swing" data-depth="0.20"><img src="images/scene/3-chand.png" alt="scene layer"/></li>
								<!-- <li class="layer anim" data-depth="0.30"><img src="images/scene/3a-chandLight.png" alt="scene layer"/></li> -->
								
								
								<li class="layer anim" data-depth="0.15"><img src="images/scene/6-singerShadow.png" alt="scene layer"/></li>
								<li class="layer" data-limit-y="2" data-depth="0.50"><img src="images/scene/7-singer.png" alt="scene layer"/></li>

							</div><!-- /.scene-inner-->

							<div id="curtain-wrapper">
								<img id="curtain-left" src="images/scene/8a-curtainLeft.png" alt="scene layer"/>
									<div id="curtain-center"></div>
								<img id="curtain-right" src="images/scene/8b-curtainRight.png" alt="scene layer"/>
							</div><!-- /#curtain-wrapper-->

							<li class="layer" data-depth="0.65"><img id="inner-fog" src="images/scene/5a-innerFog.png" alt="scene layer"/></li>
							<li class="layer anim" data-depth="0.70"><img id="center-fog" src="images/scene/9-outerFog.png" alt="scene layer"/></li>

							<li class="layer anim" data-depth="0.80"><img id="light" src="images/scene/10-light1.png" alt="scene layer"/></li>
							<li class="layer anim" data-depth="0.90"><img id="light" src="images/scene/10-light2.png" alt="scene layer"/></li>
							<li class="layer anim" data-depth="1.00"><img id="light" src="images/scene/10-light3.png" alt="scene layer"/></li>

							<li><img id="center-fog" src="images/scene/11-outerBlack.png" alt="scene layer"/></li>

						</ul><!-- /.scene-->

					</div><!-- /.page-inner-->
				</div><!-- /.page-->




			<div class="container">
				<div class="page bio">
					<div class="page-inner">

						
						<h2 id="bio">Bio</h2>
						<img class="ornament" src="images/ornament.png" alt="page ornament" />
							<p>Liza Jane Catana is a petite singer with a big voice. She hails from Key West, Florida and is known as the knock-it-out-of-the-park soprano with a vocal range of an octave and a half.</p>

							<p>She has been singing opera since the age of 4 and is known for her rock opera techniques. Her style and preferences are classical music mixed with rock and current pop with a hint of blues.</p> 

							<p>She has performed the national anthem many times at local events and has received a number of awards and accolades. Liza was the only soprano to win the ACDA (American Choral Director Association) honor choir position in all of Monroe county. Only 100 students are selected out of thousands that audition.</p>

							<p>At age 11, Liza was the youngest person ever to sing at the Historical Saint Paul's Church on Duval Street in Key West, Florida and was asked to perform again at age 12.</p> 

							<p>Classically trained on the piano and self-taught guitar player, Liza writes her own songs and has recorded in New York City with Clinton Curtis at Threshold Studios. Some of her original works have been broadcast on local radio stations.</p> 

							<p>Liza performs locally with a group of stunning female singers called "The Ivories". They have performed at the Ocean Key House, Schooner Wharf, Sloppy Joe's, The Little White House and even opened up for Three Dog Night singing the National Anthem in February of 2013 during Keys Stock. The Ivories have recorded a Christmas album which will be available in December 2013.</p>

					</div><!-- /.page-inner-->
				</div><!-- /.page-->

				<div class="page videos">
					<div class="page-inner">

						
						<h2 id="videos">Videos</h2>
						<img class="ornament" src="images/ornament.png" alt="page ornament" />

						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/cbx63WM5Wus" frameborder="0" allowfullscreen></iframe>
							<h3>Song Title</h3>
						</div><!-- /.video-wrapper-->

						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/cbx63WM5Wus" frameborder="0" allowfullscreen></iframe>
							<h3>Song Title</h3>
						</div><!-- /.video-wrapper-->

						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/cbx63WM5Wus" frameborder="0" allowfullscreen></iframe>
							<h3>Song Title</h3>
						</div><!-- /.video-wrapper-->

						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/cbx63WM5Wus" frameborder="0" allowfullscreen></iframe>
							<h3>Song Title</h3>
						</div><!-- /.video-wrapper-->

						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/cbx63WM5Wus" frameborder="0" allowfullscreen></iframe>
							<h3>Song Title</h3>
						</div><!-- /.video-wrapper-->

						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/cbx63WM5Wus" frameborder="0" allowfullscreen></iframe>
							<h3>Song Title</h3>
						</div><!-- /.video-wrapper-->
					</div><!-- /.page-inner-->
				</div><!-- /.page-->

				<div class="page photos slow-jump">
					<div class="page-inner">

						
						<h2 id="photos">Photos</h2>
						<img class="ornament" src="images/ornament.png" alt="page ornament" />

						<div class='picasa-wrapper'>
							<img id="prevbtn" src="images/prev.png" alt="previous arrow"/>
							<img id="nextbtn" src="images/next.png" alt="previous arrow"/>

									<div class='picasagallery'>
									</div><!-- /.picasagallery-->
							
						</div><!-- /.picasa-wrapper-->


					</div><!-- /.page-inner-->
				</div><!-- /.page-->

				<div class="page contact slow-jump">
					<div class="page-inner">


						<h2 id="contact">Contact</h2>
						<img class="ornament" src="images/ornament.png" alt="page ornament" />

						<div class="form">
							<form action="?action=contact" method="post">

								<label for="name">Name*</label>
								<input type="text" name="name" placeholder="Full Name" required/>

								<label for="email">Email*</label>
								<input type="email" name="email" placeholder="you@example.com" required/>

								<label for="phone">Phone*</label>
								<input type="tel" name="phone" placeholder="555-555-1212" required/>

								<label for="message">Message*</label>
								<textarea name="message" required></textarea>

								<input type="submit" value="Contact Me" />

							</form>
						</div><!-- /.form-->

						<div class="contact-info">
							
							<p>For more information, or to contact Liza Jane Catana, please fill in the form to the left or email:</p>
							<a href="mailto:info@lizajanecatana.com">Info@LizaJaneCatana.com</a>

						</div><!-- /.contact-info-->

					</div><!-- /.page-inner-->
				</div><!-- /.page-->	
			</div><!-- /.container-->	

		<footer>
		<a class="menu-button" id="menu" href="#sidr" ><img src="images/menu.png" alt="menu button"/></a>

				<nav>
					<ul>
						<li><a class="slow-jump" id="bio-nav" href="#bio">Bio</a></li>
						<li><a class="slow-jump" href="#videos">Videos</a></li>
						<li><a class="slow-jump" href="#photos">Photos</a></li>
						<li><a class="slow-jump" href="#contact">Contact</a></li>
					</ul>
				</nav>

			<p><span class="red">&copy;2013</span> LizaJaneCatana.com</p>
		</footer>
		<!-- Scripts -->

		<!-- // <script src="js/jquery-1.7.1.js"></script> -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/jquery.parallax.min.js"></script>
		<script src="js/jquery.sidr.min.js"></script>
		<script src="js/jquery.touchwipe.min.js"></script>
		


		<script src="js/jquery.event.special.js"></script>
   		<script src="js/jquery.easing.min.js"></script>
  		<script src="js/lightbox-2.6.min.js"></script>
		<script src="js/main.js"></script>
		

	</body>
</html>



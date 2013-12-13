<!DOCTYPE html>
<html lang="en">
<head>
<!-- Thanks for checking out my code!!

	Copyright Adam Gedney 12/4/13
	contact: adam.gedney@gmail.com
	http://adamgedney.com

"Good UI design is humble.” – Jono DiCarlo -->


	<title>Liza Jane Catana</title>

	<!-- meta -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width"/>

	<!-- favicon & humans.txt -->
	<link type="text/plain" rel="author" href="/humans.txt" />
	<link rel="shortcut icon" href="http://adamshields.com/favicon.ico" />

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
	

	<!-- Stylesheet -->
	<link rel="stylesheet" href="css/main.css" />

	<!-- php adaptive images plugin-->
	<!-- <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script> -->


	<!-- <script src="js/modernizr.custom.30046.js"></script> -->




</head>

<?php require_once 'controllers/mailer.php'; ?> <!-- form controller. Could have used Ajax. I know ;) -->

	<body>
		<header>

			<!-- "logo" -->
			<a href="#"><h1>Liza Jane Catana</h1></a>

			<!-- mobile menu button. Displays only on small screens -->
			<a class="menu-button" id="menu" href="#" ><img src="images/menu.png" alt="menu button" title="Main Menu"  width="25" height="25"/></a>

			<nav id="main-nav">
				<ul>
					<li><a class="slow-jump" id="bio-nav" href="#bio">Bio</a></li>
					<li><a class="slow-jump" href="#videos">Videos</a></li>
					<li><a class="slow-jump" href="#photos">Photos</a></li>
					<li><a class="slow-jump" href="#contact">Contact</a></li>
				</ul>
			</nav>
		</header>

			








			<!-- landing page -->
			<div class="page landing">
				<div class="page-inner">
					<ul class="scene" id="scene" 
						>

						<!-- rear fog -->
						<li class="layer anim" data-depth="0.20"><img id="fog-right" src="images/scene/4-rightInnerFog.png" alt="scene layer" width="862" height="620"/></li>
						<li class="layer anim" data-depth="0.50"><img id="fog-left" src="images/scene/5-leftInnerFog.png" alt="scene layer" width="862" height="620"/></li>
						


							<div class="scene-inner">
								

								<!-- chandeleir & rear curtain -->
								<li class="layer rear-curtain" data-depth="0.10"><img src="images/scene/1-rearCurtain.jpg" alt="scene layer" width="862" height="620"/></li>
								<li class="chandelier swing" data-depth="0.20"><img src="images/scene/3-chand.png" alt="scene layer" width="862" height="620"/></li>
								<li class="chandelier swing" data-depth="0.20"><img id="flicker" src="images/scene/3a-chand_flicker.png" alt="scene layer" width="862" height="620"/></li>
								

								<!-- singer & singer shadow -->
								<li class="layer anim" data-depth="0.35"><img src="images/scene/6-singerShadow.png" alt="scene layer" width="862" height="620"/></li>
								<li class="layer" data-limit-y="2" data-depth="0.00"><img src="images/scene/7-singer.png" alt="scene layer" width="862" height="620"/></li>
							</div><!-- /.scene-inner-->


							<!-- left/right curtains -->
							<div id="curtain-wrapper">
								<img id="curtain-left" src="images/scene/8a-curtainLeft.png" alt="scene layer" width="436" height="620"/>
									<div id="curtain-center"></div>
								<img id="curtain-right" src="images/scene/8b-curtainRight.png" alt="scene layer" width="436" height="620"/>
							</div><!-- /#curtain-wrapper-->


						<!-- center & looping fog  -->
						<li class="layer" data-depth="0.75"><img id="inner-fog" src="images/scene/5a-innerFog.png" alt="scene layer" width="862" height="620"/></li>
						<li class="layer anim" data-depth="1.00"><img id="center-fog" src="images/scene/9-outerFog.png" alt="scene layer" width="862" height="620"/></li>


						<!-- lighting effects-->
						<li class="layer anim light" data-depth="0.60"><img src="images/scene/10-light1.png" alt="scene layer" width="862" height="620"/></li>
						<li class="layer anim light" data-depth="0.70"><img src="images/scene/10-light2.png" alt="scene layer" width="862" height="620"/></li>
						<li class="layer anim light" data-depth="0.80"><img src="images/scene/10-light3.png" alt="scene layer" width="862" height="620"/></li>
						<li class="layer anim light" data-depth="0.90"><img src="images/scene/10-light4.png" alt="scene layer" width="862" height="620"/></li>
						<li class="layer anim light" data-depth="1.00"><img src="images/scene/10-light5.png" alt="scene layer" width="862" height="620"/></li>


						<!-- masking black fog -->
						<!-- <li><img id="center-fog" src="images/scene/11-outerBlack.png" alt="scene layer" width="862" height="620"/></li> -->
					
					</ul><!-- /.scene-->
				</div><!-- /.page-inner-->
			</div><!-- /.page .landing-->










			<!-- bio page -->
			<div class="page bio" id="bio">
				<div class="page-inner">

				<img class="ornament" src="images/ornament.png" alt="page ornament" width="150" height="19" />

					<h2>Bio</h2>
						<p class="two-col"><span class="bold">Liza Jane Catana is a petite singer</span> with a big voice. She hails from Key West, Florida and is known as the knock-it-out-of-the-park soprano with a vocal range of an octave and a half.
							<br />
							<span class="line-sep"></span>
						She has been singing opera since the age of 4 and is known for her rock opera techniques. Her style and preferences are classical music mixed with rock and current pop with a hint of blues.
							<br />
							<span class="line-sep"></span>
						She has performed the national anthem many times at local events and has received a number of awards and accolades. <span class="bold">Liza was the only soprano to win the ACDA (American Choral Director Association) honor choir position</span> in all of Monroe county. Only 100 students are selected out of thousands that audition.
							<br />
							<span class="line-sep"></span>
						At age 11, <span class="bold">Liza was the youngest person ever to sing at the Historical Saint Paul's Church</span> on Duval Street in Key West, Florida and was asked to perform again at age 12.
							<br />
							<span class="line-sep"></span>
						<span class="bold">Classically trained on the piano</span> and self-taught guitar player, Liza writes her own songs and has recorded in New York City with Clinton Curtis at Threshold Studios. Some of her original works have been broadcast on local radio stations. 
							<br />
							<span class="line-sep"></span>
						<span class="bold">Liza performs locally with a group of stunning female singers called "The Ivories".</span> They have performed at the Ocean Key House, Schooner Wharf, Sloppy Joe's, The Little White House and even opened up for Three Dog Night singing the National Anthem in February of 2013 during Keys Stock. The Ivories have recorded a Christmas album which will be available in December 2013.</p>
				</div><!-- /.page-inner-->
			</div><!-- /.page-->










			<!-- video page -->
			<div class="page videos" id="videos">
				<div class="page-inner">
					
					<img class="ornament" src="images/ornament.png" alt="page ornament" width="150" height="19" />

					<h2>Videos</h2>
					

					<div class="video-content">

						<!-- <ul> displays only on small screens to optimize load times & limit data. Copy youtube video links here. -->
						<ul class="video-links">
							<li><a href="http://www.youtube.com/watch?v=M5qHnS8fYZ4">Wishing You Were Somehow Here Again</a></li>
							<li><a href="http://www.youtube.com/watch?v=5CuSnlchbeU">Back To Black (Amy Winehouse)</a></li>
							<li><a href="http://www.youtube.com/watch?v=bPCk2HsjuhE">The National Anthem</a></li>
							<li><a href="http://www.youtube.com/watch?v=nvHT0w0YPKQ">Someone Like You (Adele)</a></li>
							<li><a href="http://www.youtube.com/watch?v=jzlL5ykIx2M">Pie Jesu</a></li>
							<li><a href="http://www.youtube.com/watch?v=08DTWh83UA8">Bridge Over Troubled Water</a></li>
						</ul>



						<!-- youtube videos -->
						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/M5qHnS8fYZ4" frameborder="0" allowfullscreen></iframe>
							<h3>Wishing You Were Somehow Here Again</h3>
						</div><!-- /.video-wrapper-->

						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/5CuSnlchbeU" frameborder="0" allowfullscreen></iframe>
							<h3>Back To Black (Amy Winehouse)</h3>
						</div><!-- /.video-wrapper-->

						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/bPCk2HsjuhE" frameborder="0" allowfullscreen></iframe>
							<h3>The National Anthem</h3>
						</div><!-- /.video-wrapper-->

						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/nvHT0w0YPKQ" frameborder="0" allowfullscreen></iframe>
							<h3>Someone Like You (Adele)</h3>
						</div><!-- /.video-wrapper-->

						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/jzlL5ykIx2M" frameborder="0" allowfullscreen></iframe>
							<h3>Pie Jesu</h3>
						</div><!-- /.video-wrapper-->

						<div class="video-wrapper">
							<iframe src="//www.youtube.com/embed/08DTWh83UA8" frameborder="0" allowfullscreen></iframe>
							<h3>Bridge Over Troubled Water</h3>
						</div><!-- /.video-wrapper-->
					</div><!-- /.video-content-->	
				</div><!-- /.page-inner-->
			</div><!-- /.page-->










			<!-- photo slideshow page -->
			<div class="page photos" id="photos">
				<div class="page-inner">

					<img class="ornament" src="images/ornament.png" alt="page ornament" width="150" height="19"/>

					<h2>Photos</h2>

					<!-- slideshow wrapper -->
					<div class='picasa-wrapper'>

						<img id="prevbtn" src="images/prev.png" alt="previous arrow" width="50" height="45"/>
						<img id="nextbtn" src="images/next.png" alt="next arrow" width="50" height="45"/>

							<!-- slideshow inserted via JS into this div _see main.js -->
							<div class='picasagallery'>
							</div><!-- /.picasagallery-->

					</div><!-- /.picasa-wrapper-->
				</div><!-- /.page-inner-->
			</div><!-- /.page-->










			<!-- contact page -->
			<div class="page contact slow-jump">
				<div class="page-inner cf">
					<img class="ornament" src="images/ornament.png" alt="page ornament" width="150" height="19"/>

					<h2 id="contact">Contact</h2>

					<!-- contact form -->
					<div class="form">
						<form action="?action=contact" method="post">

							<label for="name">Name*</label>
							<input type="text" id="con-name" name="name" placeholder="Full Name" required/>

							<label for="email">Email*</label>
							<input type="email" id="con-email" name="email" placeholder="you@example.com" required/>

							<label for="phone">Phone*</label>
							<input type="tel" id="con-phone" name="phone" placeholder="555-555-1212" required/>

							<label for="message">Message*</label>
							<textarea id="con-message" name="message" required></textarea>

							<input id="submit-btn" type="submit" value="Contact Me" />

						</form>
					</div><!-- /.form-->



					<div class="contact-info">
						
						<p>For more information, or to contact Liza Jane Catana, please fill in the form to the left or email:</p>
						<a href="mailto:info@lizajanecatana.com">Info@LizaJaneCatana.com</a>

					</div><!-- /.contact-info-->
				</div><!-- /.page-inner-->
			</div><!-- /.page-->	
	









		<!-- footer w/ copy, escape hatch, & nav -->
		<footer>
			<a href="#"><h1>Liza Jane Catana</h1></a>
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










		<!-- Scripts using codekit prepend to import & minify scripts-->
		<script src="js/main-ck.js"></script>
		
	</body>
</html>



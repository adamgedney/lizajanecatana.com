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
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/jquery.sidr.dark.css" />

	<link href="./fancyBox/helpers/jquery.fancybox-thumbs.css?v=2.0.5" rel="stylesheet" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/main.css" />

</head>
	<body>

		<header>
			<h1>Liza Jane Catana</h1>

			<a class="menu-button" id="menu" href="#sidr" ><img src="/images/menu.png" alt="menu button"/></a>

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

						<div class="scene">

							<img id="fog-right" src="/images/scene/4-rightInnerFog.png" alt="scene layer"/>
								<img id="fog-left" src="/images/scene/5-leftInnerFog.png" alt="scene layer"/>

							<div class="scene-inner">
								<img src="/images/scene/1-rearCurtain.png" alt="scene layer"/>
								<img src="/images/scene/2-chandShadow.png" alt="scene layer"/>
								<img src="/images/scene/3-chand.png" alt="scene layer"/>
								
								
								
								<img src="/images/scene/6-singerShadow.png" alt="scene layer"/>
								<img src="/images/scene/7-singer.png" alt="scene layer"/>
							</div><!-- /.scene-inner-->

							<div id="curtain-wrapper">
								<img id="curtain-left" src="/images/scene/8a-curtainLeft.png" alt="scene layer"/>
									<div id="curtain-center"></div>
								<img id="curtain-right" src="/images/scene/8b-curtainRight.png" alt="scene layer"/>
							</div><!-- /#curtain-wrapper-->

							<img id="center-fog" src="/images/scene/9-outerFog.png" alt="scene layer"/>

						</div><!-- /.scene-->

					</div><!-- /.page-inner-->
				</div><!-- /.page-->




			<div class="container">
				<div class="page bio">
					<div class="page-inner">

						
						<h2 id="bio">Bio</h2>
						<img class="ornament" src="/images/ornament.png" alt="page ornament" />
							<p>Ugh mustache Williamsburg, keytar irony ethnic non wolf viral Etsy Portland hashtag. Cillum fanny pack mumblecore cliche, culpa seitan ad ugh velit anim. Terry Richardson Cosby sweater Marfa, iPhone placeat narwhal yr wayfarers pour-over tousled labore retro literally. Occaecat cliche squid, voluptate cillum ex ethnic odio dolor Odd Future sunt church-key cornhole try-hard. Gastropub distillery commodo tattooed paleo. Sustainable Echo Park farm-to-table kogi, Pitchfork Williamsburg reprehenderit. Asymmetrical minim nulla, mustache sunt keffiyeh before they sold out chillwave cliche food truck.

								Wolf Neutra Brooklyn, tousled ad assumenda aliqua Odd Future pop-up. Ad ut ea, fixie Truffaut High Life locavore pug 90's umami keffiyeh narwhal exercitation. Hella flexitarian chia blog Pitchfork. Quinoa art party direct trade, asymmetrical roof party banjo 8-bit </p>

					</div><!-- /.page-inner-->
				</div><!-- /.page-->

				<div class="page videos">
					<div class="page-inner">

						
						<h2 id="videos">Videos</h2>
						<img class="ornament" src="/images/ornament.png" alt="page ornament" />

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
						<img class="ornament" src="/images/ornament.png" alt="page ornament" />

						<div class="picasa" id="gallery">
				        	<embed type="application/x-shockwave-flash" src="https://static.googleusercontent.com/external_content/picasaweb.googleusercontent.com/slideshow.swf" width="100%" height="100%" flashvars="host=picasaweb.google.com&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F112323008573640601447%2Falbumid%2F5943929266358395361%3Falt%3Drss%26kind%3Dphoto%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
				        </div>

					</div><!-- /.page-inner-->
				</div><!-- /.page-->

				<div class="page contact slow-jump">
					<div class="page-inner">


						<h2 id="contact">Contact</h2>
						<img class="ornament" src="/images/ornament.png" alt="page ornament" />

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

					</div><!-- /.page-inner-->
				</div><!-- /.page-->	
			</div><!-- /.container-->	

		<footer>
			<p><span class="red">&copy;2013</span> LizaJaneCatana.com</p>
		</footer>
		<!-- Scripts -->

		<!-- // <script src="js/jquery-1.7.1.js"></script> -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/jquery.sidr.min.js"></script>
		<script src="js/jquery.touchwipe.min.js"></script>

		 <script src="js/jquery.event.special.js"></script>
  		<script src="js/jquery.easing.min.js"></script>
  		<!-- <script src="js/jquery.scrollsnap.js"></script> -->
		<script src="js/main.js"></script>
		
	</body>
</html>



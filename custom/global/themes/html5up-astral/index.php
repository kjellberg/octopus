<!DOCTYPE HTML>
<!--
	Astral 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<?php echo $this->head(); ?>
	</head>
	<body class="homepage">

		<!-- Wrapper-->
			<div id="wrapper">
				
				<!-- Nav -->
					<nav id="nav">
						<a href="#me" class="fa fa-home active"><span>Home</span></a>
						<a href="#work" class="fa fa-folder"><span>Work</span></a>
						<a href="#email" class="fa fa-envelope"><span>Email Me</span></a>
						<a href="http://twitter.com/n33co" class="fa fa-twitter"><span>Twitter</span></a>
					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- Me -->
							<article id="me" class="panel">
								<header>
									<?php echo $html->h1('header1', 'Jane Doe'); ?>
									<?php echo $html->span('header1-span', 'Senior Astral Projectionist', array('class' => 'byline')); ?>
								</header>
								<a href="#work" class="jumplink pic">
									<span class="jumplink arrow fa fa-chevron-right"><span>See my work</span></span>
									<img src="<?php echo $this->theme_url; ?>/images/me.jpg" alt="" />
								</a>
							</article>

						<!-- Work --> 
							<article id="work" class="panel">
								<header>
									<?php echo $html->h2('second-page-title', 'My Portfolio'); ?>
								</header>
								<p>
									<?php echo $html->p('second-page-paragraph', 'Phasellus enim sapien, blandit ullamcorper elementum eu, condimentum eu elit. 
									Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia 
									luctus elit eget interdum.'); ?> 
								</p>
								<section class="is-gallery">
									<div class="row half">
										<div class="4u">
											<a href="http://flypixel.com/knob/3495684098026313" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/1.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/contact-login-form/8829734266026310" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/2.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/wallpaper-pack/3755398966026313" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/3.jpg" alt=""></a>
										</div>
									</div>
									<div class="row half">
										<div class="4u">
											<a href="http://flypixel.com/44-shades-of-free-icons/8268508056006318" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/4.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/flip-clock/3655053956026317" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/5.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/dropdown/5290304620795313" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/6.jpg" alt=""></a>
										</div>
									</div>
									<div class="row half">
										<div class="4u">
											<a href="http://flypixel.com/pie-charts/1759361594616314" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/7.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/sliding-selector-bar/7042935581006315" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/8.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/dark-as-hell-ui/5418809286006313" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/9.jpg" alt=""></a>
										</div>
									</div>
									<div class="row half">
										<div class="4u">
											<a href="http://flypixel.com/cityscape/9803996277226316" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/10.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/dropdown/8259263378026313" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/11.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/wood-ui-kit/3574765984616310" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/12.jpg" alt=""></a>
										</div>
									</div>
									<div class="row half">
										<div class="4u">
											<a href="http://flypixel.com/upload-button/9737964647895311" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/13.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/collapsible-menunavigation/5743165610406316" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/14.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="http://flypixel.com/3d-button/5506786525606318" class="image image-full"><img src="<?php echo $this->theme_url; ?>/images/15.jpg" alt=""></a>
										</div>
									</div>
								</section>
							</article>

						<!-- Email -->
							<article id="email" class="panel">
								<header>
									<h2>Email Me</h2>
								</header>
								<form action="#" method="post">
									<div>
										<div class="row half">
											<div class="6u">
												<input type="text" class="text" name="name" placeholder="Name" />
											</div>
											<div class="6u">
												<input type="text" class="text" name="email" placeholder="Email" />
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<input type="text" class="text" name="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row half">
											<div class="12u">
												<textarea name="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="submit" class="button" value="Send Message" />
											</div>
										</div>
									</div>
								</form>
							</article>

					</div>
		
				<!-- Footer -->
					<div id="footer">
						<ul class="links">
							<li>&copy; Jane Doe</li>
							<li>Images : <a href="http://fotogrph.com/">fotogrph</a></li>
							<li>Design : <a href="http://html5up.net/">HTML5 UP</a></li>
						</ul>
					</div>
		
			</div>
		<?php echo $this->footer(); ?>
	</body>
</html>
<?php
include_once( "functions.php" );

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Luca B.</title>

	<!-- Custom CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
	      type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>

<body id="page-top" class="index">


<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
			        data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#page-top">Luca B.</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li class="page-scroll">
					<a href="#services">about</a>
				</li>
				<li class="page-scroll">
					<a href="#portfolio">portfolio</a>
				</li>
				<li class="page-scroll">
					<a href="#about">bio</a>
				</li>
				<li class="page-scroll">
					<a href="#contact">contact</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

<!-- Header -->
<header class="background">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="pic-container" style="background-image: url(img/profile.jpg)">
				</div>
				<div class="intro-text">
					<span class="name">Luca B. Bettenzoli</span>
					<span class="brush">
						<i class="fa fa-paint-brush"></i>
					</span>
					<span class="skills">emotions & color</span>
				</div>
			</div>
		</div>
	</div>
</header>


<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading ">"Salve"</h2>

				<h3 class="section-subheading ">My name is Luca</h3>

				
				<p >I am a painter and material design artists and it would be a pleasure for me to flood your house with light</p>
			</div>
		</div>
		<div class="row text-center features">
			<div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-heart fa-stack-1x fa-inverse"></i>
                    </span>
				<h4 class="service-heading">flowing free feelings</h4>

				<p >his works express feelings and emotions clenched</p>
			</div>
			<div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-bolt fa-stack-1x fa-inverse"></i>
                    </span>
				<h4 class="service-heading">explosive colors</h4>

				<p >sunny ornaments and glowing contrasts are his trademark</p>
			</div>
			<div class="col-md-4 page-scroll">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-bomb fa-stack-1x fa-inverse"></i>
                    </span>
				<h4 class="service-heading">inspiring new impulses</h4>

				<p >uts different trends and techniques are innovative and alive</p>
			</div>
		</div>
	</div>
</section>


<!-- Portfolio Grid Section -->

<?php
$dir    = "/img/portfolio";
$a      = readPortfolio( $dir );


$categoryNames = array_keys( $a );
$icons         = array( 'fa-university', 'fa-lightbulb-o', 'fa-th', 'fa-picture-o' );

?>

<section id="portfolio" class="dark-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Portfolio</h2>
			</div>
		</div>
		<div class="row icons">

			<?php
			$i = 0;
			foreach ( $categoryNames as $category ) {
				?>
				<div class="icon">
					<i class="fa <?php echo $icons[ $i ++ ] ?>" rel="<?php echo $category ?>"></i>

					<p><?php echo ucfirst($category) ?></p>
				</div>
			<?php } ?>
		</div>
	</div>

	<div class="container">

		<div class="row portfolio-row">
			<?php

			$info = array(
				1 => array(
					'title' => 'Life is Beautiful',
					'info' => 'oil on wood | size 50 - 100 cm'
				),
				2 => array(
					'title' => 'my brain-slow and fast',
					'info' => 'oil on canvas | size 45 - 110 cm'
				),
				3 => array(
					'title' => 'me, the sea and my love',
					'info' => 'oil on canvas | size 55 - 85 cm'
				),
				5 => array(
					'title' => 'suq (Arab market)',
					'info' => 'oil on canvas | size 50 -70 cm'
				),
				6 => array(
					'title' => 'fusion-merger',
					'info' => 'oil on canvas | size 80 - 60 cm'
				),
				8 => array(
					'title' => 'underwater',
					'info' => 'water acryl on canvas | size 50 - 70 cm'
				),
				9 => array(
					'title' => 'the buffalo',
					'info' => 'oil on canvas | size 80 - 60 cm'
				),
				10 => array(
					'title' => 'Carnival, I dance',
					'info' => 'oil on canvas | size 60 - 100 cm'
				),
				11 => array(
					'title' => 'eternal life',
					'info' => 'oil on canvas | size 60 - 100 cm'
				),
				12 => array(
					'title' => 'sphinxes',
					'info' => 'oil on canvas | size 40 - 100 cm'
				),
				13 => array(
					'title' => 'Metallstruktur -metal structure Größe-dimension',
					'info' => 'acryl-water colour on canvas | size 60 - 60 cm'
				),
				14 => array(
					'title' => 'the power',
					'info' => 'oil on canvas | size 60 - 100 cm'
				),
				15 => array(
					'title' => 'hot planet',
					'info' => 'water acryl on canvas | size 120 - 80 cm'
				),
				16 => array(
					'title' => 'soul',
					'info' => ' water acryl on canvas | size 120 - 90 cm'
				),
				17 => array(
					'title' => 'trinity',
					'info' => 'oil on canvas | size 120 - 80 cm'
				),
				18 => array(
					'title' => 'listening',
					'info' => 'oil on canvas | size 100 - 80 cm'
				),
				19 => array(
					'title' => 'purification',
					'info' => 'oil on canvas | size 120 - 100 cm'
				),
				20 => array(
					'title' => 'la defence',
					'info' => 'oil on canvas | size 80 - 100 cm'
				),
				21 => array(
					'title' => 'past present future',
					'info' => 'oil on canvas | size 120 - 80 cm'
				),
				22 => array(
					'title' => 'sunshine wall',
					'info' => ' hand-painted wall | acrylic water colors | for indoor and outdoor possible in all sizes'
				),
				23 => array(
					'title' => 'metal structure',
					'info' => 'dimension: h.4 meter w 2.5 meter -lng.3 meter | the work is composed of a glass mosaic and acrylic painting'
				),
				24 => array(
					'title' => 'lamps or lighting points',
					'info' => 'material - plexiglass, aluminum, acrylic paint and LED lights | each piece is a unique work | the artist creates custom-made lamps for all your spaces'
				),
				25 => array(
					'title' => 'lamps or lighting points',
					'info' => 'material - plexiglass, aluminum, acrylic paint and LED lights | each piece is a unique work | the artist creates custom-made lamps for all your spaces'
				),
				26 => array(
					'title' => 'lamps or lighting points',
					'info' => 'material - plexiglass, aluminum, acrylic paint and LED lights | each piece is a unique work | the artist creates custom-made lamps for all your spaces'
				),
				27 => array(
					'title' => 'lamps or lighting points',
					'info' => 'material - plexiglass, aluminum, acrylic paint and LED lights | each piece is a unique work | the artist creates custom-made lamps for all your spaces'
				),
				28 => array(
					'title' => 'lamps or lighting points',
					'info' => 'material - plexiglass, aluminum, acrylic paint and LED lights | each piece is a unique work | the artist creates custom-made lamps for all your spaces'
				),
				29 => array(
					'title' => 'lamps or lighting points',
					'info' => 'material - plexiglass, aluminum, acrylic paint and LED lights | each piece is a unique work | the artist creates custom-made lamps for all your spaces'
				),
				30 => array(
					'title' => 'lamps or lighting points',
					'info' => 'material - plexiglass, aluminum, acrylic paint and LED lights | each piece is a unique work | the artist creates custom-made lamps for all your spaces'
				),
				31 => array(
					'title' => 'lamps or lighting points',
					'info' => 'material - plexiglass, aluminum, acrylic paint and LED lights | each piece is a unique work | the artist creates custom-made lamps for all your spaces'
				),
				32 => array(
					'title' => 'lamps or lighting points',
					'info' => 'material - plexiglass, aluminum, acrylic paint and LED lights | each piece is a unique work | the artist creates custom-made lamps for all your spaces'
				),
				33 => array(
					'title' => 'lamps or lighting points',
					'info' => 'material - plexiglass, aluminum, acrylic paint and LED lights | each piece is a unique work | the artist creates custom-made lamps for all your spaces'
				),
				34 => array(
					'title' => 'lamps or lighting points',
					'info' => 'material - plexiglass, aluminum, acrylic paint and LED lights | each piece is a unique work | the artist creates custom-made lamps for all your spaces'
				),
				35 => array(
					'title' => 'my city',
					'info' => 'mosaic glass cathedral of wood'
				),
				36 => array(
					'title' => 'dawn',
					'info' => 'ceramic and glass mosaic on wood'
				),
				37 => array(
					'title' => 'the sun',
					'info' => 'glass mosaic cathedral on plexiglass 100 - 100 cm'
				),
				38 => array(
					'title' => 'Garden cobblestone mosaic',
					'info' => 'Without the use of cement, made entirely with sand. This work can be accomplished in any size or terrain'
				),
				40 => array(
					'title' => 'the pyramids and the time',
					'info' => 'oil on canvas size 250 - 90 cm'
				),
				41 => array(
					'title' => 'hand painting floor',
					'info' => 'acrylic water paint and transparent finish for protection | for indoor and outdoor | achievable on wood, concrete, metal and all kinds of materials'
				),
				42 => array(
					'title' => 'hand painting floor',
					'info' => 'acrylic water paint and transparent finish for protection | for indoor and outdoor | achievable on wood, concrete, metal and all kinds of materials'
				)
			);

			$n          = 0;
			$itemscount = 0;

			foreach ( $a as $catname => $cat ) {
				foreach ( $cat as $img ) {
					$itemscount ++;
				}
			}


			//			$gridclasse = array( 'grid11', 'grid21', 'grid12', 'grid22' );
			//			style="background-image: url(<?php echo $dir . '/' . $catname . '/' . $img)


			foreach ( $a as $catname => $cat ) {
				foreach ( $cat as $img ) {
					$imginfo = pathinfo($img);
					$file_name =  intval(basename($img,'.'.$imginfo['extension']));
					?>
					<div class="col-sm-3 portfolio-item <?php echo $catname ?>">
						<a href=" #portfolioModal<?php echo $file_name ?>" class="portfolio-link" data-toggle="modal">
							<div class="caption background">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div>
							<img src="<?php echo $dir . '/' . $catname . '/' . $img ?>" class="img-responsive" alt="">
						</a>
					</div>

					<?php $n ++;
				}
			}
			?>

		</div>
	</div>
	<div class="modal-row">
		<?php $n = 0;
		foreach ( $a as $catname => $cat ) {
			foreach ( $cat as $img ) {
				$imginfo = pathinfo($img);
				$file_name =  intval(basename($img,'.'.$imginfo['extension']));
				?>
				<div style="display: none;" class="portfolio-modal modal fade" id="portfolioModal<?php echo $file_name ?>"
				     tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
							<div class="lr">
								<div class="rl">
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<div class="modal-body">
										<?php
										 echo ( $info[ $file_name ]['title'] ) ? '<h2>' . $info[ $file_name ]['title'] . '</h2>' : '' ?>
										<img src="<?php echo $dir . '/' . $catname . '/' . $img ?>"
										     class="img-responsive img-centered" alt="">
										<?php echo ( $info[ $file_name ]['info'] ) ? '<p>' . $info[ $file_name ]['info'] . '</p>' : '' ?>
										<ul class="list-inline item-details">
											<li>Artist:
												<strong><a>Luca B. Bettenzoli</a></strong>
											</li>
											<li>Category: 
												<strong><a><?php echo $catname ?></a></strong>
											</li>
										</ul>
										<button type="button" class="btn btn-default" data-dismiss="modal"><i
												class="fa fa-times"></i>
											Close
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php $n ++;
			}
		} ?>
	</div>
	</div>
</section>

<!-- Portfolio Modals -->


<!-- About Section -->
<section id="about" class="dark-bg background">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>About</h2>
					<span class="brush">
    				<i class="fa fa-paint-brush"></i>
  				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<h3>AESTHETIC REMARKS</h3>

				<p>Luca B. Bettenzoli is a young Italian artist, born in 1973 in Vicenza Italy. He worked four years in Paris and in London, where his works were exhibited. His work is strong inspired by his very own emotions and also thos of his friends and artist colleagues. His works shows in a incredible way the flow of free emotions and the tendency to abstract differentiated trends in unconventional, inimitable language.</p>
			</div>
			<div class="col-lg-4">
				<h3>The big breath</h3>
				<p> Bettenzoli's Abstractismus is partially clearly drawn and sometimes total absolutely. His pictures show the power of the big breath. Bright dynamic and explosive colors are typically for his work. Colors are the actors of his dramatic radiance. The Bettenzoli artworks are harmonious combinations of ascending contrasts and compositions of admirable symphonies. This artist convinced with many large-scale oil paintings that impresses the spectator forcefully. Its flexibility in performing various trends and techniques never leaves the space of theauthentic area.</p>
			</div>
			<div class="col-lg-4">
				<h3>soulprojection</h3>
				<p>
					A sensitive artist and mature character. We are not confronted by a figurative painter or affective abstractionism. The work of this artist showcase successful internal projections and vibrations of the soul that is followed by a estetic communication towards the audience. Open communication opens up new spaces, dimensions and inspired fresh impulses.</p>
				<em>
					Cau. prof. Manleo Manuati
					Deutschuon Dr. Hotte Alrici (Germany)
				</em>
			</div>
			</div>
			<div class="row">
				<br>
				<br>
				<div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
				<a href="#contact" class="btn btn-lg btn-outline">
					<i class="fa fa-envelope"></i> get in touch!
				</a>
			</div>
		</div>
	</div>
</section>


<!-- Contact Section -->
<section id="contact">

	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>contact</h2>
					<span class="brush">
    				<i class="fa fa-paint-brush"></i>
  				</span>
			</div>
		</div>


	<div class="row">
		<div class="col-lg-12">
			<form novalidate="" id="contactForm" name="sentMessage">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" data-validation-required-message="name"
							       required="required" id="name" placeholder="name" class="form-control">

							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<input type="email"
							       data-validation-required-message="email"
							       required="required" id="email" placeholder="email" class="form-control">

							<p class="help-block text-danger"></p>
						</div>
						<div class="form-group">
							<input type="tel"
							       data-validation-required-message="phone"
							       required="" id="phone" placeholder="phone" class="form-control">

							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
                  <textarea data-validation-required-message="Please enter a message." required="required"
                            id="message" placeholder="message" class="form-control"></textarea>

							<p class="help-block text-danger"></p>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-12 text-center">
						<div id="success"></div>
						<button class="btn btn-lg btn-outline" type="submit"><i class="fa fa-envelope"> </i> submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>


</section>

<!-- Footer -->
<footer class="text-center">
	<div class="footer-container">
		<div class="footer-above">
			<div class="container">
				<div class="row">
					<div class="footer-col col-md-4">
						<h3>Deutschland</h3>

						<p>Obere Karspüle 19<br>
							37073 Göttingen<br>
							Germany<br>
							015759405973
							isabeautifulife@gmail.com
						</p>
					</div>
					<div class="footer-col col-md-4">
						<h3>Luca B. Bettenzoli	</h3>

						<p class="page-scroll">"Life is Beautiful"
						<br/>
							emotions & color
							<br/>
							<br/>
							<a href="#about">about me</a>
						</p>
					</div>
					<div class="footer-col col-md-4">
						
					</div>

				</div>
			</div>
		</div>
		<div class="footer-below">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						&copy; 2016 with <i class="fa fa-heart"></i> by <a target="_blank" href="http://www.thomaskuhnert.com">Thomas Kuhnert</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
	<a class="btn btn-primary" href="#page-top">
		<i class="fa fa-chevron-up"></i>
	</a>
</div>


<!-- jQuery -->
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.1/isotope.pkgd.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/freelancer.js"></script>
<script src="js/peekaboo.js"></script>

</body>

</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!--[if lt IE 9]>
		    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Alexandre de Montemart - <?php echo $page ?></title>
		<meta name="description" xml:lang="en" content="<?php echo $description ?>" />

		<link rel="stylesheet" type="text/css" href="css/global.css" />

		
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/production-min.js"></script>
		
		<!-- bxSlider Javascript file -->
		<script src="./jquery.bxslider/jquery.bxslider.min.js"></script>
		<!-- bxSlider CSS file -->
		<link href="./jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />

		<script type="text/javascript">
			jQuery(document).ready(function(){
				$('.bxslider').bxSlider({
					pager : false
				});

				var sliderHeight = $(window).height() - ( $('header').height() + $('footer').height() );
				$('.bx-viewport').height(sliderHeight);
				console.log(sliderHeight);

				$( window ).resize(function(){
					var sliderHeight = $(window).height() - $('header').height();
					$('.bx-viewport').height(sliderHeight);
					console.log(sliderHeight);
				});
			});
		</script>

	</head>

	<body>

		<header class="wrapper" id="main-header">
			<div class="row">
				<div class="nav-menu col-lg-12">
					<div class="row">
						<div class="menu-button col-lg-4">
							<a id="menu-button" href="#">Alexandre de Montemart</a>
						</div>
						<nav class="menu-list col-lg-7">
						  <ul class="clearfix">
						  	<li<?php if ($page == 'Home') {echo ' class="active"';} ?> ><a href="./">Home</a></li>
							<li<?php if ($page == 'Collections') {echo ' class="active"';} ?> ><a href="./collections.php">Collections</a></li>
							<li<?php if ($page == 'Movies') {echo ' class="active"';} ?> ><a href="./movies.php">Movies</a></li>
							<li<?php if ($page == 'News') {echo ' class="active"';} ?> ><a href="./news.php">News</a></li>
							<li<?php if ($page == 'About') {echo ' class="active"';} ?> ><a href="./about.php">About</a></li>
							<li<?php if ($page == 'Contact') {echo ' class="active"';} ?> ><a href="./contact.php">Contact</a></li>						
						  </ul>
						</nav>
					</div>
				</div>
			</div>			
		</header>

		<div class="wrapper" id="main-content">
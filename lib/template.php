<?php

function Nav() {
?>
				<li class="nav-item"><a href="/">Hours and Location</a></li>
				<li class="nav-item"><a href="/about.php">About</a></li>
				<li class="nav-item"><a href="/beer.php">Beer</a></li>
				<!--<li class="nav-item"><a href="menu.php">Menu</a></li>-->
				<li class="nav-item"><a href="/photos.php">Photos</a></li>
				<li class="nav-item"><a href="/contact.php">Contact</a></li>
<?php
}


function Top($title = false) {
?><!doctype html>
<html>

<head>
	<title>
<?php
	if($title) {
		echo $title, ' -';
	}
?>
		Battle Hill Brewing Company
	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/layout.css">
</head>

<body id="home">
	<a class="a11y-link" href="#content">Skip to content</a>
	<header class="header">
		<div class="site-title">
			Battle Hill<br>Brewing Company
		</div>
		<nav id="top-nav" class="top-nav"><a href="#top-nav" class="open-nav">Menu</a><ul class="nav">
<?php Nav(); ?>
			</ul>
		</nav>
	</header>
	<section class="content" id="content">
<?php
}


function Bottom() {
?>
	</section>
	<footer>
		<nav>
			<ul class="nav">
<?php Nav(); ?>
			</ul>
		</nav>
		<p>
			©<?php echo date('Y'); ?> Battle Hill Brewing Company 
		</p>
	</footer>
</body>

</html>
<?php
}
?>

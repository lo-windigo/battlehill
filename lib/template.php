<?php

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

<body>
	<a class="a11y-link" href="#content">Skip to content</a>
	<header class="header">
		<div class="site-title">
			Battle Hill<br>Brewing Company
		</div>
		<nav>
			<ul class="nav">
				<li class="nav-item"><a href="/">Hours and Location</a></li>
				<li class="nav-item"><a href="/about.php">About</a></li>
				<li class="nav-item"><a href="/beer.php">Beer</a></li>
				<!--<li class="nav-item"><a href="menu.php">Menu</a></li>-->
				<li class="nav-item"><a href="/photos.php">Photos</a></li>
				<li class="nav-item"><a href="/contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
	<section class="content">
<?php
}


function Bottom() {
?>
	<footer>
		©2015 Battle Hill Brewing Company 
	</footer>
</body>

</html>
<?php
}
?>

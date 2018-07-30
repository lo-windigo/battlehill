<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/lib/template.php';

define('TITLE', 'Photo Galleries');

Top(TITLE);
?>
		<h1 class="content-title"><?php echo TITLE; ?></h1>
		<p>
			Take a virtual tour of the brewery, from construction to the present
			day. Get a look behind-the-scenes at the inner workings, and the
			brewing process that makes Battle Hill Brewing Company special.
		</p>
		<ul class="gallery">
			<li>
				<a href="photos/2018-08/"><img src="photos/2018-08/01_t.jpg" alt=
					"A happy customer eating in front of the specials list"></a><br>
				<a href="photos/2018-08/">August 2018</a>
			</li>
			<li>
				<a href="photos/opening/"><img src="photos/opening/5_t.jpg" alt=
					"The bar at Battle Hill"></a><br>
				<a href="photos/opening/">Opening</a>
			</li>
			<li>
				<a href="photos/2015-09/"><img src="photos/2015-09/08_t.jpg" alt=
					"A collection of Battle Hill growlers"></a><br>
				<a href="photos/2015-09/">September 2015</a>
			</li>
			<li>
				<a href="photos/2015-02/"><img src="photos/2015-02/03_t.jpg" alt=
					"Studs and door frames waiting to be finished"></a><br>
				<a href="photos/2015-02/">February 2015</a>
			</li>
			<li>
				<a href="photos/2015-01/"><img src="photos/2015-01/14_t.jpg" alt=
					"The owners of Battle Hill standing behind a radial arm saw"></a><br>
				<a href="photos/2015-01/">January 2015</a>
			</li>
		</ul>
		<aside>
			Many, if not all, of these photos were taken by none other than 
			<strong>Bill McCoskery</strong>,
			a friend of the Battle Hill Brewing Company and the author of our original
			website. Thank you so much for your help!
		</aside>
<?php
Bottom();
?>

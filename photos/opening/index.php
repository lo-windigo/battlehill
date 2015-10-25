<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/lib/template.php';

define('TITLE', 'Opening');

Top(TITLE);
?>
		<h1 class="content-title"><?php echo TITLE; ?></h1>
		<p>
			A quick snapshot of the brewery, just before opening! You can imagine that,
			moments after these pictures were taken, the doors opened for the first time
			and the beer began to flow…
		</p>
		<ul class="gallery">
			<li>
				<a href="1.jpg"><img src="1_t.jpg"
					alt="Brewery equipment"></a>
			</li>
<?php
//			<li>
//				<a href="2.jpg"><img src="2_t.jpg"
//					alt="The front of the brewery building"></a>
//			</li>
?>
			<li>
				<a href="3.jpg"><img src="3_t.jpg"
					alt="A banner that reads battle hill brewing company; on tap soon"></a>
			</li>
			<li>
				<a href="4.jpg"><img src="4_t.jpg"
					alt="The deck and ramp on the side of the brewery"></a>
			</li>
			<li>
				<a href="5.jpg"><img src="5_t.jpg"
					alt="The bar inside the brewery"></a>
			</li>
			<li>
				<a href="6.jpg"><img src="6_t.jpg"
					alt="Upstairs dining room with several tables and a framed American flag"></a>
			</li>
			<li>
				<a href="7.jpg"><img src="7_t.jpg"
					alt="The merchandise counter, with tshirts, growlers and hats"></a>
			</li>
			<li>
				<a href="8.jpg"><img src="8_t.jpg"
					alt="The doorway leading to the patio, looking outside"></a>
			</li>
<?php
//			<li>
//				<a href="9.jpg"><img src="9_t.jpg"
//					alt="The restroom, a clean room with towels, handrail and a sink"></a>
//					</li>
?>
			<li>
				<a href="10.jpg"><img src="10_t.jpg"
					alt="A row of kegs behind-the-scenes, hooked up to the taps with red tubing"></a>
			</li>
			<li>
				<a href="11.jpg"><img src="11_t.jpg"
					alt="The patio with black metal outdoor chairs and tables"></a>
			</li>
			<li>
				<a href="12.jpg"><img src="12_t.jpg"
					alt="A decorative gate stating 'May the hinges of friendship never grow rusty'"></a>
			</li>
		</ul>
		<p class="subsection-nav">
			Return to <a href="/photos.php">Photo galleries</a>
		</p>
<?php
Bottom();
?>

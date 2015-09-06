<?php

require_once 'lib/template.php';

define('TITLE', 'Photographs');

Top(TITLE);
?>
		<h1 class="content-title"><?php echo TITLE; ?></h1>
		<p>
			Take a virtual tour of the brewery! These images were taken before opening
			day, and give you a look behind-the-scenes at the inner workings and the
			brewing process that makes Battle Hill Brewing Company special.
		</p>
		<ul class="gallery">
			<li>
				<a href="/photos/opening/1.jpg"><img src="/photos/opening/1_t.jpg"
					alt="Brewery equipment"></a>
			</li>
<?php
//			<li>
//				<a href="/photos/opening/2.jpg"><img src="/photos/opening/2_t.jpg"
//					alt="The front of the brewery building"></a>
//			</li>
?>
			<li>
				<a href="/photos/opening/3.jpg"><img src="/photos/opening/3_t.jpg"
					alt="A banner that reads battle hill brewing company; on tap soon"></a>
			</li>
			<li>
				<a href="/photos/opening/4.jpg"><img src="/photos/opening/4_t.jpg"
					alt="The deck and ramp on the side of the brewery"></a>
			</li>
			<li>
				<a href="/photos/opening/5.jpg"><img src="/photos/opening/5_t.jpg"
					alt="The bar inside the brewery"></a>
			</li>
			<li>
				<a href="/photos/opening/6.jpg"><img src="/photos/opening/6_t.jpg"
					alt="Upstairs dining room with several tables and a framed American flag"></a>
			</li>
			<li>
				<a href="/photos/opening/7.jpg"><img src="/photos/opening/7_t.jpg"
					alt="The merchandise counter, with tshirts, growlers and hats"></a>
			</li>
			<li>
				<a href="/photos/opening/8.jpg"><img src="/photos/opening/8_t.jpg"
					alt="The doorway leading to the patio, looking outside"></a>
			</li>
<?php
//			<li>
//				<a href="/photos/opening/9.jpg"><img src="/photos/opening/9_t.jpg"
//					alt="The restroom, a clean room with towels, handrail and a sink"></a>
//					</li>
?>
			<li>
				<a href="/photos/opening/10.jpg"><img src="/photos/opening/10_t.jpg"
					alt="A row of kegs behind-the-scenes, hooked up to the taps with red tubing"></a>
			</li>
			<li>
				<a href="/photos/opening/11.jpg"><img src="/photos/opening/11_t.jpg"
					alt="The patio with black metal outdoor chairs and tables"></a>
			</li>
			<li>
				<a href="/photos/opening/12.jpg"><img src="/photos/opening/12_t.jpg"
					alt="A decorative gate stating 'May the hinges of friendship never grow rusty'"></a>
			</li>
		</ul>
<?php
Bottom();
?>

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
				<a href="01.jpeg"><img src="01_t.jpg" alt=
					"Construction materials strewn about a hardwood floor"></a>
			</li>
			<li>
				<a href="02.jpeg"><img src="02_t.jpg" alt=
					"The same construction materials and room, but from a different angle"></a>
			</li>
			<li>
				<a href="03.jpeg"><img src="03_t.jpg" alt=
					"The beginnings of two rooms, framed in and wired"></a>
			</li>
			<li>
				<a href="04.jpeg"><img src="04_t.jpg" alt=
					"The basement floor, with gravel and plumbing"></a>
			</li>
			<li>
				<a href="05.jpeg"><img src="05_t.jpg" alt=
					"The frosty parking lot, with the Adirondack mountains in the background"></a>
			</li>
			<li>
				<a href="06.jpeg"><img src="06_t.jpg" alt=
					"A view of the mountains through the window of the brewery"></a>
			</li>
			<li>
				<a href="07.jpeg"><img src="07_t.jpg" alt=
					""></a>
			</li>
			<li>
				<a href="08.jpeg"><img src="08_t.jpg" alt=
					"The snowy deck"></a>
			</li>
			<li>
				<a href="09.jpeg"><img src="09_t.jpg" alt=
					"The bar, with unfinished walls and ceiling behind"></a>
			</li>
			<li>
				<a href="10.jpeg"><img src="10_t.jpg" alt=
					"Insulated walls and a pair of coolers"></a>
			</li>
			<li>
				<a href="11.jpeg"><img src="11_t.jpg" alt=
					"A snowblower and a radial arm saw"></a>
			</li>
			<li>
				<a href="12.jpeg"><img src="12_t.jpg" alt=
					""></a>
			</li>
		</ul>
<?php
Bottom();
?>

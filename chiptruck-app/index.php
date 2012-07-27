<?php

/**
 * Small description of this file:
 * Lists of chip trucks in the city of Ottawa
 *
 * @author Susan Woodford <susanwoodford17@gmail.com>
 * @copyright 2012 Susan Woodford
 * @license BSD-3-Clause <http://github.com/..../NEW-BSD-LICENSE.txt>
 * @version 1.0.0
 * @package Ottawa Chip Truck Finder
 */

$chiptruck = 'main-page';
		if(isset($_GET['chiptruck'])) {
			$chiptruck = strtolower ($_GET	['chiptruck']);
		}
		
?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ottawa Chip Truck Finder</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
		<body>
		
			<div class="ottawa"><h1><strong>Ottawa</strong></h1></div>
			
			<div class="logo"><img src="images/chiptruckpic2.png" alt="Chip Truck"></div>
		
			<div class ="finder"><h1><strong>Finder</strong></h1></div>
			
				<div class="container">
			
					<h2 div class="fryfinder">French Fry Finder for Folks on the Fly</h2>
			
					<h3 div class="location">Choose a location:</h3>
					
							
				<nav>
					<ul>
						<li<?php if ($chiptruck !='downtown' && $chiptruck != 'central' && $chiptruck != 'south' && $chiptruck != 'east' && $chiptruck != 'west' && $chiptruck != 'all') {?> class="current"<?php } ?>><a href="?chiptruck=main-page">Map</a></li>
						<li<?php if ($chiptruck == 'downtown') { ?> class="current"<?php } ?>><a href="?chiptruck=downtown">Downtown</a></li>
						<li<?php if ($chiptruck == 'central') { ?> class="current"<?php } ?>><a href="?chiptruck=central">Central</a></li>
						<li<?php if ($chiptruck == 'south') { ?> class="current"<?php } ?>><a href="?chiptruck=south">South</a></li>
						<li<?php if ($chiptruck == 'east') { ?> class="current"<?php } ?>><a href="?chiptruck=east">East</a></li>
						<li<?php if ($chiptruck == 'west') { ?> class="current"<?php } ?>><a href="?chiptruck=west">West</a></li>
						<li<?php if ($chiptruck == 'all') { ?> class="current"<?php } ?>><a href="?chiptruck=all">All</a></li>
					</ul>
				</nav>
				
				<article>
					<?php
						switch ($chiptruck) {
							case 'downtown' :
								include 'includes/downtown.php';
							break;
							
							case 'central' :
								include 'includes/central.php';
							break;
							
							case 'south' :
								include 'includes/south.php';
							break;
							
							case 'east' :
								include 'includes/east.php';
							break;
							
							case 'west' :
								include 'includes/west.php';
							break;
							
							case 'all' :
								include 'includes/all.php';
							break;
							
							default:
								include 'includes/main-page.php';
							break;
							
						}
					
					?>
				
						<a href="add.php"><div class="addButton">Add a Location</div></a>
				</article>
			
		</div>
	
	</body>
</html>
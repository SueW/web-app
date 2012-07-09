<?php

$chiptruck = 'main-page';
		if(isset($_GET['chiptruck'])) {
			$chiptruck = strtolower ($_GET	['chiptruck']);
		}
		
?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ottawa Chip Truck Finder</title>
		<link href="chiptruck-app/css/general.css" rel="stylesheet">
	</head>

<body>

<nav>
	<ul>
		<li<?php if ($chiptruck !='downtown' && $chiptruck != 'central' && $chiptruck != 'south' && $chiptruck != 'east' && $chiptruck != 'west') {?> class="current"<?php } ?>><a href="?chiptruck=main-page">Ottawa Chip Truck Finder</a></li>
		<li<?php if ($chiptruck == 'downtown') { ?> class="current"<?php } ?>><a href="?chiptruck=downtown">Downtown</a></li>
		<li<?php if ($chiptruck == 'central') { ?> class="current"<?php } ?>><a href="?chiptruck=central">Central</a></li>
		<li<?php if ($chiptruck == 'south') { ?> class="current"<?php } ?>><a href="?chiptruck=south">South</a></li>
		<li<?php if ($chiptruck == 'east') { ?> class="current"<?php } ?>><a href="?chiptruck=east">East</a></li>
		<li<?php if ($chiptruck == 'west') { ?> class="current"<?php } ?>><a href="?chiptruck=west">West</a></li>
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
			
			default:
				include 'includes/main-page.php';
			break;
			
		}
	
	?>

</article>



</body>
</html>
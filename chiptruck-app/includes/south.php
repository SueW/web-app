<?php

require_once 'db.php';

$sql = $db->query('
	SELECT name, address
	FROM chiptruck
	WHERE zone = 3
');
$results = $sql->fetchAll();

?>

<h1>South</h1>

	<?php foreach ($results as $truckinfo) : ?>
	<h2>
		<?php echo $truckinfo['name']; ?>
		</a>
	</h2>
	<dl>
		<dd><?php echo $truckinfo['address']; ?></dd>
	</dl>
	<?php endforeach; ?>
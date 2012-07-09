<?php

require_once 'db.php';

$sql = $db->query('
	SELECT name, address
	FROM chiptruck
	WHERE zone = 4
');
$results = $sql->fetchAll();

?>

<h1>East</h1>

	<?php foreach ($results as $truckinfo) : ?>
	<h2>
		<?php echo $truckinfo['name']; ?>
		</a>
	</h2>
	<dl>
		<dd><?php echo $truckinfo['address']; ?></dd>
	</dl>
	<?php endforeach; ?>
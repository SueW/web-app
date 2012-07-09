<?php

require_once 'db.php';

$sql = $db->query('
	SELECT name, address
	FROM chiptruck
	WHERE zone = 5
');
$results = $sql->fetchAll();

?>

<h1>West End</h1>

	<?php foreach ($results as $truckinfo) : ?>
	<h3>
		<?php echo $truckinfo['name']; ?>
		</a>
	</h3>
	<dl>
		<dd><?php echo $truckinfo['address']; ?></dd>
	</dl>
	<?php endforeach; ?>
<?php

require_once 'db.php';

$sql = $db->query('
	SELECT name, address
	FROM chiptruck
	WHERE zone = 1
');
$results = $sql->fetchAll();

?>
<div class="content">

<div class="zone-header"><h2>Downtown Ottawa</h2></div>

	<?php foreach ($results as $truckinfo) : ?>
	<h4>
		<?php echo $truckinfo['name']; ?>:
		</a>
	</h4>
	<dl>
		<dd><?php echo $truckinfo['address']; ?></dd>
	</dl>
	<?php endforeach; ?>
</div>
<?php

require_once 'db.php';

$sql = $db->query('
	SELECT name, address
	FROM chiptruck
	ORDER BY name ASC
	
');
$results = $sql->fetchAll();

?>
<div class="content">
	<div class="zone-header"><h2>All Locations</h2></div>
	
		<?php foreach ($results as $truckinfo) : ?>
		<h3>
			<?php echo $truckinfo['name']; ?>:
			</a>
		</h3>
		<dl>
			<dd><?php echo $truckinfo['address']; ?></dd>
		</dl>
		<?php endforeach; ?>
		
</div>
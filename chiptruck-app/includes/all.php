<?php

/**
 * Small description of this file:
 * List of all chip trucks within all the zones in the City of Ottawa
 *
 * @author Susan Woodford <susanwoodford17@gmail.com>
 * @copyright 2012 Susan Woodford
 * @license BSD-3-Clause <http://github.com/web-app/NEW-BSD-LICENSE.txt>
 * @Ottawa Chip Truck Finder <http://github.com/web-app>
 * @version 1.0.0
 * @package Ottawa Chip Truck Finder
 */

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
	<dl>
		<?php foreach ($results as $truckinfo) : ?>
		
		<h4>
			<?php echo $truckinfo['name']; ?>:
			</a>
		</h4>
		
		<dd><?php echo $truckinfo['address']; ?></dd>
	</dl>
		<?php endforeach; ?>
		
</div>
<?php

/**
 * Small description of this file:
 * Adds a chip truck location 
 *
 * @author Susan Woodford <susanwoodford17@gmail.com>
 * @copyright 2012 Susan Woodford
 * @license BSD-3-Clause <http://github.com/web-app/NEW-BSD-LICENSE.txt>
 * @Ottawa Chip Truck Finder <http://github.com/web-app>
 * @version 1.0.0
 * @package Ottawa Chip Truck Finder
 */


require_once "includes/db.php";

$errors = array();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$zone = filter_input(INPUT_POST, 'zone', FILTER_SANITIZE_NUMBER_INT);


if ($_SERVER['REQUEST_METHOD'] =='POST'){
	if (strlen($name) < 1 || strlen($name) > 50){
		$errors['name'] = true;
	}

	if (strlen($address) < 1 || strlen($address) > 256){
		$errors['address'] = true;
	}
	
	if (strlen($zone) < 1 || strlen($zone) > 5){
		$errors['zone'] = true;
		
	}
		$sql = $db->prepare('
			INSERT INTO chiptruck (name, address, zone)
			VALUES (:name, :address, :zone)
		');
		
		$sql-> bindValue(':name', $name, PDO::PARAM_STR);
		$sql-> bindValue(':address', $address, PDO::PARAM_STR);
		$sql-> bindValue(':zone', $zone, PDO::PARAM_INT);
		$sql-> execute();
		
		header('Location: index.php');
		exit;

	}


?><!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8">
	<title>Add a Location</title>
	<link href="css/general.css" rel="stylesheet" >
</head>
<body>
	<a href="index.php">Back</a>
	
	<h1>Add a Chip Truck Location</h1>
		
	<form method="post" action="add.php">

		<div>
			<label for="name">
			Name of Chip Truck
			<?php if (isset($errors['name'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?></label>
			<input id="name" name="name" required value="<?php echo $name; ?>">
		</div>
		
		<div>
			<label for="address">
			Address
			<?php if (isset($errors['address'])) : ?>
			<strong class="error">is required</strong>
			<?php endif; ?></label>
			<input id="address" name="address" required value="<?php echo $address; ?>">
		</div>
		
		<div>
			<label for="zone">Zone</label>
				<select id="zone" name="zone" required value="<?php echo $director; ?>">
				<option value="1" selected>Downtown</option>
				<option value="2">Central</option>
				<option value="3">South</option>
				<option value="4">East</option>
				<option value="5">West</option>
			</select>
		</div>
		
				
		<button type="submit">Add</button>
		
			
					
	</form>
	
	
	
</body>
</html>
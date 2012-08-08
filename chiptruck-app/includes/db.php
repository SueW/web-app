<?php

/**
 * Small description of this file:
 * Opens a connection to the MySQL database
 *
 * @author Susan Woodford <susanwoodford17@gmail.com>
 * @copyright 2012 Susan Woodford
 * @license BSD-3-Clause <http://github.com/web-app/NEW-BSD-LICENSE.txt>
 * @Ottawa Chip Truck Finder <http://github.com/web-app>
 * @version 1.0.0
 * @package Ottawa Chip Truck Finder
 */

//Opens a connection to the MySQL database
// Shared between all the PHP files in our application

$user = getenv('MYSQL_USERNAME'); //The MySQL username
$pass = getenv('MYSQL_PASSWORD'); // The MySQL password
$host = getenv('MYSQL_DB_HOST'); 
$dbname = getenv('MYSQL_DB_NAME');

$data_source = sprintf('mysql:host=%s;dbname=%s', $host, $dbname);

// PDO: PHP Data Objects
// Allows us to connect to many different kinds of databases
$db = new PDO($data_source, $user, $pass);
$db->exec('SET NAMES utf8'); // forces the connection to communicate in UTF-8 & support many human languages
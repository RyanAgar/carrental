<?php 
// DB credentials.
define('DB_HOST','ryan-assignment2.database.windows.net');
define('DB_USER','ryan');
define('DB_PASS','tG046250@');
define('DB_NAME','car_db');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
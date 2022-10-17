<?php 
// DB credentials.
define('DB_HOST','20.212.18.101');
define('DB_USER','root');
define('DB_PASS','mypassword');
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
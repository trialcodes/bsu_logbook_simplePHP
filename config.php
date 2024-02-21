<?php
/**
 * using mysqli_connect for database connection
 */
$databaseHost = 'localhost';
$databaseName = 'db_bsumonitory';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>

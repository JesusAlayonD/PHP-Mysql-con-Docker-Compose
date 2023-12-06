<?php
$databaseHost = 'mysql_host';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = 'test.2023';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

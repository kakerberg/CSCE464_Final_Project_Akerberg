<?php
/**
 * Kevin Akerberg
 * CSCE 464
 * Quiz 4/21
 * databaseConnect.php
 * 
 * This file serves as the script that sets up the connection to the local database
 */


// database parameters
$dbLocation = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'final_proj_464';

if (!isset($dbLocation)) {
    echo "Error: database location not provided";
    exit;
}

if (!isset($dbUsername)) {
    echo "Error: database username not provided";
    exit;
}

if (!isset($dbPassword)) {
    echo "Error: database password not provided";
    exit;
}

if (!isset($dbName)) {
    echo "Error: database name not provided";
    exit;
}

$database = mysqli_connect($dbLocation, $dbUsername, $dbPassword, $dbName);
if (mysqli_connect_errno() || ($database == null)) {
    printf("Database connection failed: %s.", mysqli_connect_error());
    exit;
}
?>
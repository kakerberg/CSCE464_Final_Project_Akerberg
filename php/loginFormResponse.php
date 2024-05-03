<?php
/**
 * Kevin Akerberg
 * CSCE 464
 * Final Project
 * loginFormResponse.php
 * 
 * This file serves as the script that processes a login requeset to the website
 */
session_start();

include("../php/dataBaseConnect.php");

$query = "SELECT * FROM Customers WHERE username = '$_POST[username]'";
$validCustomers = mysqli_query($db, $query);
?>
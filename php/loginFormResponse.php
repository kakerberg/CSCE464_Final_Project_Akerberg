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

include ("../php/dataBaseConnect.php");

$query = "SELECT * FROM Customers WHERE username = '$_POST[username]'";
$validCustomers = mysqli_query($db, $query);
$numValidCustomers = mysqli_num_rows($validCustomers);

if ($numValidCustomers == 0) {
    header("Location: ../pages/loginForm.php?retrying=true");
}
if ($numValidCustomers == 1) {
    $row = mysqli_fetch_array($validCustomers, MYSQLI_ASSOC);
    if ($_POST['password'] == $row['password']) { // password check to log user in
        $_SESSION['email'] = $row['email'];
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['username'] = $row['username'];
    } else {
        header("Location: ../pages/loginForm.php?retrying=true");
    }
}
mysqli_close($db);
?>
<?php
/**
 * Kevin Akerberg
 * CSCE 464
 * Final Project
 * registerUser.php
 * 
 * This file serves as the processing script for inserting customer data into the database from 
 * the registration form
 * 
 */

function emailInDB($database, $email)
{
    $query = "SELECT * FROM Customers WHERE email = '$email'";
    $customers = mysqli_query($database, $query);
    $numRecords = mysqli_num_rows($customers);
    if ($numRecords > 0) {
        return true;
    } else {
        return false;
    }
}

function getLogin($database, $login)
{
    $unique_login = $login;
    $query = "SELECT * FROM Customers WHERE username = '$unique_login'";
    $customers = mysqli_query($database, $query);
    $numCustomers = mysqli_num_rows($customers);
    if ($numCustomers != 0) {
        // append integers until a unique name is found
        $i = -1;
        while ($numCustomers != 0) {
            $i++;
            $unique_login = $login . $i;
            $query = "SELECT * FROM Customers WHERE username = '$unique_login'";
            $customers = mysqli_query($database, $query);
            $numCustomers = mysqli_num_rows($customers);
        }
    }
    return $unique_login;
}

if (emailInDB($database, $_POST['email'])) {
    echo "<h3>This email is already in the database. Are you already registered?</h3>";
} else {
    $unique_login = getLogin($database, $_POST["username"]);
    if ($unique_login != $_POST["username"]) {
        echo "<h3>Username already exists, assigned username $unique_login instead</h3>";
    }

    $query = "INSERT INTO Customers(email, firstName, lastName, phone, address, username) 
              VALUES ('$_POST[email]', '$_POST[firstName]', '$_POST[lastName]', '$_POST[phone]', '$_POST[address]', '$unique_login');";

    $good_insertion = mysqli_query($database, $query);
    echo "<h3>Thank you for registering! Your data was successfully saved.</h3>";
}
mysqli_close($database);
?>
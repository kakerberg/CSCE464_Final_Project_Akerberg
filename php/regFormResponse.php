<?php
/**
 * Kevin Akerberg
 * CSCE 464
 * Final Project
 * regFormResponse.php
 * 
 * This file serves as the script that connects the webpage to the database and then launches
 * the register user script
 * 
 */
?>

<body>
    <div>
        <?php
        include ("../php/databaseConnect.php"); // connects to database
        ?>
    </div>

    <div>
        <?php
        include ("../php/registerUser.php"); // registers user data
        ?>
    </div>
    <div>
        <?php
        header("Location: ../pages/home.html");
        ?>
</body>
<?php
/**
 * Kevin Akerberg
 * CSCE 464
 * Final Project
 * sellFormResponse.php
 * 
 * This file serves as the script that connects the webpage to the database and then launches
 * the sell car script
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
        include ("../php/sellCar.php"); // adds car to database
        ?>
    </div>
    <div>
        <?php
        header("Location: ../pages/usedCars.php");
        ?>
</body>
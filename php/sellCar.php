<?php
/**
 * Kevin Akerberg
 * CSCE 464
 * Final Project
 * sellCar.php
 * 
 * This file serves as the processing script for inserting car data into the database from 
 * the sell form
 * 
 */

$imagePath = "../images/" . $_FILES['userfile']['name'];
move_uploaded_file($_FILES['userfile']['tmp_name'],$imagePath);

$query = "INSERT INTO usedCars(modelYear, make, model, price, mileage, imagePath)
            VALUES('$_POST[year]', '$_POST[make]', '$_POST[model]', '$_POST[price]', '$_POST[mileage]', '$imagePath');";

$result = mysqli_query($database, $query);

echo "<h3>Thank you for selling with us! Your data was successfully saved.</h3>";

mysqli_close($database);
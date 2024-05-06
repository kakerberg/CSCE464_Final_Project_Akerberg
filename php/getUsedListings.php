<?php
// Author: Kevin Akerberg
// Date: 5/6/2024
// Assignment: Final Project 
// Course: CSCE 464
// File: getUsedListings.php

// Gets listing data out of database

include ("../php/databaseConnect.php"); // connects to database

$query = "SELECT * FROM usedCars";
$usedCars = mysqli_query($database, $query);

while ($usedCar = mysqli_fetch_array($usedCars)) {
    echo "<table>
    <tr>
        <td>
            <div class='listing_table'>
                <table>
                    <tr>
                        <td colspan='2'><img src='{$usedCar['imagePath']}'></td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <h1>{$usedCar['modelYear']} {$usedCar['make']} {$usedCar['model']}</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>List price: \${$usedCar['price']}</p>
                        </td>
                        <td>
                            <p>Mileage: {$usedCar['mileage']} miles</p>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
</table>";
}
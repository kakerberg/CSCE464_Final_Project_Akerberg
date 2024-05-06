<?php
// Author: Kevin Akerberg
// Date: 5/6/2024
// Assignment: Final Project 
// Course: CSCE 464
// File: getNewListings.php

// Gets listing data out of database

include ("../php/databaseConnect.php"); // connects to database

$query = "SELECT * FROM newCars";
$newCars = mysqli_query($database, $query);

while ($newCar = mysqli_fetch_array($newCars)) {
    echo "<table>
    <tr>
        <td>
            <div class='listing_table'>
                <table>
                    <tr>
                        <td colspan='2'><img src='{$newCar['imagePath']}'></td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <h1>{$newCar['modelYear']} {$newCar['make']} {$newCar['model']}</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>List price: \${$newCar['price']}</p>
                        </td>
                        <td>
                            <p>Mileage: {$newCar['mileage']} miles</p>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
</table>";
}
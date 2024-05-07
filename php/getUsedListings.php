<?php
// Author: Kevin Akerberg
// Date: 5/6/2024
// Assignment: Final Project 
// Course: CSCE 464
// File: getUsedListings.php

// Gets listing data out of database

include ("../php/databaseConnect.php"); // connects to database

if (array_key_exists("sorting", $_POST)) {
    $selectValue = $_POST["sorting"];
}

if (isset($selectValue)) {
    if ($selectValue == "pricelotohi") {
        $query = "SELECT * FROM usedCars ORDER BY price ASC";
    } else if ($selectValue == "pricehitolo") {
        $query = "SELECT * FROM usedCars ORDER BY price DESC";
    } else if ($selectValue == "milelotohi") {
        $query = "SELECT * FROM usedCars ORDER BY mileage ASC";
    } else if ($selectValue == "milehitolo") {
        $query = "SELECT * FROM usedCars ORDER BY mileage DESC";
    }
} else {
    $query = "SELECT * FROM usedCars";
}

$usedCars = mysqli_query($database, $query);

while ($usedCar = mysqli_fetch_array($usedCars)) {
    // webpage creation
    $fileName = $usedCar['make'] . $usedCar['model'] . $usedCar['carId'] . ".php";
    $fileName = str_replace(" ", "", $fileName);
    $individualPage = fopen($fileName, "w");

    fwrite($individualPage, file_get_contents("../pages/listingTemplateUsed.php"));

    echo "<table>
    <tr>
        <td>
            <div class='listing_table'>
                <table>
                    <tr>
                        <td colspan='2'><a href='$fileName'><img src='{$usedCar['imagePath']}'></a></td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <a href='$fileName'><h1>{$usedCar['modelYear']} {$usedCar['make']} {$usedCar['model']}</h1></a>
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
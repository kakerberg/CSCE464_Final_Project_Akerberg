<?php
// Author: Kevin Akerberg
// Date: 5/6/2024
// Assignment: Final Project 
// Course: CSCE 464
// File: getNewListings.php

// Gets listing data out of database

include ("../php/databaseConnect.php"); // connects to database

if (array_key_exists("sorting", $_POST)) {
    $selectValue = $_POST["sorting"];
}

if (isset($selectValue)) {
    if ($selectValue == "pricelotohi") {
        $query = "SELECT * FROM newCars ORDER BY price ASC";
    } else if ($selectValue == "pricehitolo") {
        $query = "SELECT * FROM newCars ORDER BY price DESC";
    } else if ($selectValue == "milelotohi") {
        $query = "SELECT * FROM newCars ORDER BY mileage ASC";
    } else if ($selectValue == "milehitolo") {
        $query = "SELECT * FROM newCars ORDER BY mileage DESC";
    }
} else {
    $query = "SELECT * FROM newCars";
}

$newCars = mysqli_query($database, $query);

while ($newCar = mysqli_fetch_array($newCars)) {
    // webpage creation
    $fileName = $newCar['make'] . $newCar['model'] . $newCar['carId'] . ".php";
    $fileName = str_replace(" ", "", $fileName);
    $individualPage = fopen($fileName, "w");

    fwrite($individualPage, file_get_contents("../pages/listingTemplate.php"));

    echo "<table>
    <tr>
        <td>
            <div class='listing_table'>
                <table>
                    <tr>
                        <td colspan='2'><a href='$fileName'><img src='{$newCar['imagePath']}'></a></td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <a href='$fileName'><h1>{$newCar['modelYear']} {$newCar['make']} {$newCar['model']}</h1></a>
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
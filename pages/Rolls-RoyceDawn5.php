<?php
// Author: Kevin Akerberg
// Date: 3/13/2024
// Assignment: Final Project 
// Course: CSCE 464
// File: listingTemplate.php

// This file serves as a template to make listing pages for each vehicle for sale

session_start();

include ("../php/dataBaseConnect.php");

$fileName = basename(__FILE__, '.php');
$carId = substr($fileName, -1);

$query = "SELECT * FROM newCars WHERE carId = " . $carId;
$newCars = mysqli_query($database, $query);
$newCar = mysqli_fetch_array($newCars);
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php
    echo $newCar['modelYear'] . " " . $newCar['make'] . " " . $newCar['model'] ?></title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <main class="top">
        <header class="header">
            <a href="home.html"><img src="../images/bmw_m3.jpg" width="768" height="280"></a>
            <h1>Bids & Cars</h1>
            <a href="regForm.php"><button class="registerButton" type="button">Register</button></a>
            <a href="loginForm.php"><button class="loginButton" type="button">Login</button></a>
        </header>
        <div class="menuParent">
            <div class="menuChild">
                <a href="home.html">Home</a>
            </div>
            <div class="menuChild">
                <a href="newCars.php">New Cars</a>
            </div>
            <div class="menuChild">
                <a href="usedCars.php">Used Cars</a>
            </div>
            <div class="menuChild">
                <a href="finance.html">Financing</a>
            </div>
            <div class="menuChild">
                <a href="sellCarForm.php">Sell Your Car</a>
            </div>
        </div>
        <div class="main">
            <div class='listing_table_indiv'>
                <table>
                    <tr>
                        <td colspan='2'><img src=<?php echo $newCar['imagePath'] ?> </td>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <h1><?php echo $newCar['modelYear'] . " " . $newCar['make'] . " " . $newCar['model'] ?></h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>List price: <?php echo "$" . $newCar['price'] ?></p>
                        </td>
                        <td>
                            <p>Mileage: <?php echo $newCar['mileage'] . " miles" ?></p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="contactform">
                <form id="contactForm" action="../php/contactForm.php" method="post">
                    <table>
                        <tr>
                            <td>First name:</td>
                            <td><input required type="text" name="firstName"></td>
                        </tr>
                        <tr>
                            <td>Last name:</td>
                            <td><input required type="text" name="lastName"></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input required type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td>Phone number:</td>
                            <td><input required type="text" name="phone"></td>
                        </tr>
                        <tr>
                            <td>Message:</td>
                            <td><input required type="text" name="message"></td>
                        </tr>
                        <td><input type="submit" value="Contact Us"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>
</body>
<footer>
    <p>Bids & Cars<br>
        Author: Kevin Akerberg<br>
        CSCE 464</p><br>
    <a href="https://github.com/kakerberg/CSCE464_Final_Project_Akerberg"><img src="../images/git.png"></a>
</footer>

</html>
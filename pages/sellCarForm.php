<?php
/**
 * Kevin Akerberg
 * CSCE 464
 * Final Project
 * sellCar.php
 * 
 * This file serves as the form a user enters info in to sell their car
 */

session_start();
?>

<head>
    <title>Sell Your Car on Bids & Cars</title>
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
        <div class="sell">
            <h1>Enter your info to sell your car on our website!</h1>
            <form id="sellform" action="../php/sellFormResponse.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Year:</td>
                        <td><input required type="number" name="year"></td>
                    </tr>
                    <tr>
                        <td>Make:</td>
                        <td><input required type="text" name="make"></td>
                    </tr>
                    <tr>
                        <td>Model:</td>
                        <td><input required type="text" name="model"></td>
                    </tr>
                    <tr>
                        <td>Mileage:</td>
                        <td><input required type="number" name="mileage"></td>
                    </tr>
                    <tr>
                        <td>Asking price:</td>
                        <td><input required type="number" name="price"></td>
                    </tr>
                    <tr>
                        <td>Image:</td> <!--TODO: figure out how to upload images to database and persist path to retrieve image -->
                        <td><input required type="file" name="userfile"></td>
                    <tr>
                        <td><input type="submit" value="Sell!"></td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
</body>
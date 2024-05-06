<?php
// Author: Kevin Akerberg
// Date: 3/13/2024
// Assignment: Final Project 
// Course: CSCE 464
// File: newCars.php

// New car listing page

session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>New Cars</title>
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
            <h1>New Vehicles</h1>
            <label for="sorting">Sort by:</label>
            <form action="" method="post">
                <select name="sorting" id="sorting">
                    <option value="pricelotohi">Price (low to high)</option>
                    <option value="pricehitolo">Price (high to low)</option>
                    <option value="milelotohi">Mileage (low to high)</option>
                    <option value="milehitolo">Mileage (high to low)</option>
                </select>
                <input type="submit" name="submit" value="Sort"/>
            </form>
            <?php
            include ("../php/getNewListings.php");
            ?>
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
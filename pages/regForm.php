<?php
/**
 * Kevin Akerberg
 * CSCE 464
 * Final Project
 * regForm.php
 * 
 * This file serves as the form a user enters their info into to register on a website
 */

session_start();
?>

<head>
    <title>Bids & Cars Registration</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <main class="top">
        <header class="header">
            <a href="home.html"><img src="../images/bmw_m3.jpg" width="768" height="280"></a>
            <h1>Bids & Cars</h1>
            <a href="regForm.php"><button class="registerButton" type="button">Register</button></a>
        </header>
        <div class="menuParent">
            <div class="menuChild">
                <a href="home.html">Home</a>
            </div>
            <div class="menuChild">
                <a href="newCars.html">New Cars</a>
            </div>
            <div class="menuChild">
                <a href="usedCars.html">Used Cars</a>
            </div>
            <div class="menuChild">
                <a href="finance.html">Financing</a>
            </div>
        </div>
        <div class="reg">
            <h1>Welcome! Register with this form:</h1>
            <form id="regForm" action="../php/regFormResponse.php" method="post">
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
                        <td>Address:</td>
                        <td><input required type="text" name="address"></td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><input required type="text" name="username"></td>
                    <tr>
                        <td><input type="submit" value="Register"></td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
</body>
<?php
/**
 * Kevin Akerberg
 * CSCE 464
 * Final Project
 * loginForm.php
 * 
 * This file serves as the form a user enters their info into to login to a website
 */

session_start();
if (isset($_SESSION['username']))
    header("Location: ../pages/home.html");
$retrying = isset($_GET['retrying']) ? true : false;
?>

<head>
    <title>Bids & Cars Login</title>
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
                <a href="newCars.html">New Cars</a>
            </div>
            <div class="menuChild">
                <a href="usedCars.html">Used Cars</a>
            </div>
            <div class="menuChild">
                <a href="finance.html">Financing</a>
            </div>
        </div>
        <div class="login">
            <h1>Welcome back! Login here:</h1>
            <form id="loginform" action="../php/loginFormResponse" method="post">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input required type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input required type="text" name="password"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="login"></td>
                    </tr>

                    <?php if ($retrying) { ?>

                        <tr>
                            <td colspan="2" class="ErrorMessage">
                                Sorry, but your login procedure failed.
                                <br>An invalid username or password was entered.
                                <br>Please try again to enter correct login information.
                            </td>
                        </tr>

                    <?php } ?>
                </table>
            </form>
    </main>
</body>
<?php

/*
 * newTour.php
 * ------------
 * This script enters a new tour into the database
 * ------------
 * $appSecret -> HTTP-GET field, used to receive the app secret, transmitted by the client
 * $tourDriver -> HTTP-GET field, used to receive the driver, transmitted by the client
 * $tourTruck -> HTTP-GET field, used to receive the drivers truck, transmitted by the client
 * $tourFrom -> HTTP-GET field, used to receive the starting point of the tour, transmitted by the client
 * $tourTo -> HTTP-GET field, used to receive the endpoint of the tour, transmitted by the client
 * $tourFreight -> HTTP-GET field, used to receive the freight the driver has transported, transmitted by the client
 * $tourDistance -> HTTP-GET field, used to receive the tours distance the driver travels, transmitted by the client
 * $tourDistDriven -> HTTP-GET field, used to receive the actual distance the driver travelled, transmitted by the client
 * $jobIncome -> HTTP-GET field, used to receive the income the driver earned upon completion, transmitted by the client
 * $distanceTotal -> HTTP-GET field, used to receive the total amount of distance the truck has driven, transmitted by the client
 * $fuel -> HTTP-GET field, used to receive the total amount of fuel consumption of the tour, transmitted by the client
 * ------------
 * Author: EnKdev
 * Created: 13.09.2020, 23:22 (09/13/2020, 11:22 PM)
 * Last updated: 25.11.2020, 16:34 (11/25/2020, 4:34 PM)
 */

$appSecret = $_GET["secret"];
$tourDriver = $_GET["tourDriver"];
$tourTruck = $_GET["tourTruck"];
$tourFrom = $_GET["tourFrom"];
$tourTo = $_GET["tourTo"];
$tourFreight = $_GET["tourFreight"];
$tourDistance = $_GET["tourDistance"];
$tourDistDriven = $_GET["distanceDriven"];
$jobIncome = $_GET["jobIncome"];
$distanceTotal = $_GET["distanceTotal"];
$fuel = $_GET["fuelUsed"];

if ($appSecret === NULL or $appSecret !== "")
    echo "Access denied";
else {
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "tourlogger";

    $conn = new MySQLi($servername, $username, $password, $dbname);

    if ($conn->connect_error)
        die("Error connecting to database!!!\nCurrent Error: " . $conn->connect_error);


    $sql = "INSERT INTO `tourlogger`.`tourdata` (tourDriver, truckUsed, `from`, `to`, freight, tourDistance, distDriven, jobIncome, distanceTotal, fuelUsed) VALUES ('$tourDriver', '$tourTruck', '$tourFrom', '$tourTo', '$tourFreight', '$tourDistance', '$tourDistDriven', '$jobIncome', '$distanceTotal', '$fuel')";

    if ($conn->query($sql) === TRUE)
        echo "Created new Tour.";
    else
        echo "Error: " . $sql . "<br>" . $conn->error;


    $conn->close();
}


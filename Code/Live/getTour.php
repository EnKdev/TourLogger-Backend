<?php

/*
 * getTour.php
 * ------------
 * This script gets a single tour from the database by looking the specified ID up before returning it as a single string to the client.
 * ------------
 * $appSecret -> HTTP-GET field, used to receive the app secret, transmitted by the client
 * $tourId -> HTTP-GET field, used to lookup the ID, transmitted by the client
 * ------------
 * Author: EnKdev
 * Created: 13.09.2020, 23:22 (09/13/2020, 11:22 PM)
 * Last updated: 25.11.2020, 16:40 (11/25/2020, 4:38 PM)
 */

$appSecret = $_GET["secret"];
$tourId = $_GET["tId"];

if ($appSecret === NULL or $appSecret !== "")
    echo "Access denied";
else {
    $link = mysqli_connect("127.0.0.1", "root", "") or die(mysqli_error($link));
    mysqli_select_db($link, "tourlogger") or die(mysqli_error($link));

    $query = "SELECT * FROM `tourlogger`.`tourdata` WHERE tourId = '$tourId'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row["tourId"] . "|" . $row["tourDriver"] . "|" . $row["truckUsed"] . "|" . $row["from"] . " -> " . $row["to"] . "|" . $row["freight"] . "|" . $row["tourDistance"] . " km|" . $row["distDriven"] . " km|" . $row["jobIncome"] . " €|" . $row["distanceTotal"] . " km|" . $row["fuelUsed"] . " l";
        }
    }
}


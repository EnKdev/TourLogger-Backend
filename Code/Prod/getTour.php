<?php

// !!!---PRODUCTION SCRIPT, DO NOT DEPLOY ON LIVE-SECTION---!!!

/*
 * getTour.php
 * ------------
 * This script gets a single tour from the database by looking the specified ID up before returning it as a single string to the client.
 * ------------
 * $appSecret -> HTTP-GET field, used to receive the app secret, transmitted by the client
 * $tourId -> HTTP-GET field, used to lookup the ID, transmitted by the client
 * $region -> HTTP-GET field, used to sort the data based by client region, transmitted by the client
 * $game -> HTTP-GET field, used to sort the data based by game, transmitted by the client
 * ------------
 * Author: EnKdev
 * Created: 13.09.2020, 23:22 (09/13/2020, 11:22 PM)
 * Last updated: 27.11.2020, 17:34 (11/27/2020, 5:34 PM)
 */

require('./pdoConnector.php');

$appSecret = $_GET["secret"];
$tourId = $_GET["tId"];
$region = $_GET["region"];
$game = $_GET["game"];

// Field Testing, comment out before deploying.
echo $appSecret . "\n\n";
echo $tourId . "\n\n";
echo $region . "\n\n";
echo $game . "\n\n";

if ($appSecret === NULL or $appSecret !== "")
    echo "Access denied";
else {
    switch ($region) {
        case "ASCH": // Asia - China
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.ch.ats` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.ch.ets` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
            }

            break;

        case "ASJP": // Asia - Japan
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.jp.ats` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.jp.ets` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
            }

            break;

        case "ASSK": // Asia - South Korea
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.sk.ats` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.sk.ets` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
            }

            break;

        case "AUS": // Australia
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.aus.ats` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;
                    
                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.aus.ets` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
            }

            break;

        case "EUE": // Eastern Europe
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.eue.ats` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.eue.ets` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
            }

            break;

        case "EUW": // Western Europe
            switch ($game) {
                case "ATS": // American Truck Simulator
                   $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.euw.ats` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.euw.ets` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
            }

            break;

        case "NA": // North America
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.na.ats` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.na.ets` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
            }

            break;

        case "SA": // South America
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.sa.ats` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.sa.ets` WHERE tourId = :tourId");
                    $query->execute([':tourId' => $tourId]);

                    $tourStr = $query->fetch();
                    $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
                    echo $str;

                    break;
            }

            break;

        case "TEST": // Test, necessary for production, accessing old Database!
            $query = $db->prepare("SELECT * FROM `tourlogger`.`tourdata` WHERE tourId = :tourId");
            $query->execute([':tourId' => $tourId]);

            $tourStr = $query->fetch();
            $str = $tourStr["tourId"] . "|" . $tourStr["tourDriver"] . "|" . $tourStr["truckUsed"] . "|" . $tourStr["from"] . " -> " . $tourStr["to"] . "|" . $tourStr["freight"] . "|" . $tourStr["tourDistance"] . " km|" . $tourStr["distDriven"] . " km|" . $tourStr["jobIncome"] . " €|" . $tourStr["distanceTotal"] . " km|" . $tourStr["fuelUsed"] . " l";
            echo $str;

            break;
    }
}

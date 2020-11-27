<?php

/*
 * getTours.php
 * ------------
 * This script gets all the tours stored in an array and returns it to the client.
 * ------------
 * $appSecret -> HTTP-GET field, used to receive the app secret, transmitted by the client
 * $region -> HTTP-GET field, used to fetch data related to the client region, transmitted by the client
 * $game -> HTTP-GET field, used to fetch data related to the game, transmitted by the client
 * ------------
 * Author: EnKdev
 * Created: 13.09.2020, 23:22 (09/13/2020, 11:22 PM)
 * Last updated: 27.11.2020 21:56 (11/27/2020, 9:56 PM)
 */

require('./pdoConnector.php');

$appSecret = $_GET["secret"];
$region = $_GET["region"];
$game = $_GET["game"];

// Field testing
echo $appSecret . "\n\n";
echo $region . "\n\n";
echo $game . "\n\n";

if ($appSecret === NULL or $appSecret !== "")
    echo "Access denied";
else {
    switch ($region) {
        case "ASCH": // Asia - China
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.ch.ats`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.ch.ets`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
            }

            break;
        case "ASJP": // Asia - Japan
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.jp.ats`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.jp.ets`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
            }

            break;
        case "ASSK": // Asia - South Korea
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.sk.ats`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.sk.ets`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
            }

            break;
        case "AUS": // Australia
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.aus.ats`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.aus.ets`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
            }

            break;
        case "EUE": // Eastern Europe
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.eue.ats`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.eue.ets`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
            }

            break;
        case "EUW": // Western Europe
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.euw.ats`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.euw.ets`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
            }

            break;
        case "NA": // North America
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.na.ats`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.na.ets`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
            }

            break;
        case "SA": // South America
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.sa.ats`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.sa.ets`");
                    $query->execute();

                    $dbElems[] = $query->fetchAll();
                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
            }
        case "TEST": // Test, necessary for production, accessing old database!
            $dbElems = array();
            $query = $db->prepare("SELECT * FROM `tourlogger`.`tourdata`");
            $query->execute();

            $dbElems[] = $query->fetchAll();
            $dbJson = json_encode($dbElems);

            echo $dbJson;
    }
}

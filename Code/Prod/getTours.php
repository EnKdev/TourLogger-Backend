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
 * Last updated: 27.11.2020 22:13 (11/27/2020, 10:13 PM)
 */

require('./pdoConnector.php');

$appSecret = $_GET["secret"];
$region = $_GET["region"];
$game = $_GET["game"];

// Field testing
/*
echo $appSecret . "\n\n";
echo $region . "\n\n";
echo $game . "\n\n";
*/

if ($appSecret === NULL or $appSecret !== "")
    echo "Access denied";
else {
    switch ($region) {
        case "ASCH": // Asia - China
            switch ($game) {
                case "ATS": // American Truck Simulator
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.ch.ats`");
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.ch.ets`");
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

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
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.jp.ets`");
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

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
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.as.sk.ets`");
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

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
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.aus.ets`");
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

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
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.eue.ets`");
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

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
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.euw.ets`");
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

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
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.na.ets`");
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

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
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
                case "ETS2": // Euro Truck Simulator 2
                    $dbElems = array();
                    $query = $db->prepare("SELECT * FROM `tourlogger7`.`region.sa.ets`");
                    $result = $query->execute();

                    if ($result) {
                        while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                            $dbElems[] = $row;
                        }
                    }

                    $dbJson = json_encode($dbElems);

                    echo $dbJson;

                    break;
            }
        case "TEST": // Test, necessary for production, accessing old database!
            $dbElems = array();
            $query = $db->prepare("SELECT * FROM `tourlogger`.`tourdata`");
            $result = $query->execute();

            if ($result) {
                while ($row = $query->fetchAll(\PDO::FETCH_ASSOC)) {
                    $dbElems[] = $row;
                }
            }

            $dbJson = json_encode($dbElems);

            echo '<pre>';
            print_r($dbJson);
            echo '</pre>';
    }
}

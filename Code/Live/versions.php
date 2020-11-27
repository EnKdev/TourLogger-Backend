<?php

/*
 * versions.php
 * ------------
 * This file stores all the relevant version numbers (and the version string) of TourLogger, as well as relevant backend information.
 * ------------
 * $appVersion -> This increases each time an update has been made (e.G: The client-app is updated)
 *                Once this happens, The value of this field is set to the client number.
 *                
 * $fileFormatVersion -> This denotes the Format the client saves data in.
 *                       1) -> Plain Json
 *                       2) -> .dat files (currently used)
 *                       
 * $dbVersion -> This denotes the current version of the database the backend operates on.
 *               If changes to the database is made, e.G for a major update, then the version number increases.
 *               
 * $secretVersion -> This denotes the current version of the secret needed to use the backend.
 *                   The secret changes every month, so the number increases by 1 every month too.
 *                   
 * $versionString -> This unifies all of the above fields into one string which is then returned upon requesting this PHP-Script.
 *                   The client takes care of the rest to parse it.
 * ------------
 * Author: EnKdev
 * Created: 13.09.2020, 23:23 (09/13/2020, 11:23 PM)
 * Last updated: 25.11.2020, 16:26 (11/25/2020, 4:26 PM)    
 */

$appVersion = "6.0.1";
$fileFormatVersion = "2";
$dbVersion = "3";
$secretVersion = "2";
$versionString = $appVersion . "~|~" . $fileFormatVersion . "~|~" . $dbVersion . "~|~" . $secretVersion;

echo $versionString;
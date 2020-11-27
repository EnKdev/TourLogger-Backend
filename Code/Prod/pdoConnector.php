<?php

include dirname(__FILE__) . "./lib/connection.php";
@header('Content-Type: text/html; charset=utf-8');

try {
    $db = new PDO("mysql:host=localhost;dbName=tourlogger7", 'root', '', array(
        PDO::ATTR_PERSISTENT => true
    ));

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
<?php
$dbLink = null;
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/lib/lib.php';
require_once __DIR__ . '/app/App.php';
session_start();
$dbLink = mysqli_connect($dbmsHost, $dbmsAccount, $dbmsPw, $dbName);

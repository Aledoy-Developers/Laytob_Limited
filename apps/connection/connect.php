<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
ini_set('display_errors', 0);
ob_start();
date_default_timezone_set('Africa/Lagos'); 

$servername = "localhost";
$databaseUsername = "mercha15_haut_logistics";
$daatabasePassword = "Aledoy@@2025!";
$database = "mercha15_haut_logistics";

$db = mysqli_connect($servername, $databaseUsername, $daatabasePassword, $database) or die('Cannot connect to database');
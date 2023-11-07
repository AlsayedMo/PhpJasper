<?php
// Database-instellingen
$db_host = 'localhost';
$db_name = 'BakkerijWeb';
$db_user = 'Bakkerij';
$db_password = '223349';

// Maak een databaseverbinding
$conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Basisinstellingen
define('SITE_URL', 'http://localhost/8080');
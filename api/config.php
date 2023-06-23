<?php

session_start();

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kodego_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die ("Connection error: " . $conn ->connect_error);
}

?>
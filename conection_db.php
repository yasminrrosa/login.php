<?php



$name ="localhost";
$db_user = "root";
$db_password = "";


$mysqli = new mysqli("$name","$db_user", "$db_password");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
} 
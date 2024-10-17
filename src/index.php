<?php

require_once "db.php";

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email TEXT NOT NULL,  
    privatKey TEXT DEFAULT NULL,
    publicKey TEXT DEFAULT NULL
)";
$conn->prepare($sql)->execute();

$sql = "CREATE TABLE IF NOT EXISTS messages (
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    sender TEXT NOT NULL,
    reciever TEXT NOT NULL,
    message TEXT NOT NULL,
    iv TEXT NOT NULL
)";
$conn->prepare($sql)->execute();

?>


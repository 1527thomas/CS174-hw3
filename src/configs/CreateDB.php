<?php

namespace cs174\hw3\init;

require_once("config.php");
// calls configs namespace to grab constants for login
$mysqli = new \mysqli("127.0.0.1:" . \cs174\hw3\configs\DB_PORT, \cs174\hw3\configs\DB_USR, \cs174\hw3\configs\DB_PWD);
if($mysqli->connect_errno) {
    print("Connection Error: " . ($mysqli->connect_errno) . "\n");
}
else {
    print("Connection Success \n");
}

// statements to create database hw3, create the genre and review tables
$statements = [
    "CREATE DATABASE IF NOT EXISTS hw3",
    "USE hw3",
    "CREATE TABLE IF NOT EXISTS hw3 . Genres (id INT NOT NULL AUTO_INCREMENT, name VARCHAR(50) NOT NULL, PRIMARY KEY (id)) ENGINE = InnoDB",
    "CREATE TABLE IF NOT EXISTS hw3 . Reviews (id INT NOT NULL AUTO_INCREMENT, title VARCHAR(50) NOT NULL, post LONGTEXT NOT NULL, genreId INT NOT NULL, date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (id)) ENGINE = InnoDB"
];

foreach($statements as $statement) {
    printf("Statement Executing: $statement \n");
    $res = $mysqli->query($statement);
    print("Result of statement: $res \n");
}
$mysqli->close();
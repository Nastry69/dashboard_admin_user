<?php

$host = "localhost";
$user = "root";
$password = "motdepasse";
$database = "database";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
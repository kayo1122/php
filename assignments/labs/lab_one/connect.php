<?php
// connect.php/This file connects to a database using PDO.
// Try/catch blocks are used to handle connection errors.

$host = "localhost";
$dbname = "lab_one_db";   // Pretend this database exists lol
$username = "root";      // Default for XAMPP
$password = "";          // Default for XAMPP

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    // Create PDO connection
    $pdo = new PDO($dsn, $username, $password);

    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Stop script if connection fails
    die("Database connection failed: " . $e->getMessage());
}

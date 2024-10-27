<?php
// Establish connection to the database
$con = mysqli_connect("localhost", "root", "", "store.sql");

// Check if connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Start the session if it's not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
    $server = "localhost";
    $username = "root";
    $password = "abc123.";
    $database = "test";

    $conn = mysqli_connect($server, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
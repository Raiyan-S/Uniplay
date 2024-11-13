<?php
$servername = "localhost";
$username = "root";
$password = "IHBIVKOIejGqXxLeJWmdbHYVBSolqvcQ";
$dbname = "railway";
$port = 3306;

// Enable error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    echo "Connected successfully";
} catch (mysqli_sql_exception $e) {
    // Handle connection error
    echo "Connection failed: " . $e->getMessage();
    // Debugging information
    echo "<br>Server: $servername";
    echo "<br>Username: $username";
}
?>
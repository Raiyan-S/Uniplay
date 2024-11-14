<?php
$servername = "mysql.railway.internal";
$username = "root";
$password = "IHBIVKOIejGqXxLeJWmdbHYVBSolqvcQ";
$dbname = "railway";
$port = 3306;


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
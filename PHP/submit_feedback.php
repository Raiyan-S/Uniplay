<?php
// Database URL (replace with your actual URL)
$database_url = "mysql://root:IHBIVKOIejGqXxLeJWmdbHYVBSolqvcQ@mysql.railway.internal:3306/railway";

// Parse the URL
$db_url = parse_url($database_url);

$host = $db_url["host"];
$dbname = ltrim($db_url["path"], '/');
$username = $db_url["user"];
$password = $db_url["pass"];
$port = $db_url["port"];

// Establish a connection to the MySQL database
$conn = mysqli_connect($host, $username, $password, $dbname, $port);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data with basic sanitation
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    $rating = filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_NUMBER_INT);
    $recommend = filter_input(INPUT_POST, 'recommend', FILTER_SANITIZE_STRING);
    $services = filter_input(INPUT_POST, 'services', FILTER_SANITIZE_STRING);
    $feedback = filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_STRING);

    // Check if the email already exists in the database
    $checkEmailQuery = "SELECT * FROM feedback WHERE email = ?";
    $checkEmailStmt = mysqli_prepare($conn, $checkEmailQuery);
    mysqli_stmt_bind_param($checkEmailStmt, "s", $email);
    mysqli_stmt_execute($checkEmailStmt);
    mysqli_stmt_store_result($checkEmailStmt);

    if (mysqli_stmt_num_rows($checkEmailStmt) > 0) {
        echo "Error: This email has already been used to submit feedback.";
    } else {
        // Insert feedback into the database
        $insertQuery = "
            INSERT INTO feedback (email, name, phone, age, rating, recommend, services, feedback)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ";
        $insertStmt = mysqli_prepare($conn, $insertQuery);
        
        // Bind parameters to prevent SQL injection
        mysqli_stmt_bind_param($insertStmt, "sssissss", $email, $name, $phone, $age, $rating, $recommend, $services, $feedback);

        // Execute the statement
        if (mysqli_stmt_execute($insertStmt)) {
            echo "Feedback submitted successfully!";
        } else {
            echo "Error: Could not submit feedback.";
        }

        // Close the statement
        mysqli_stmt_close($insertStmt);
    }

    // Close the email check statement
    mysqli_stmt_close($checkEmailStmt);
}

// Close the database connection
mysqli_close($conn);
?>

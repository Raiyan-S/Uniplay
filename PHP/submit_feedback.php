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
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
    $rating = filter_var($_POST['rating'], FILTER_SANITIZE_NUMBER_INT);
    $recommend = filter_var($_POST['recommend'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (isset($_POST['services'])) {
        // Join all selected values with a comma, in case multiple checkboxes are selected
        $services = implode(", ", $_POST['services']);
    } else {
        $services = '';  // If no service is selected, set an empty string
    }
    $feedback = filter_var($_POST['feedback'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

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
            header("Location: feedback.php?success=true");
            exit(); 
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
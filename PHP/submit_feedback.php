<?php
// Database URL 
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
        $message = "Error: This email has already been used to submit feedback.";
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
            $message = "Feedback submitted successfully! Thank you for your feedback.";
        } else {
            $message = "Error: Could not submit feedback. Please try again.";
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Feedback</title>
    <link rel="stylesheet" href="path/to/your/theme.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="feedback-wrapper">
        <div class="feedback-container">
            <h1>Submit Feedback</h1>
            <?php if (isset($message)): ?>
                <p class="message"><?php echo htmlspecialchars($message); ?></p>
            <?php endif; ?>
            <form action="submit_feedback.php" method="post">
                <fieldset>
                    <legend>Personal Information</legend>
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required />
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required />
                    </div>
                    <div>
                        <label for="phone">Phone:</label>
                        <input type="text" id="phone" name="phone" required />
                    </div>
                    <div>
                        <label for="age">Age:</label>
                        <input type="number" id="age" name="age" required />
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Your Feedback</legend>
                    <div>
                        <label for="rating">Rate Our Service:</label>
                        <select id="rating" name="rating" required>
                            <option value="5">Excellent</option>
                            <option value="4">Good</option>
                            <option value="3">Average</option>
                            <option value="2">Bad</option>
                            <option value="1">Poor</option>
                        </select>
                    </div>
                    <div>
                        <label>Would you recommend us?</label>
                        <input type="radio" id="recommend_yes" name="recommend" value="yes" checked />
                        <label for="recommend_yes">Yes</label>
                        <input type="radio" id="recommend_no" name="recommend" value="no" />
                        <label for="recommend_no">No</label>
                    </div>
                    <div>
                        <label>Services Used:</label>
                        <input type="checkbox" id="service_movies" name="services[]" value="movies" />
                        <label for="service_movies">Movies</label>
                        <input type="checkbox" id="service_series" name="services[]" value="series" />
                        <label for="service_series">Series</label>
                    </div>
                    <div>
                        <label for="feedback">Additional Feedback:</label>
                        <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea>
                    </div>
                </fieldset>
                <div class="submit-container">
                    <input type="submit" value="Submit Feedback" />
                </div>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
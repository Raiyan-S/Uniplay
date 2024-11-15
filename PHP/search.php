<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!-- search.php -->

<?php
$title = 'Uniplay - Search Page';
include 'header.php';
?>

<!-- Search Section -->
<div class="search-container">
    <h1>Search for a Movie or Show.</h1>
    <form method="post" action="search.php">
        <div>
            <label for="title">Enter Title:</label>
        </div>
        <div>
            <input type="text" name="title" id="title"/>
        </div>
        <div>
            <input type="submit" value="Search" />
        </div>
    </form>

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

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Check if it's a search or a request
        if (isset($_POST['title'])) {
            $title = $conn->real_escape_string($_POST['title']);

            // Search for media in the database
            $sql = "SELECT * FROM media WHERE title LIKE '%$title%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Media found, display results
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='media-result'>";
                    echo "<img src='" . htmlspecialchars($row['poster_url']) . "' alt='" . htmlspecialchars($row['title']) . " Poster' width='150' />";
                    echo "<p>Title: " . htmlspecialchars($row['title']) . "</p>";
                    echo "<p>Type: " . htmlspecialchars($row['type']) . "</p>";
                    echo "<p>Genre: " . htmlspecialchars($row['genre']) . "</p>";
                    echo "<p>Release Year: " . htmlspecialchars($row['release_year']) . "</p>";
                    echo "<p>Description: " . htmlspecialchars($row['description']) . "</p>"; // Displaying the description
                    echo "</div>";
                }
            } else {
                // Media not found, show request form
                echo "<p>Media not found. Would you like to request it?</p>";
                ?>
                <form method="post" action="search.php">
                    <input type="hidden" name="request" value="1" />
                    <div>
                        <label for="req_title">Title:</label>
                        <input type="text" name="req_title" id="req_title" required="required" />
                    </div>
                    <div>
                        <label for="req_genre">Genre:</label>
                        <input type="text" name="req_genre" id="req_genre" required="required" />
                    </div>
                    <div>
                        <label for="req_type">Type:</label>
                        <select name="req_type" id="req_type">
                            <option value="Movie">Movie</option>
                            <option value="Show">Show</option>
                        </select>
                    </div>
                    <div>
                        <label for="req_email">Email:</label>
                        <input type="text" name="req_email" id="req_email" required="required" />
                    </div>
                    <div>
                        <input type="submit" value="Request Media" />
                    </div>
                </form>
                <?php
            }
        } elseif (isset($_POST['request'])) {
            // Insert the requested media into the requests table
            $req_title = $conn->real_escape_string($_POST['req_title']);
            $req_genre = $conn->real_escape_string($_POST['req_genre']);
            $req_type = $conn->real_escape_string($_POST['req_type']);
            $req_email = $conn->real_escape_string($_POST['req_email']);

            // Display the request information
            echo "<pre>";
            echo "Title: " . $req_title . "<br />";
            echo "Genre: " . $req_genre . "<br />";
            echo "Type: " . $req_type . "<br />";
            echo "Email: " . $req_email . "<br />";
            echo "</pre>";

            // SQL to insert the request into the database
            $sql = "INSERT INTO requests (title, type, user_email, request_date) VALUES ('$req_title', '$req_type', '$req_email', NOW())";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Thank you for your request! We’ll review it shortly.</p>";
            } else {
                echo "<p>Error: " . $conn->error . "</p>";
            }
        }
    }

    $conn->close();
    ?>

    <!-- Search Validation -->
    <script src="../JS/validation_search.js" type="text/javascript"></script>

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>
    </body>

</html>
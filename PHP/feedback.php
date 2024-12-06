<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- feedback.php -->
<?php
$title = 'Uniplay - Feedback';
include '../Includes/header.php';
?>

<!-- Feedback Form Section -->
<div class="feedback-wrapper">
    <form action="submit_feedback.php" method="post">
        <h1>Feedback Form</h1>
        <!-- Personal Information Section -->
        <fieldset>
            <legend>Personal Information</legend>
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" />
            </div>
            <div>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" />
            </div>
            <div>
                <label for="age">Age:</label>
                <input type="text" id="age" name="age" />
            </div>
        </fieldset>

        <!-- Feedback Section -->
        <fieldset>
            <legend>Your Feedback</legend>
            <div>
                <label for="rating">Rate Our Service:</label>
                <select id="rating" name="rating">
                    <option value="5">Excellent</option>
                    <option value="4">Good</option>
                    <option value="3">Average</option>
                    <option value="2">Bad</option>
                    <option value="1">Poor</option>
                </select>
            </div>
            <div>
                <label>Would you recommend us?</label>
                <input type="radio" id="recommend_yes" name="recommend" value="yes" checked="checked" />
                <label for="recommend_yes">Yes</label>
                <input type="radio" id="recommend_no" name="recommend" value="no" />
                <label for="recommend_no">No</label>
            </div>
            <div>
                <label>Services Used:</label>
                <input type="checkbox" id="service_movies" name="services[]" value="movies" />
                <label for="service_movies">Movies</label>
                <input type="checkbox" id="service_series" name="services[]" value="shows" />
                <label for="service_series">Shows</label>
            </div>
            <div>
                <div>
                    <label for="feedback">Additional Feedback:</label>
                </div>
                <div>
                    <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea>
                </div>
            </div>
        </fieldset>
        <!-- Submit Button -->
        <div class="submit-container">
            <input type="submit" value="Submit Feedback" />
        </div>
    </form>
    <div class="image-container">
        <img src="../Pictures/Feedback.png" alt="Feedback Image" class="feedback-image" />
    </div>
</div>

<!-- Footer Section -->
<?php include '../Includes/footer.php'; ?>

<!-- Feedback Form Validation -->
<script src="../JS/validation.js" type="text/javascript"></script>

</body>

</html>
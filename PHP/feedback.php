<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- feedback.php -->
<?php
$title = 'Uniplay - Feedback';
include 'header.php';
?>

<!-- Feedback Form Section -->
<div class="feedback-wrapper">
    <h2>Feedback Form</h2>
    <div class="feedback-container">
        <div class="form-container">
            <form action="submit_feedback.php" method="post">
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
                            <option value="excellent">Excellent</option>
                            <option value="good">Good</option>
                            <option value="average">Average</option>
                            <option value="poor">Poor</option>
                        </select>
                    </div>
                    <div>
                        <label>Would you recommend us?</label>
                        <input type="radio" id="recommend_yes" name="recommend" value="yes" />
                        <label for="recommend_yes">Yes</label>
                        <input type="radio" id="recommend_no" name="recommend" value="no" />
                        <label for="recommend_no">No</label>
                    </div>
                    <div>
                        <label>Services Used:</label>
                        <input type="checkbox" id="service_movies" name="services" value="movies" />
                        <label for="service_movies">Movies</label>
                        <input type="checkbox" id="service_series" name="services" value="series" />
                        <label for="service_series">Series</label>
                    </div>
                    <div>
                        <label for="feedback">Additional Feedback:</label>
                        <br>
                        <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea>
                    </div>
                </fieldset>
                <br>
                <!-- Submit Button -->
                <div>
                    <input type="submit" value="Submit Feedback" />
                </div>
            </form>
        </div>
        <div class="image-container">
            <img src="../Pictures/Feedback.png" alt="Feedback Image" class="feedback-image" />
        </div>
    </div>
</div>

<!-- Footer Section -->
<?php include 'footer.php'; ?>

</body>

</html>
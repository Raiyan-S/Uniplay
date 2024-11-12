<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- contact.php -->
<?php
$title = 'Uniplay - Contact';
include 'header.php';
?>

<!-- Main Content Below Navbar -->
<div class="login-wrapper">
    <div class="login-container">
        <h2>Contact Us</h2>
        <form action="#" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required />

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your message" required></textarea>

            <input type="submit" value="Send" class="login-button" />
        </form>
    </div>
    <div class="image-container">
        <img src="../Pictures/Contact.png" alt="Contact Us" class="login-image">
    </div>
</div>

<!-- Footer Section -->
<?php include 'footer.php'; ?>
</body>

</html>
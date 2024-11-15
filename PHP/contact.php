<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- contact.php -->
<?php $title = 'Uniplay - Contact';
include '../Includes/header.php'; ?>

<!-- Main Content Below Navbar -->
<div class="login-wrapper">
    <div class="login-container">
        <h2>Contact Us</h2>
        <form action="#" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" />
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" />
            </div>

            <div>
                <label for="message">Message:</label>
                <br />
                <textarea id="message" name="message" rows="5" cols="30"></textarea>
            </div>

            <div>
                <input type="submit" value="Send" class="login-button" />
            </div>
        </form>
    </div>
    <div class="image-container">
        <img src="../Pictures/Contact.png" alt="Contact Us" class="login-image" />
    </div>
</div>

<!-- Footer Section -->
<?php include '../Includes/footer.php'; ?>
</body>

</html>
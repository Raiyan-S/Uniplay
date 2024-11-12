<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- register.php -->
<?php
$title = 'Uniplay - Register';
include 'header.php';
?>

<!-- Main Content Below Navbar -->
<div class="login-wrapper">
    <div class="image-container">
        <img src="../Pictures/LoginRegister.png" alt="Uniplay" class="login-image" />
    </div>
    <div class="login-container">
        <h2>Create an Account</h2>
        <form action="#" method="POST">
            <label for="username">Username:</label>
            <input type="email" id="username" name="username" placeholder="Enter your username" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required />

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required />

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password"
                required />

            <input type="submit" value="Register" class="login-button" />
        </form>
        <div class="signup-link">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
        <div class="google-login">
            <p>Or sign up with Google:</p>
            <button class="google-button">Login with Google</button>
        </div>
    </div>
</div>

<!-- Footer Section -->
<?php include 'footer.php'; ?>
</body>

</html>
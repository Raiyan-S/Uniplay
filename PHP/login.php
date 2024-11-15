<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- login.php -->
<?php $title = 'Uniplay - Login';
include '../Includes/header.php'; ?>

<!-- Main Content Below Navbar -->
<div class="login-wrapper">
    <!-- Your login form or content here -->
    <div class="image-container">
        <img src="../Pictures/LoginRegister.png" alt="Uniplay" class="login-image" />
    </div>
    <div class="login-container">
        <h2>Login to Uniplay</h2>
        <form action="#" method="post">
            <div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" />
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" />
            </div>

            <div>
                <input type="submit" value="Login" class="login-button" />
            </div>
        </form>
        <div class="signup-link">
            <p>Don't have an account? <a href="register.php">Sign Up</a></p>
        </div>
    </div>
</div>

<!-- Footer Section -->
<?php include '../Includes/footer.php'; ?>
</body>

</html>
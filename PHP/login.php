<!-- ID: 2136108 
Name: Raiyan Subedar
Date: 9/22/2024 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uniplay - Login</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <a href="home.html">
            <img src="../Pictures/UniplayText.png" alt="Uniplay" class="logo-text">
        </a>
        </div>
        <ul class="nav-links">
            <li><a href="../index.html">Landing Page</a></li>
            <li><a href="home.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
        <div class="auth-links">
            <a href="login.html" class="login-btn">Login</a>
        </div>
    </nav>

    <!-- Main Content Below Navbar -->
    <div class="login-wrapper">
        <!-- Your login form or content here -->
        <div class="image-container">
            <img src="../Pictures/LoginRegister.png" alt="Uniplay" class="login-image">
        </div>
        <div class="login-container">
            <h2>Login to Uniplay</h2>
            <form action="#" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <input type="submit" value="Login" class="login-button">
            </form>
            <div class="signup-link">
                <p>Don't have an account? <a href="register.html">Sign Up</a></p>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-left">
            <p>&copy 2024 Uniplay. All rights reserved.</p>
        </div>
        <div class="footer-right">
            <p>Al-Hamra'a, Jeddah, Saudi Arabia</p>
        </div>
    </footer>

</body>

</html>
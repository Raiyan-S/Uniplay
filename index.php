<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- index.php -->
<?php
$title = 'Uniplay - Landing Page';
include 'PHP/indexHeader.php';
?>

    <!-- First Row: Welcome Section -->
    <div class="first-row">
        <div class="content">
            <h1>Welcome to Uniplay</h1>
            <p>Track Your Favorites, Unify Your Experience</p>
            <a href="PHP/register.php" class="signup-button">Sign Up</a>
        </div>
        <div class="image-container">
            <img src="Pictures/UniplayText.png" alt="Welcome Image" class="right-image">
        </div>
    </div>

    <!-- Second Row -->
    <div class="second-row">
        <div class="second-row-content">
            <div class="image-container">
                <img src="Pictures/Home.jpeg" alt="Home Image" class="second-row-image">
            </div>
            <div class="text-container">
                <h1>Home</h1>
                <p>Explore our platform and discover the convenience of having your favorite shows and movies in one
                    place.</p>
                <a href="PHP/home.php" class="guest-button">Guest Login</a>
            </div>
        </div>
    </div>

    <!-- Third Row: Services Section -->
    <div class="third-row">
        <div class="third-row-content">
            <div class="text-container">
                <h1>Our Services</h1>
                <p>We offer a variety of services to enhance your viewing experience, including seamless integration
                    with multiple streaming platforms, personalized recommendations, and much more.</p>
                <a href="PHP/services.php" class="guest-button">View Services</a>
            </div>
            <div class="image-container">
                <img src="Pictures/Service.jpeg" alt="Services Image" class="third-row-image">
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include 'PHP/footer.php'; ?>
</body>

</html>

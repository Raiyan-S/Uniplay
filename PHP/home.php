<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- home.php -->
<?php
$title = 'Uniplay - Home Page';
include 'header.php';
?>

<!-- Main Content -->
<div class="main-content">
    <div class="banner-row">
        <div class="banner-info">
            <h1>Everything Everywhere All at Once</h1>
            <p>Action, Drama</p>
        </div>
        <a href="video.php" class="details-btn">Trailer</a>
    </div>
    <!-- First Row: Movie/Show Posters -->
    <div class="home-first-row">
        <div class="top-week-container">
            <h2 class="trending-header">Trending Now</h2>
            <button class="more-button">More</button>
        </div>
        <div class="posters-container">
            <div class="poster">
                <a href="movie.php">
                    <img src="../Pictures/TheDarkKnight.jpg" alt="The Dark Knight" class="poster" />
                </a>
                <div class="info">
                    <h3>The Dark Knight</h3>
                    <p>Action, Thriller</p>
                </div>
            </div>
            <div class="poster" style="background-image: url('../Pictures/TheGodFather.jpg');">
                <div class="info">
                    <h3>The Godfather</h3>
                    <p>Drama, Crime</p>
                </div>
            </div>
            <div class="poster" style="background-image: url('../Pictures/GravityFalls.jpg');">
                <div class="info">
                    <h3>Gravity Falls</h3>
                    <p>Animation, Comedy</p>
                </div>
            </div>
            <div class="poster" style="background-image: url('../Pictures/WhenTheySeeUs.jpg');">
                <div class="info">
                    <h3>When They See Us</h3>
                    <p>Drama, History</p>
                </div>
            </div>
            <div class="poster" style="background-image: url('../Pictures/SpidermanAcrossTheSpiderverse.jpg');">
                <div class="info">
                    <h3>Spider-Man: Across the Spider-Verse</h3>
                    <p>Animation, Adventure</p>
                </div>
            </div>
            <div class="poster" style="background-image: url('../Pictures/BreakingBad.jpg');">
                <div class="info">
                    <h3>Breaking Bad</h3>
                    <p>Crime, Thriller</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Row: Top in a Week -->
    <div class="top-week-section">
        <div class="top-week-container">
            <h2 class="top-week-header">Top in a Week</h2>
            <button class="more-button">More</button>
        </div>
        <div class="posters-row">
            <div class="poster" style="background-image: url('../Pictures/BluePlanetII.jpg');">
                <div class="info">
                    <h3>Blue Planet II</h3>
                    <p>Documentary, Nature</p>
                </div>
            </div>
            <div class="poster" style="background-image: url('../Pictures/FullMetalAlchemistBrotherhood.jpg');">
                <div class="info">
                    <h3>Fullmetal Alchemist: Brotherhood</h3>
                    <p>Anime, Fantasy</p>
                </div>
            </div>
            <div class="poster" style="background-image: url('../Pictures/DeadpoolANDWolverine.jpg');">
                <div class="info">
                    <h3>Deadpool &amp; Wolverine</h3>
                    <p>Action, Comedy</p>
                </div>
            </div>
            <div class="poster" style="background-image: url('../Pictures/TheOffice.jpg');">
                <div class="info">
                    <h3>The Office</h3>
                    <p>Sitcom, Comedy</p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Footer Section -->
<?php include 'footer.php'; ?>

</body>

</html>
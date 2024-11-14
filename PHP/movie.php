<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- movie.php -->
<?php
$title = 'Uniplay - Movie Page';
include 'header.php';
?>

<!-- Main Content -->
<div class="main-content">

    <!-- First Row: Background Image -->
    <div class="movie-background" style="background-image: url('../Pictures/TheDarkKnightBackground.jpeg');">
    </div>

    <!-- Second Row: Movie Details -->
    <div class="movie-details">
        <div class="poster" style="background-image: url('../Pictures/TheDarkKnight.jpg');"></div>
        <div class="movie-info">
            <h1>The Dark Knight</h1>
            <p>Rating: &#9733;&#9733;&#9733;&#9733;&#9734;</p>
            <div class="description-box">
                <h2>Description</h2>
                <p>When a menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman, James
                    Gordon and Harvey Dent must work together to put an end to the madness.</p>
            </div>
            <div class="watch-box">
                <h2>Where to Watch</h2>
                <p>Streaming on: Netflix, Max, Hulu</p>
            </div>
            <button class="favorite-button">Add to Favorites</button>
            <p>Genre: Action, Adventure</p>
            <p>Release: 2008</p>
            <p>MPAA: Rated PG-13 for intense sequences of violence and some menace</p>
            <p>Runtime: 2h 32m</p>
        </div>
        <div class="video-trailer-container">
            <div class="video-trailer">
                <h3>Trailer</h3>
                <object data="https://www.youtube.com/embed/wxN1T1uxQ2g" type="text/html">
                    <p>Your browser does not support embedded videos. You can watch the trailer on
                        <a href="https://www.youtube.com/watch?v=wxN1T1uxQ2g">YouTube</a>.
                    </p>
                </object>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<div class="footer">
    <?php include 'footer.php'; ?>
</div>
</body>

</html>
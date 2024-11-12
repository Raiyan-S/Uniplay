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
<main class="main-content">

    <!-- First Row: Background Image -->
    <div class="movie-background" style="background-image: url('../Pictures/TheDarkKnightBackground.jpeg');">
    </div>

    <!-- Second Row: Movie Details -->
    <div class="movie-details">
        <div class="poster" style="background-image: url('../Pictures/TheDarkKnight.jpg');"></div>
        <div class="movie-info">
            <h2>The Dark Knight</h2>
            <p>Rating: &#9733;&#9733;&#9733;&#9733;&#9734;</p>
            <div class="description-box">
                <h3>Description</h3>
                <p>When a menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman, James
                    Gordon and Harvey Dent must work together to put an end to the madness.</p>
            </div>
            <div class="watch-box">
                <h3>Where to Watch</h3>
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
                <h4>Trailer</h4>
                <iframe src="https://www.youtube.com/embed/EXeTwQWrcwY" frameborder="0"
                    allowfullscreen="allowfullscreen"></iframe>
            </div>
        </div>
    </div>
</main>

<!-- Footer Section -->
<?php include 'footer.php'; ?>
</body>

</html>
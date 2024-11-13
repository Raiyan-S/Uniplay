<!-- ID: 2136108 
Name: Raiyan Subedar -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- picture.php -->
<?php
$title = 'Uniplay - Picture';
include 'header.php';
?>

<!-- Picture Gallery Section -->
<div class="gallery">
    <h1>Picture Gallery</h1>
    <div class="thumbnails">
        <img src="../Pictures/TheDarkKnight.jpg" alt="The Dark Knight" class="thumbnail" onclick="showImage('../Pictures/TheDarkKnight.jpg')" />
        <img src="../Pictures/TheGodFather.jpg" alt="The Godfather" class="thumbnail" onclick="showImage('../Pictures/TheGodFather.jpg')" />
        <img src="../Pictures/GravityFalls.jpg" alt="Gravity Falls" class="thumbnail" onclick="showImage('../Pictures/GravityFalls.jpg')" />
        <img src="../Pictures/WhenTheySeeUs.jpg" alt="When They See Us" class="thumbnail" onclick="showImage('../Pictures/WhenTheySeeUs.jpg')" />
        <img src="../Pictures/SpidermanAcrossTheSpiderverse.jpg" alt="Spider-Man: Across the Spider-Verse" class="thumbnail" onclick="showImage('../Pictures/SpidermanAcrossTheSpiderverse.jpg')" />
        <img src="../Pictures/BreakingBad.jpg" alt="Breaking Bad" class="thumbnail" onclick="showImage('../Pictures/BreakingBad.jpg')" />
        <img src="../Pictures/BluePlanetII.jpg" alt="Blue Planet II" class="thumbnail" onclick="showImage('../Pictures/BluePlanetII.jpg')" />
        <img src="../Pictures/FullMetalAlchemistBrotherhood.jpg" alt="Fullmetal Alchemist: Brotherhood" class="thumbnail" onclick="showImage('../Pictures/FullMetalAlchemistBrotherhood.jpg')" />
        <img src="../Pictures/DeadpoolANDWolverine.jpg" alt="Deadpool & Wolverine" class="thumbnail" onclick="showImage('../Pictures/DeadpoolANDWolverine.jpg')" />
        <img src="../Pictures/TheOffice.jpg" alt="The Office" class="thumbnail" onclick="showImage('../Pictures/TheOffice.jpg')" />
    </div>

    <div class="large-image">
        <img id="large-image" src="" alt="Large Image" style="display:none;" />
    </div>
</div>

<!-- JavaScript for Picture Gallery -->
<script type="text/javascript" src="../JS/script.js"></script>

<!-- Footer Section -->
<?php include 'footer.php'; ?>
</body>
</html>

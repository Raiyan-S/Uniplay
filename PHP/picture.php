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
        <img src="../Pictures/thumb1.jpg" alt="Thumbnail 1" class="thumbnail" onclick="showImage('../Pictures/image1.jpg')" />
        <img src="../Pictures/thumb2.jpg" alt="Thumbnail 2" class="thumbnail" onclick="showImage('../Pictures/image2.jpg')" />
        <img src="../Pictures/thumb3.jpg" alt="Thumbnail 3" class="thumbnail" onclick="showImage('../Pictures/image3.jpg')" />
        <img src="../Pictures/thumb4.jpg" alt="Thumbnail 4" class="thumbnail" onclick="showImage('../Pictures/image4.jpg')" />
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

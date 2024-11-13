function showImage(src, caption) {
    var largeImage = document.getElementById("large-image");
    var imageCaption = document.getElementById("image-caption");
    largeImage.src = src;
    largeImage.style.display = "block";
    imageCaption.textContent = caption;
    imageCaption.style.display = "block";
}

// Call showImage with the first image when the page loads
window.onload = function() {
    var firstThumbnail = document.querySelector(".thumbnail");
    if (firstThumbnail) {
        showImage(firstThumbnail.src, firstThumbnail.alt);
    }
};

function showImage(src, caption) {
    var largeImage = document.getElementById("large-image");
    var imageCaption = document.getElementById("image-caption");
    largeImage.src = src;
    largeImage.style.display = "block";
    imageCaption.textContent = caption;
    imageCaption.style.display = "block";
}

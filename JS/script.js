function showImage(src, caption) {
    var largeImage = document.getElementById("large-image");
    var imageCaption = document.getElementById("image-caption");
    largeImage.src = src;
    largeImage.style.display = "block";
    imageCaption.textContent = caption;
    imageCaption.style.display = "block";
}

// Call showImage with the first image when the page loads
window.onload = function () {
    var firstThumbnail = document.querySelector(".thumbnail");
    if (firstThumbnail) {
        showImage(firstThumbnail.src, firstThumbnail.alt);
    }
};


document.addEventListener("DOMContentLoaded", function () {
    // Get the elements to be scrollable
    const trendingContainer = document.querySelector('.posters-container');
    const topWeekContainer = document.querySelector('.posters-row');

    // Function to enable horizontal scroll with the mouse wheel
    function handleWheel(event) {
        // Prevent the default vertical scroll behavior
        event.preventDefault();

        // Get the scroll direction (left or right)
        const delta = event.deltaY || event.detail || event.wheelDelta;

        // Adjust horizontal scroll by delta amount
        this.scrollLeft += delta;

        // Optional: Add a smooth scroll behavior
        this.style.scrollBehavior = 'smooth';
    }

    // Add the wheel event listener to the scrollable containers
    if (trendingContainer) {
        trendingContainer.addEventListener('wheel', handleWheel, { passive: false });
    }

    if (topWeekContainer) {
        topWeekContainer.addEventListener('wheel', handleWheel, { passive: false });
    }
});


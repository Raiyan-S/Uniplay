// Validation for the search form

document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        const title = document.getElementById("title").value.trim();

        if (title === "") {
            alert("Please enter a title.");
            event.preventDefault(); // Prevent form submission
        }
    });
});

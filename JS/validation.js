document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        // Input validation and mandatory fields
        let isValid = true;
        const name = document.getElementById("name");
        const email = document.getElementById("email");
        const phone = document.getElementById("phone");
        const age = document.getElementById("age");

        // Check for empty mandatory fields
        if (name.value.trim() === "" || email.value.trim() === "" || phone.value.trim() === "" || age.value.trim() === "") {
            alert("All fields are required.");
            isValid = false;
        }

        // Email format validation
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email.value)) {
            alert("Please enter a valid email address.");
            isValid = false;
        }

        // Phone number validation (optional)
        const phonePattern = /^[0-9]{10}$/; // Example: 10-digit phone number
        if (!phonePattern.test(phone.value)) {
            alert("Please enter a valid 10-digit phone number.");
            isValid = false;
        }

        // Prevent form submission if validation fails
        if (!isValid) {
            event.preventDefault();
        }
    });
});

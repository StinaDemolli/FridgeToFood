document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("register-form");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); 

        const fullName = document.getElementById("fullName").value.trim();
        const username = document.getElementById("username").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirmPassword").value;
        const agree = document.getElementById("agree");

        const nameRegex = /^[a-zA-Z\s]{3,50}$/;
        const usernameRegex = /^[a-zA-Z0-9_]{3,20}$/;
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        const phoneRegex = /^\+?[0-9]{9,15}$/;
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;

        let isValid = true;

        if (!nameRegex.test(fullName)) {
            alert("Full Name must be between 3-50 characters and contain only letters and spaces.");
            isValid = false;
        }

        if (!usernameRegex.test(username)) {
            alert("Username must be 3-20 characters long and can contain letters, numbers, and underscores.");
            isValid = false;
        }

        if (!emailRegex.test(email)) {
            alert("Invalid email format.");
            isValid = false;
        }

        if (!phoneRegex.test(phone)) {
            alert("Phone number must be between 9-15 digits, with an optional + at the start.");
            isValid = false;
        }

        if (!passwordRegex.test(password)) {
            alert("Password must be at least 6 characters long, include at least one letter, one number, and one special character.");
            isValid = false;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            isValid = false;
        }

        if (!agree.checked) {
            alert("Please accept the terms and conditions.");
            isValid = false;
        }

        if (isValid) {
            form.submit();
        }
    });
});

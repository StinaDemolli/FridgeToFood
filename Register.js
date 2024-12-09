document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector('form');
    const BtnSubmit = document.getElementById('submit-btn');

    const validate = (ngjarja) => {
        ngjarja.preventDefault();

        const fullName = document.getElementById('fullName');
        const username = document.getElementById('username');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');
        const agree = document.getElementById('agree');

        if (fullName.value === "") {
            alert("Please enter your full name.");
            fullName.focus();
            return false;
        }

        if (username.value === "") {
            alert("Please enter your username.");
            username.focus();
            return false;
        }

        if (email.value === "") {
            alert("Please enter your email.");
            email.focus();
            return false;
        }

        if (!emailValid(email.value)) {
            alert("Please enter a valid email.");
            email.focus();
            return false;
        }

        if (phone.value === "") {
            alert("Please enter your phone number.");
            phone.focus();
            return false;
        }

        if (password.value === "") {
            alert("Please enter your password.");
            password.focus();
            return false;
        }

        if (confirmPassword.value === "") {
            alert("Please confirm your password.");
            confirmPassword.focus();
            return false;
        }

        if (password.value !== confirmPassword.value) {
            alert("Password and confirm password do not match.");
            confirmPassword.focus();
            return false;
        }

        if (!agree.checked) {
            alert("Please accept the terms and conditions.");
            agree.focus();
            return false;
        }

        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
        if (!passwordRegex.test(password.value)) {
            alert("Password must contain at least 6 characters, including letters and numbers.");
            password.focus();
            return false;
        }

        alert("Form is successfully validated and can be submitted.");
        return true;
    };

    const emailValid = (email) => {
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailRegex.test(email.toLowerCase());
    };

    form.addEventListener('submit', validate);
});

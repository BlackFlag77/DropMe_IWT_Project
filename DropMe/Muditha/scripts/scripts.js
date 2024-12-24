const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const password = document.getElementById('pass');
const rePassword = document.getElementById('rePass');
const form = document.getElementById('form');
const errorElement = document.getElementById('error');

form.addEventListener('submit', (e) => {
    let messages = [];
    
    messages.push('Error:');
    
    if (fname.value === '' || fname.value == null) {
        messages.push('First Name is required');
    }

    if (lname.value === '' || lname.value == null) {
        messages.push('Last Name is required');
    }

    var minLength = 8;
    var maxLength = 16;
    var hasUppercase = /[A-Z]/.test(password.value);
    var hasLowercase = /[a-z]/.test(password.value);
    var hasNumber = /\d/.test(password.value);

    if (password.value.length < minLength) {
        messages.push("Password must be at least " + minLength + " characters long.");
    }

    if (password.value.length > maxLength) {
        messages.push("Password can't have more than " + maxLength + " characters.");
    }

    if (!hasUppercase || !hasLowercase || !hasNumber) {
        messages.push("Password must contain at least one uppercase letter, one lowercase letter, and one number.");
    }

    if (password.value !== rePassword.value) {
        messages.push("Password mismatched.");
    }

    if (messages.length > 0) {
        e.preventDefault();
        errorElement.innerText = messages.join('\n');
    }
});
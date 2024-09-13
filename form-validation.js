function validateForm() {
    console.log("Validation function is running");

    // Retrieve form values
    const firstName = document.getElementById('first name').value;
    const lastName = document.getElementById('Last Name').value;
    const gender = document.getElementById('gender').value;
    const address = document.getElementById('Address').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const nic = document.getElementById('nic').value;

    // Validation patterns
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phonePattern = /^\d{10}$/; // Adjust if phone number format differs
    const nicPattern = /^\d{10}$/; // Adjust if NIC format differs

    // Email validation
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false; // Prevent form submission if email is invalid
    }

    // Phone number validation
    if (!phonePattern.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        return false; // Prevent form submission if phone number is invalid
    }

    // NIC validation
    if (!nicPattern.test(nic)) {
        alert("Please enter a valid 10-digit NIC number.");
        return false; // Prevent form submission if NIC is invalid
    }

    // Additional form validations can go here

    return true; // Submit the form if everything is valid
}

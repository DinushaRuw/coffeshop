document.getElementById('feedbackForm').addEventListener('submit', function(event) {
    // Basic form validation
    const feedback = document.getElementById('feedback').value.trim();

    if (feedback === "") {
        alert("Please enter your feedback.");
        event.preventDefault(); // Prevent form submission if feedback is empty
    }
});

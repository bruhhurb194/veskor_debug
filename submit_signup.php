<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["reason"])) {
        // Retrieve the submitted data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $reason = $_POST["reason"];
        
        // You can perform further validation or processing here
        
        // For demonstration purposes, let's simply display the submitted data
        echo "<h2>Thank You for Signing Up!</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Reason for Beta Testing:</strong> $reason</p>";
        
        // Redirect to index page after displaying the confirmation message
        header("Refresh: 0; URL=index_betatest.html"); // Redirect after 5 seconds
        exit();
    } else {
        // If any required field is not set, display an error message
        echo "<p>Error: Please fill in all required fields.</p>";
    }
} else {
    // If the form is not submitted via POST request, redirect the user to the sign-up page
    header("Location: sign_up_betatest.html");
    exit();
}
?>
